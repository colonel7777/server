 
@extends('app')

@section('title')Add @endsection

@section('content')

@include('inc.alert')

<h2>Добавить</h2>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/add">
@csrf



<div class="form-group" >
 <p>
 <input type='text' name='title' id='title' placeholder="title" required class="form-control" /></p>
</div>


<div class="form-group" >
 <input type='text'  name='description' id="description" placeholder="description" required class="form-control"/></p>
</div>

<div class="form-group" >
 <input type='text'  name='status' id="status" placeholder="status" required class="form-control"/></p>
</div>

<div class="form-group" >
 <p><input  type='submit'  class="btn btn-success"/></p>
</div>



</form>

@endsection