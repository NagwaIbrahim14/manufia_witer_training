<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="row mg-50 m-auto">
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        {{-- <div class="col-3">
            <label for="id" class="form-label" >id</label>
        <input type="text" name="id" class='form-control' >

        </div> --}}
        <div class="col-3">
            <label for="user_name" class="form-label" >name</label>
        <input type="text" name="user_name" class='form-control' >

        </div>
        <div class="col-3">
            <label for="email" class="form-label" >email</label>
        <input type="text" name="email" class='form-control'  >
        </div>
        <div class="col-3">
            <label for="user_password" class="form-label" >user_password</label>
        <input type="password" name="user_password" class='form-control'  >
        </div>
        <div class="col-3">
            <label for="created_at" class="form-label" >created_at</label>
        <input type="date" name="created_at" class='form-control'  >
        </div>
       <div class="col-3">
        <input type="submit"  class="form-action">

       </div>
    </form>
  </div>
</body>
</html>
