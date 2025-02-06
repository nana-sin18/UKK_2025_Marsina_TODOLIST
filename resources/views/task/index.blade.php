@extends("layout.tampilanlist")

@section("konten")
<div>
    <h1> {{ $data->nama}} </h1>
    <ul>
        @foreach ($todo as $task )
        <li>{{$task->nama}}</li>
        @endforeach
    </ul>
</div>
 
    
    @endsection