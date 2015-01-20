@extends('master')

@section('head')

	<link rel="stylesheet" type="text/css" href="css/admindash.css">


@stop


@section('content')

	<div class="container">
		<div class="jumbotron">
	    	<div class="well well-sm">
	    		<a href="/users/logout">Logout</a>
	    	</div>
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
		    						@foreach( $user->roles as $role)
							    		{{ $role->name }}
							    	@endforeach
		    					</td>
		    				</tr>
	    				@endforeach
		            
		        </tbody>
	    	</table>


	    	<h2>Add New User:</h2>

	    	<form method="POST" action="{{{ URL::to('/adduser') }}}" accept-charset="UTF-8">
			    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			    <fieldset>
			        <div class="input-group">
			            <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
			            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
			        </div>
			        <div class="input-group">
			            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
			            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
			        </div>
			        <div class="input-group">
			            <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
			            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
			        </div>
			        <div class="input-group">
			            <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
			            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
			        </div>

			        @if (Session::get('error'))
			            <div class="alert alert-error alert-danger">
			                @if (is_array(Session::get('error')))
			                    {{ head(Session::get('error')) }}
			                @endif
			            </div>
			        @endif

			        @if (Session::get('notice'))
			            <div class="alert">{{ Session::get('notice') }}</div>
			        @endif

			        <label>Roles</label>
					<div class="row">
						@foreach(Role::all() as $role)
							<div class="col-lg-1">
								<div class="input-group">
									<span class="input-group-addon">
										<input type="checkbox" name="chkRoles[]" id="{{ $role->id }}" value="{{ $role->id }}">
										<text>{{ $role->name }}</text>
									</span>
								</div><!-- /input-group -->
							</div><!-- /.col-lg-1 -->
						@endforeach
					</div>

			        <div class="form-actions form-group">
			          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
			        </div>

			    </fieldset>
			</form>

		</div>
	</div>

	

@stop