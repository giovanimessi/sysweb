
<form method="POST" action="{{route('categoria.busca')}}">
  @csrf
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="search" placeholder="pesquisa pelo nome...">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>
</form>

