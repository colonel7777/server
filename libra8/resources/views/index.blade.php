
@extends('app')

@section('title')Main @endsection

@section('content')


<center>
<div class="col-14 border pt-8">
<table>
@foreach ($tasks as $task)
   <tr>
    <td style="float:left;width: 700px;padding:5px;border: thin solid #32a1ce;margin:5px;"><a href="/tasks/{{ $task->id }}"> {{ $task->title }}  {{ $task->description }}  {{ $task->status }}</a></td>
    <td style="float:left;width: 50px;padding:5px;border: thin solid #32a1ce;margin:5px;"><a href="/delete/{{ $task->id }}">delete</a></td>
   </tr>
@endforeach
</table>
</div>
</center>

@endsection
