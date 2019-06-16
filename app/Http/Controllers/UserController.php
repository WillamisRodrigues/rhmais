<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Redirect;
use App\User;
use App\Message;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users',['users' => $users]);
    }

    public function edit()
    {
        return view('user-form-edit',['user' => User::whereId(request('id'))->firstOrFail()]);
    }

    public function add()
    {
        return view('user-add');
    }
    public function store()
    {
        if(request('id') == 0){
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
            DB::beginTransaction();
            $user = User::create([
                "name" => request('name'),
                "email" => request('email'),
                "password" => bcrypt(request('password')),
            ]);
            DB::commit();
        }else{

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
            DB::beginTransaction();
            $user =  User::whereId(request('id'))->firstOrFail();
            if($user){
                $user->name = request('name');
                $user->email = request('email');
                $user->password = bcrypt(request('password'));
                $user->save();
            }
            DB::commit();
        }
        return $this->index();
        //auth()->login($user);


    }

    public function delete()
    {
        $message = new Message();
        $message->message ="";
        $message->type ="";
        try{
            DB::beginTransaction();

            User::whereId(request("id"))->delete();

            DB::commit();
            $message->message = 'usuário excluído com sucesso';
            $message->type="success";
        }
        catch (\Exception $e)
        {
            DB::rollback();
            $message->message = $e->getMessage();
            $message->type="error";
        }
        return $this->index()->with(['message' => $message,'users' =>User::all()]);
    }

}
