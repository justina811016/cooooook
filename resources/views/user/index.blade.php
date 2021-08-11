@extends('layouts.base')

@section('styles')
  	<link rel="stylesheet" href="{{ mix('css/share.css') }}">
@endsection

@section('content')
  <!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
	<div class="container">
		@include('user.create_user')
		<div class="row">
			<div class="col-md-10">
			</div>
		    <div class="col-md-2">
		    	<button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#create_user">新增使用者</button>
		    </div>
		</div>
		<p>
		<div class="row">
			<div class="col-md-12">
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
			      	@foreach ($users as $index => $user)
			        <tr>
			          <th scope="row">{{ $index + 1 }}</th>
			          <td>{{ $user->name }}</td>
			          <td>{{ $user->email }}</td>
			          <td></td>
			        </tr>
			        @endforeach
			      </tbody>
			    </table>
			</div>
		</div>

		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-end">
		    <li class="page-item disabled">
		      <a class="page-link" href="#" tabindex="-1">Previous</a>
		    </li>
		    @for ($i = 1; $i <= $users->lastPage(); $i++)
		        <li class="page-item"><a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a></li>
		    @endfor
		    <li class="page-item">
		      <a class="page-link" href="#">Next</a>
		    </li>
		  </ul>
		</nav>
	</div>
</div>
@endsection

@section('scripts')
  <script src="{{ mix('js/user-index.js') }}"></script>
@endsection
