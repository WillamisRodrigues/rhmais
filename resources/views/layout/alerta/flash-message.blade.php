@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('warning'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('info'))

<div class="alert alert-info alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($errors->any())

<div class="animated fadeIn alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">×</button>
	<i class="fa fa-exclamation-triangle"></i>
	Verifique os campos obrigatórios.

</div>

@endif