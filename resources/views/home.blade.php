@extends('layouts.base')

@section('content')
  <!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    {{ Auth::user()->name }}
    <br>
    You are logged in!
</div>
@endsection
