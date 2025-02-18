@extends("layout.tampilanlist")

@section("konten")
<div class="container my-5">
    <div class="card" style="background-color: #f7f2ed; border-radius: 16px;">
        <div class="card-body">
            <h1 class="text-center" style="color: #6e4823;">{{ $data->nama }}</h1>
            <ul class="list-group">
                @foreach ($todo as $task)
                <li class="list-group-item" style="border-radius: 10px; background-color: #fff; margin-bottom: 10px;">
                    <span style="text-decoration: <?= $task->status == "selesai" ? "line-through" : "none" ?>; color: #6e4823;">{{ $task->nama }}</span>
                    <span style="font-size: 0.9rem; color: #888;">- {{ $task->tanggal }}</span>
                    <span style="font-size: 0.9rem; color: #888;">- prioritas : {{ $task->prioritas }}</span>
                    <form action="{{ url('hapustask/'.$task->id_task) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm ml-2" style="background-color:#6e4823; color:#f7f2ed; border:none;" onclick="return confirm('Apakah Anda yakin ingin menghapus task ini?')">Hapus</button>
                    </form>
                    <a href="{{ url('/task/'.$task->id_task.'/edit') }}" class="btn btn-sm ml-2" style="background-color:#6e4823; color:#f7f2ed; border:none;">Edit</a>
                </li>
                @endforeach
            </ul>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#tambahtask" style="background-color:#6e4823; color:#f7f2ed; border:none;">
                Tambah Task +
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahtask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #6e4823;">Tambah Task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ url('/tambahtask') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_task" class="form-label" style="color: #6e4823;">Nama Task</label>
                            <input type="text" class="form-control" name="nama_task" placeholder="Nama Task" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label" style="color: #6e4823;">Tanggal</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id" value="{{ $id_list }}">
                            <label for="prioritas" class="form-label" style="color: #6e4823;">Prioritas</label>
                            <select name="prioritas" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color:#6e4823; color:#f7f2ed; border:none;">Tutup</button>
                        <button type="submit" class="btn" style="background-color:#6e4823; color:#f7f2ed; border:none;">Simpan Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection