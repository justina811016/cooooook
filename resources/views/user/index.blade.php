@extends('layouts.base')

@section('content')
  <!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">名稱</th>
          <th scope="col">Email</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($users as $user)
        <tr>
          <th scope="row">1</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
