<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valida tu correo</title>
</head>
<body>
	<h3>Enhorabuena {{$newsletter->email}}</h3>

	<p>Por favor haz click en el link de activacion del email para confirmarlo: </p>
	<a href="http://blog.test/newsletter/Verify/{{$newsletter->token}}">http://blog.test/Newsletter/Verify/{{$newsletter->token}}</a>
</body>
</html>