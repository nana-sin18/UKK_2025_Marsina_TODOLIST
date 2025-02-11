@extends("layout.tampilanlist")

@section("konten")
<div>
    <h1> {{ $data->nama}} </h1>
    <ul>
        @foreach ($todo as $task )
        <li>{{$task->nama}}</li>
        <form action={{url("hapustask/$task->id_task")}} method="POST">
            @method("DELETE")
            @csrf
            <button class= "btn btn-danger btn-sm">HAPUS</button>
            <a href="{{ url("/task/$task->id_task/edit") }}" class="btn btn-outline-success btn-sm">Edit</a>
          </form>
           @endforeach
    </ul>    
    

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahtask">
      Tambah Task
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambahtask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">tambah task</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <form method="POST" action={{url("/tambahtask")}}>
                    @csrf
            <div class="modal-body">
              <div class="input-group flex-nowrap">
              <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama_task">
              <input type="date" class="form-control" aria-describedby="addon-wrapping" name="date">
              <input type="hidden" class="form-control" aria-describedby="addon-wrapping" name="id" value={{$id_list}}>
              <select name="prioritas" id="prioritas">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  
                </select>
            </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan task</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>
 
    
    @endsection