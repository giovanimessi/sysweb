<form method="GET" action=''>
    <div class="form-group">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="searchText" placeholder="Pequisa do produto" value="{{$searchText}}" >
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </span>
        </div>
    </div>
 </form>
    