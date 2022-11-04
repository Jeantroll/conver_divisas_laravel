
@extends('welcome')

@section('content')

<style>
    html,body {
  color: black;
  text-align: center;
  padding: 0;
  maring: 0;
  background-color: #f7f7f7;
  font-family: sans-serif;
}
#login-form{
  display: flex;
  flex-direction: column;
  width: 300px;
  text-align: center;
  padding: 2rem;
}
.mb-1{
 margin-bottom: 15px;
}
.mb-2{
  margin-bottom: 20px;
}
.mb-3{
  margin-bottom: 25px;
}
.mb-4{
  margin-bottom: 30px;
}

input{
  padding:12px;
  border-radius: 8px;
  border: 1px solid lightGray;

}
.sig-in-btn{
  background-color: #5e5ef7;
  border: 0;
  padding: 1rem;
  border-radius: 8px;
  color: white;
  font-weight: 600;
box-shadow: 10px 10px rgba(0,0,0,0.5);
cursor: pointer;
}
.create-acount-btn{
  background-color: white;
  border: 1px solid lightGray;
  padding: 1rem;
  border-radius:8px;
  font-weight: 600;
  cursor: pointer;
box-shadow: 10px 10px rgba(0,0,0,0.5);
}
a {
   text-decoration: none;
   color: gray
}
.create-account{
  font-weight: bold;
  color:black;
}
.center-form {
  display: flex;
  align: items center;
  justify-content: center;
  padding-top: 100px;
}

</style>


<div class="center-form">
    <form method="POST" action="login" id="login-form">
        @csrf
      <h2 class="mb-4">Ingresar</h2>
      <input class="mb-1" name="email" type="text" placeholder="Email">
      <input class="mb-2" name="password" type="password" placeholder="Contraseña">
      <button type="submit" class="mb-1 sig-in-btn">INGRESAR</button>
      <a href="/register" class="create-acount-btn">Crear cuenta</a>
    </form>

  </div>

  @endsection
