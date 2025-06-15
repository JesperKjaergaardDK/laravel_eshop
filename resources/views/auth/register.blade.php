<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')

  <title>Login</title>
</head>
<body>
  <div class="container m-auto flex justify-center h-screen">
    <div class="flex flex-col justify-center gap-5 w-fit">
      <a class="btn-style" href="{{ route('homepage') }}">Forside</a>
      <a class="btn-style" href="{{ route('login') }}">Login</a>
      
      <form class="flex flex-col items-center gap-4 " action="{{ route('loginAttempt') }}" method="post">
        @csrf
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-1">
            <label for="">Full name</label>
            <input type="text" name="name" value="{{ old('name') }}">
          </div>
          <div class="flex flex-col gap-1">
            <label for="">E-mail</label>
            <input autocomplete="off" type="text" name="email" value="{{ old('email') }}">
          </div>
          <div class="flex flex-col gap-1">
            <label for="">Password</label>
            <input type="text" name="password" value="{{ old('password') }}">
          </div>
          <div class="flex flex-col gap-1">
            <label for="">Confirm password</label>
            <input type="text" name="confirm_password"> 
          </div>
        </div>
    
        <button class="btn-style" type="submit">Register</button>
        
      </form>
    
    
      @if ($errors->all())
        <ul>
          @foreach ($errors->all() as $error)
            <li class=" text-red-600">* {{ $error }}</li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
  
</body>
</html>