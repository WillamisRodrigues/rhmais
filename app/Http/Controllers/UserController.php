<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Flash;

// use App\Message;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $users = User::all();
        $users = DB::table('users')->paginate(5);
       return view('user_sistema.index', compact('users', $users));
    }

        public function create()
    {
        return view('user_sistema.create');
    }

     public function store(Request $request, User $users)
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
      return redirect()->route('user_sistema.index');
        }

      public function show( User $users)
    {
        return view('user_sistema.show',compact('users',$users));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        //  return view('edit',['user' => User::whereId(request('id'))->firstOrFail()]);
         return view('user_sistema.edit', compact('users', $users));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $request->session()->flash('message', 'Sucesso!');
        return redirect('user_sistema');
    }

     public function destroy(Request $request)
    {
        // dd($request->all());
        $message = "";
        try{
            DB::table('users')->where('id', $request->_id)->delete();
            // DB::beginTransaction();

            // User::whereId(request("_id"))->destroy();

            // DB::commit();
            $message = 'usuário excluído com sucesso';
        }
        catch (\Exception $e)
        {
            DB::rollback();
            $message = $e->getMessage();
        }
        Flash::success('Usuário deletado com sucesso.');
        return redirect(route('user_sistema.index'));
        return $this->index()->with(['success' => $message,'users' =>User::all()]);
    }

}
