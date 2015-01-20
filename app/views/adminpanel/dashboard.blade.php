@extends('master')

@section('head')

	<link rel="stylesheet" type="text/css" href="css/admindash.css">


@stop


@section('content')

	<div class="container">
		<div class="jumbotron">
			<h2>List of Users:</h2>
			<table class="table">
		        <thead>
		            <tr>
		                <th>No.</th>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Role</th>
		            </tr>
		        </thead>
		        <tbody>
		            
		                @foreach ($users as $user)
			                <tr>
			                	<td>{{ $user->id }}</td>
		    					<td>{{ $user->username }}</td>
		    					<td>{{ $user->email }}</td>
		    					<td>
		    						@foreach( Confide::user()->roles as $role)
							    		{{ $role->name }}
							    	@endforeach
		    					</td>
		    				</tr>
	    				@endforeach
		            
		        </tbody>
	    	</table>

	    	<a href="/users/logout">Logout</a>
		</div>
	</div>

	

@stop