@extends('layout.tampilanlist')

@section('konten')
<form action="/edit/{{$list->id}}" method="POST" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 600px; margin: 20px auto;">
    @method("PUT")
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="nama" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ $list->nama }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <button type="button" class="btn" onclick="window.history.back();" style="background-color:#6e4823; color:#f7f2ed; border:none;">Tutup</button>
    <button type="submit" class="btn" style="background-color:#6e4823; color:#f7f2ed; border: none;">Update</button>
</form>
@stop