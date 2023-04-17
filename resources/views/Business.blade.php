{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Time', 'Time:') }}
			{{ Form::text('Time') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::label('image', 'Image:') }}
			{{ Form::text('image') }}
		</li>
		<li>
			{{ Form::label('id_user', 'Id_user:') }}
			{{ Form::text('id_user') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}