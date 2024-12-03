<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario con Javascript</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('css/estilosFormulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosHeader.css') }}">



</head>
<body>

    <x-header>Registrate</x-header>

	<main>
        <form action="{{ url('/SingUp') }}" method="POST" class="formulario" id="formulario">
            @csrf <!-- Token CSRF para la seguridad -->
            <!--Grupo  usuario-->
            <div class="formulario-grupo " id="formulario-usuario">
                <label for="usuario" class="formulario-label">Usuario</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="usuario" id="usuario" placeholder="Piñita08">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El usuario tiene que ser de 4 a 16 digitos y no puede contener espacios en blanco </p>
            </div>

            <!--Grupo nombre-->
            <div class="formulario-grupo" id="formulario-nombre">
                <label for="nombre" class="formulario-label">Nombre</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="nombre" id="nombre" placeholder="Alejandra">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El nombre tiene que ser de 4 a 16 digitos y no puede contener espacios en blanco </p>
            </div>


             <!--Grupo apellidoMaterno-->
             <div class="formulario-grupo" id="formulario-materno">
                <label for="nombre" class="formulario-label">Apellido Materno</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="materno" id="materno" placeholder="Rosales">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El apellido tiene que ser de 4 a 16 digitos y no puede contener espacios en blanco </p>
            </div>


             <!--Grupo apellidoPaterno-->
             <div class="formulario-grupo" id="formulario-paterno">
                <label for="nombre" class="formulario-label">Apellido Paterno</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="paterno" id="paterno" placeholder="Piña">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El apellido tiene que ser de 4 a 16 digitos y no puede contener espacios en blanco </p>
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

            <!--Grupo contraseña2-->
            <div class="formulario-grupo" id="formulario-password2">
                <label for="password2" class="formulario-label">Repite la constraseña</label>
                <div class="formulario-grupo-input">
                    <input type="password" class="formulario-input" name ="password2" id="password2" >
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">Las contraseñas tienen que ser iguales</p>
            </div>


            <!--Grupo correo-->
            <div class="formulario-grupo" id="formulario-correo">
                <label for="correo" class="formulario-label">Correo</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="correo" id="correo" placeholder="leocingon@gmail">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El correo solo puede contener letras, numeros, puntos y guiones </p>
            </div>


            <!--Grupo telefono-->
            <div class="formulario-grupo" id="formulario-telefono">
                <label for="telefono" class="formulario-label">telefono</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name ="telefono" id="telefono" placeholder="5546388223">
                    <i class="fa-solid fa-circle-xmark formulario-validacion-estado"></i>
                </div>
                <p class="formulario-input-error">El telefono solo puede tener digitos</p>
            </div>

            <!--Grupo terminos-->
            <div class="formulario-grupo-terminos" id="grupo-terminos">
                <label class="formulario-label">
                    <input type="checkbox" name="terminos" id="terminos" class="formulario-checkbox">
                    Acepto terminos y condiciones
                </label>
            </div>

            <div class="formulario-mensaje" id="formulario-mensaje">
                <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error:</b> Por favor rellene el formulario correctamente</p>
            </div>

            <div class="formulario-grupo-enviar">
                <button type="submit" class="formulario-btn">Enviar</button>
                <p class="formulario-mensaje-exito" id="formulario-mensaje-exito">El formulario se envió exitosamente</p>
            </div>

        </form>
	</main>

    <script src="{{ asset('js/formulario.js') }}"></script>
	<script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>
</body>
</html>