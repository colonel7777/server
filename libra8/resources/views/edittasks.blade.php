 
@extends('app')

@section('title')Edit @endsection

@section('content')

@include('inc.alert')

<h1>Edit</h1>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/edit">
@csrf



<div class="form-group" >
<p> <input type='text' name='title' id='title'  required class="form-control" value="{{ $tasks->title }}" /></p>
</div>


<div class="form-group" >
<p> <input type='text'  name='description' id="description"  value="{{ $tasks->description }}" required class="form-control"/></p>
</div>

<div class="form-group" >
<p> <input type='text'  name='status' id="status"  value="{{ $tasks->status }}" required class="form-control"/></p>
<p> <input type='hidden'  name='id' id="id"  value="{{ $tasks->id }}" required class="form-control"/></p>
</div>

<div class="form-group" >
 <p><button type="submit" class="btn btn-success">Сохранить</button></p>
</div>



</form>

@endsection