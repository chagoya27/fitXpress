<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario con Javascript</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('css/estilosFormulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estiloLogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosHeader.css') }}">


</head>
<body>

    <x-header>Inicia Sesión</x-header>

	<main>
		<form action="" class="formulario" id="formulario">
            
            <!--Grupo  usuario-->
            <div class="formulario-grupo " id="formulario-usuario">
                <label for="usuario" class="formulario-label">Usuario</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="usuario" id="usuario" placeholder="John123">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El usuario tiene que ser de 4 a 16 digitos y no puede contener espacios en blanco </p>
            </div>


            <!--Grupo contraseña-->
            <div class="formulario-grupo" id="formulario-password">
                <label for="password" class="formulario-label">Contraseña</label>
                <div class="formulario-grupo-input">
                    <input type="password" class="formulario-input" name ="password" id="password" >
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">La contraseña tiene que ser de 4 a 12 digitos y no puede contener espacios en blanco </p>
            </div>

            <div class="formulario-mensaje" id="formulario-mensaje">
                <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error:</b> Por favor rellene el formulario correctamente</p>
            </div>

            <div class="formulario-grupo-enviar">
                <button type="submit" class="formulario-btn">Enviar</button>
                <p class="formulario-mensaje-exito" id="formulario-mensaje-exito">El formulario se envió exitosamente</p>
            </div>



            <div class="">
                <p>¿No tienes una cuenta? <a href="{{ url('/SingUp/create') }}">Crea una nueva</a></p>
            </div>

        </form>
	</main>

	<script src="{{ asset('js/formulario.js') }}"></script>
	<script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>
</body>
</html>