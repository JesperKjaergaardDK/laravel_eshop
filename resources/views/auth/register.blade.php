<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>

<body>
  <h1>Register</h1>

  <form action="{{route('registerAttempt')}}" method="POST">
    @csrf
    
    <label for="">Full name</label>
    <input type="text" name="name" value="{{ old('name') }}">
    
    <label for="">E-mail</label>
    <input autocomplete="off" type="text" name="email" value="{{ old('email') }}">

    <label for="">Password</label>
    <input type="text" name="password" value="{{ old('password') }}">

    <label for="">Confirm password</label>
    <input type="text" name="confirm_password" value="{{ old('confirm_password') }}">

    <button type="submit">Create</button>
  </form>


  @if ($errors->all())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

</body>

</html>
