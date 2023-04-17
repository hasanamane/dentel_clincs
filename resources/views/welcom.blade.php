{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('fullname', 'Fullname:') }}
			{{ Form::text('fullname') }}
		</li>
		<li>
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::text('password') }}
		</li>
		<li>
			{{ Form::label('age', 'Age:') }}
			{{ Form::text('age') }}
		</li>
		<li>
			{{ Form::label('gendar', 'Gendar:') }}
			{{ Form::text('gendar') }}
		</li>
		<li>
			{{ Form::label('image', 'Image:') }}
			{{ Form::text('image') }}
		</li>
		<li>
			{{ Form::label('university', 'University:') }}
			{{ Form::text('university') }}
		</li>
		<li>
			{{ Form::label('is_admin', 'Is_admin:') }}
			{{ Form::text('is_admin') }}
		</li>
		<li>
			{{ Form::label('is_doctor', 'Is_doctor:') }}
			{{ Form::text('is_doctor') }}
		</li>
		<li>
			{{ Form::label('is_supervisor', 'Is_supervisor:') }}
			{{ Form::text('is_supervisor') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}