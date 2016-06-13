@extends('layouts.app')
@section('content')
@if(!empty($users))

<div>
  <p>
    {!! $msg !!}
  </p>
  This demo will fetch and show records from the database for the first <b>request</b>.<br/> For subsequent requests which are requested in next 10 seconds, demo will show data from the <b>memcache</b>.<br/>
  <br/>
</div>
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Age</th>
        <th>Occupation</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->occupation }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif
@stop