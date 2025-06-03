<a href="{{ route('homepage') }}"><button type="button">forside</button></a>


<form action="{{ route('loginAttempt') }}" method="post">
  @csrf
  <label for="">E-mail</label>
  <input type="text" name="email">

  <label for="">Password</label>
  <input type="text" name="password">

  <button type="submit">Login</button>
</form>

<a href="{{ route('register') }}">Register as a new user</a>


@if ($errors->all())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>  
@endif
