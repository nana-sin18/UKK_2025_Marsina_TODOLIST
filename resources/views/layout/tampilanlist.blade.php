<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">

</head>

<body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", serif;
      font-weight: 400;
    }

    body {
      display: flex;
      min-height: 100vh;
      font-family: "Poppins", serif;
      font-weight: 300;
      font-style: normal;
    }

    .sidebar {
      width: 250px;
      background-color: #6e4823;
      color: #f7f2ed;
      display: flex;
      flex-direction: column;
      padding: 20px;

      .submenu-title {
        font-weight: 600;
        margin: 20px 0px;
      }


      .submenu {
        padding: 0;

        li {
          a {
            padding: 0;
            padding-left: 10px;
          }
        }
      }

      li {
        list-style: none;
      }

    }

    .sidebar h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .sidebar a {
      text-decoration: none;
      color: #f7f2ed;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 10px;
      display: block;
    }

    .sidebar a:hover {
      background-color: #6e4823;
    }

    .content {
      flex-grow: 1;
      background-color: #f7f2ed;
      padding: 20px;
    }

    .content h1 {
      color: #6e4823;
    }

    .content p {
      margin-top: 10px;
      line-height: 1.6;
    }

    .active {
      background: rgba(255, 255, 255, 0.2);
    }
    /* teks TuDu */
    .tudu-text {
  position: absolute;
  right: 40px; 
  top: \  
  
  px; 
  font-size: 30px;
  color: #6e4823;
}

@media (max-width: 768px) {
  .tudu-text {
    font-size: 20px;
    right: 10px; 
    top: 10px;
  }
}


  </style>
  <?php

  use App\Models\Lists;

  $lists = Lists::all();
  ?>
  <div style="justify-content: space-between; display:flex;">
  <div class="sidebar">
    <h2>My Dashboard</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #f7f2ed; color:#6e4823; border:none;">
      Tambah List +
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #6e4823">Masukkan List</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> 
          <form method="POST" action="{{ url ("/tambahlist") }}">
                  @csrf
          <div class="modal-body">
            <div class="input-group flex-nowrap">
            <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama_list" required>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #6e4823; border:none;">Close</button>
            <button type="submit" class="btn btn-primary" style="background-color: #6e4823; border:none;">Simpan List</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <ul>
      <li>
        <h5 class="submenu-title">My project</h5>
        <ul class="submenu">
          @foreach ($lists as $Lists )
          <li class="mb-5"><a href="/list/{{$Lists->id}}">{{ $Lists->nama }}</a>
            <form action={{ url("hapuslist/$Lists->id")}} method="POST">
              
            @method("DELETE")
            @csrf
            <button class="btn btn-sm" style="background-color: #f7f2ed; border:none; color:#6e4823; width:90px; height:30px;" onclick="return confirm('Apakah Anda yakin ingin menghapus list ini?')">HAPUS</button>
            <a href="{{ url("/list/$Lists->id/editlist") }}" class="btn btn-sm" style="background-color: #f7f2ed; border:none; color:#6e4823; margin-top:20px; width:90px; height:30px; display: flex;
  align-items: center;
  justify-content: center;">Edit</a>
          </form>
          </li>
          
          @endforeach
        </ul>
      </li>
    </ul>
  </div>
  <div>
    @yield("konten")
  </div>
  <div class="tudu-text">
  <p>Tudu</p>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>