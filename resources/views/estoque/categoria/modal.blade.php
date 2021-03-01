<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$dado->id}}">
<form method="GET" action="{{route('del',$dado->id)}}">
    @csrf
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #367fa9;">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h2 class="modal-title" style="color:#fff;text-align=center;">Apagar Categoria</h2>
			</div>
			<div class="modal-body">
				<h2><span>Confirme se deseja apagar a categoria!</span></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-danger">Confirmar</button>
			</div>
		</div>
	</div>
</form>
</div>