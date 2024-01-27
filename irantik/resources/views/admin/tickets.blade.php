@extends('layout.admin')
@section('content')
<table class="table table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">کنسرت</th>
      <th scope="col">نام مشتری</th>
      <th scope="col">سانس</th>
      <th scope="col">جایگاه</th>
      <th scope="col">صندلی</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tickets as $ticket)
    <tr>
      <th scope="row">{{$ticket->id}}</th>
      <td>{{$ticket->sans->event->name}}</td>
      <td>{{$ticket->name}}</td>
      <td>{{$ticket->sans->date}}</td>
      <td>{{$ticket->chair->place}}</td>
      <td>{{$ticket->chair->id}}</td>
      <td><a href="/admin/ticket/{{$ticket->id}}/cancel" class="btn btn-danger btn-sm">ابطال</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection