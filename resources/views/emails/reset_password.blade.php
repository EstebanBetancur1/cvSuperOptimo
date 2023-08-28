<!DOCTYPE html>
<html>
<head>
    <title>Recuperación de Contraseña</title>
</head>
<body>
    <p>Hola,</p>
    <p>Has solicitado recuperar tu contraseña. Utiliza el siguiente token para completar el proceso:</p>
    <p><a href="{{ route('recover_token', ['token' => $token]) }}">link</a></p>

    
</body>
</html>
