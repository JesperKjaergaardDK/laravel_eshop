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
      <a class="btn-style" href="{{ route('register') }}">Register as a new user</a>

      
      <form class="flex flex-col items-center gap-4 " action="{{ route('loginAttempt') }}" method="post">
        @csrf
        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-1">
            <label for="email">E-mail</label>
            <input id="email" type="text" name="email">
          </div>
          <div class="flex flex-col gap-1">
            <label for="password">Password</label>
            <input id="password" type="text" name="password">
          </div>
        </div>
    
        <button class="btn-style" type="submit">Login</button>
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