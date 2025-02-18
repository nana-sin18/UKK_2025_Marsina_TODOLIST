@extends('layout.tampilanlist')

@section('konten')
<form action="{{ url("/task/$task->id_task") }}" method="post">
    @method("PUT")
    @csrf
    <div class="modal-content" style="background-color: #f7f2ed; border: 2px solid #6e4823; border-radius: 10px; padding: 20px; margin: 20px;">
        <div class="modal-header" style="border-bottom: 1px solid #6e4823; margin-bottom:15px;">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #6e4823; margin-bottom:25px;">Edit Task</h1>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label" style="color: #6e4823;">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $task->nama }}" style="border: 1px solid #6e4823;" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label" style="color: #6e4823;">Status</label>
                <select name="status" class="form-select" style="border: 1px solid #6e4823;" required>
                    <option value="belum_selesai">Belum Selesai</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label" style="color: #6e4823;">Date</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $task->tanggal }}" style="border: 1px solid #6e4823;" required>
            </div>
            <div class="mb-3">
                <label for="prioritas" class="form-label" style="color: #6e4823;">Prioritas</label>
                <select name="prioritas" class="form-select" style="border: 1px solid #6e4823;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="modal-footer" style="display: flex; gap: 10px;">
            <button type="button" class="btn" onclick="window.history.back()" style="background-color:#6e4823; color:#f7f2ed; border:none;">Close</button>
            <button type="submit" class="btn" style="background-color:#6e4823; color:#f7f2ed; border:none;">Update</button>
        </div>
    </div>
</form>
@stop