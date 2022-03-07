<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form action="{{ route('login-process') }}" method="post">
  @csrf
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Admin Login</h1>
  <div class="form-group">
    <input type="email" required="required" name="EmailA" @if (Session::exists('error')) value="{{ Session::get('error.EmailA') }}" @endif class="form-control" />
    <label class="form-label">Email</label> 
  </div>
  <div class="form-group">
    <input required="required" name="PassA" type="password"  class="form-control" />
    <label class="form-label">Password</label>
    <div class="card-footer text-center">
      <br>
      @if (Session::exists('error'))
          <div>
              {{ Session::get('error.message') }}
          </div>
      @endif
      <button class="btn">Login</button>
  </div>
  </div>
</form>
<!-- partial -->

    <script  href="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
</body>
</html>
