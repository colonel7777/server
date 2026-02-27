 @if ($errors->any())

<div class="alert alert-danger">

<ul>
@foreach($errors->all() as $error)

 <li>{{$error}}</li>

@endforeach
</ul>
</div>
@endif

@if(session('sussess'))

<div class="alert alert-sussess">

    {{session('sussess') }}

</div>


@endif
