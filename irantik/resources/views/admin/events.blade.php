@extends('layout.admin')
@section('content')
<style>
    img{
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
<a href="/admin/event/create" class="btn btn-primary mb-3">افزودن کنسرت</a>
<table class="table table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">عکس</th>
      <th scope="col">نام</th>
      <th scope="col">سالن</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td><img src="{{$event->image}}" alt="{{$event->name}}"></td>
      <td>{{$event->name}}</td>
      <td>{{$event->salon}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection