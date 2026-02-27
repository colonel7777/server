
@extends('app')

@section('title')Books @endsection

@section('content')

<div  class="col-10  border ">
<p>{{$author}}</p>
<p>{{$caption}}</p>
<p><img style="width: 200px;" src={{$picture}} /></p>
<p>{{$content}}</p>
<div class="form-group" >
 <p><a href="/read/{{$id}}-{{$alt_name}}.html" /><input  type='button' style="width: 100px;"  value="Read"  class="btn btn-success"/></p>
 <p><a href="/" /><input  type='button' style="width: 100px;"  value="Download"  class="btn btn-success"/></p>
 <p><a href="/xxx" /><input  type='button' style="width: 100px;"  value="Search"  class="btn btn-success"/></p>
</div>

</div>


@endsection
