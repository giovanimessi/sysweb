<form method="GET" action='{{route('produtos')}}'>
<div class="form-group">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="pesText" placeholder="Pequisa do produto"  value="{{$pesText}}">
        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </span>
    </div>
</div>

</form>

