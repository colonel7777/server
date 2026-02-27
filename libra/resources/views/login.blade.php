 
@extends('app')

@section('title')Login @endsection

@section('content')

@include('inc.alert')

<h1>Вход</h1>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/login">
@csrf



<div class="form-group" >
 <p><label for="email">Ваш email</label>
 <input type='text' name='email' id='email' placeholder="e-mail"  class="form-control" /></p>
</div>


<div class="form-group" >
 <p><label for="pass1">Введите пароль</label> 
 <input type='password'  name='password' id="password" placeholder="password" class="form-control"/></p>
</div>

<div class="form-group" >
 <p><input  type='submit'  class="btn btn-success"/></p>
</div>


<div class="form-group" >
 <p><a href=/register/> register</p>
</div>

</form>

@endsection