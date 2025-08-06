<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {background: #f9f9f9; display:flex; align-items:center; justify-content:center; height:100vh; font-family: Montserrat, sans-serif;}
    .login-card {width: 360px; padding:2rem; border-radius:12px; box-shadow:0 4px 20px rgba(0,0,0,0.1); background:#fff;}
  </style>
</head>
<body>
  <div class="login-card">
    <h4 class="mb-4 text-center">Admin Login</h4>
    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form method="POST" action="/login">
      @csrf
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="username" class="form-control" value="{{ old('username') }}" required>
        @error('username') <small class="text-danger">{{ $message }}</small> @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" required>
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
      </div>
      <button class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</body>
</html>