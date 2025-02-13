<form action="/edit/{{$list->id}}" method="POST">
    @method("PUT")
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $list->nama }}">
    </div>
</form>