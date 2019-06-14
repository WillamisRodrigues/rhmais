  <div class="container">
	<h1 class="mt-2">Pesquisa usuarios</h1>
        @if(count($usuarios) == 0)
            <div class="alert alert-danger mt-2">Nenhum usuario encontrado!</div>
        @else
		<table class="table mt-2 text-center">
                <tr>
			<th>Id</th>
			<th class="text-left">Informação</th>
			<th>Nome</th>
			<th>Total</th>
			<th>Data</th>
                </tr>
                @foreach ($usuarios as $u)
                    <tr>
                        <td>{ { $p->id } }</td>
                        <td class="text-left"{ { $p->informacao } }</td>
                        <td>{ { $p->nome } }</td>
                        <td>{ { $p->toal } }</td>
                        <td>{ { $p->data} }</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>