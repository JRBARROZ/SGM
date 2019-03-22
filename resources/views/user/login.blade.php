<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section id="conteudo-view" class="login">

		{!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

		<p>Acessar o sistema</p>

		<label>
			{!! Form::text('username',null,['class' => 'input', 'placeholder' => 'Usuario']) !!}
		</label>

		<label>
			{!! Form::password('password',['placeholder' => 'Senha']) !!}
		</label>

		{!! Form::submit('entrar') !!}

		{!! Form::close() !!}

	</section>
</body>
</html>