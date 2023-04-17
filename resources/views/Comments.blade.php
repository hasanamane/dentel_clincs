{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::text('content') }}
		</li>
		<li>
			{{ Form::label('Time', 'Time:') }}
			{{ Form::text('Time') }}
		</li>
		<li>
			{{ Form::label('id_consulting', 'Id_consulting:') }}
			{{ Form::text('id_consulting') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}