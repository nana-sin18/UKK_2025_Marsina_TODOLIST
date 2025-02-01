<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            
            .submenu-title{
              font-weight: 600;
              margin: 20px 0px;
            }


            .submenu{
              padding : 0;
              li {
                a{
                  padding : 0;
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
            color: #ecf0f1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .content {
            flex-grow: 1;
            background-color: #ecf0f1;
            padding: 20px;
        }

        .content h1 {
            color: #2c3e50;
        }

        .content p {
            margin-top: 10px;
            line-height: 1.6;
        }

        .active{
          background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
  <?php
  use App\Models\Lists;
  $lists = Lists::all();
  ?>
    <div class="sidebar">
        <h2>My lili</h2>
        <ul>
          <li>
            <h5 class="submenu-title">My Project</h5>
            <ul class="submenu">
              @foreach ($lists as $daftar)
    <li> {{$daftar -> nama}}</li>
    @endforeach
              {{-- <li><a href={{ url("/user")}} class="">User</a></li>
              <li><a href={{ url("/produk")}}  class="">Produk</a></li>
              <li><a href={{ url("/pelanggan")}} >Pelanggan</a></li>
              <li><a href={{ url("/penjualan")}} >Penjualan</a></li>
            </ul>
          </li> --}}

          {{-- <li>
            <h5 class="submenu-title">Transaksi</h5>
            <ul class="submenu">
              <li><a href="#">Penjualan</a></li>
            </ul>
          </li> --}}
        </ul>
    </div>
    <div class="content">
        @yield("konten")

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>