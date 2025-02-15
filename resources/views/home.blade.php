<div>
    <h1>hai kamu ud bisa masuk ke halaman home nich</h1>
    
    <form action="{{ route('logout') }}" method="POST">
      <h1>Hi, {{ Auth::user()->name }}</h1>
  <h6>{{ Auth::user()->email }}</h6>
      @csrf
      <button type="submit">Logout</button>
  </form>
  </div>