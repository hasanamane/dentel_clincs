{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('age', 'Age:') }}
			{{ Form::text('age') }}
		</li>
		<li>
			{{ Form::label('FullName', 'FullName:') }}
			{{ Form::text('FullName') }}
		</li>
		<li>
			{{ Form::label('PhoneNumber', 'PhoneNumber:') }}
			{{ Form::text('PhoneNumber') }}
		</li>
		<li>
			{{ Form::label('id_user', 'Id_user:') }}
			{{ Form::text('id_user') }}
		</li>
		<li>
			{{ Form::label('id_case', 'Id_case:') }}
			{{ Form::text('id_case') }}
		</li>
		<li>
			{{ Form::label('id_illness', 'Id_illness:') }}
			{{ Form::text('id_illness') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}