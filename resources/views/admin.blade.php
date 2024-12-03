<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Productos</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('css/estilosFormulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosHeader.css') }}">
</head>
<body>
    <x-header>Registrar Producto</x-header>

	<main>
        <form action="{{ url('/admin') }}" method="POST" class="formulario" id="formulario">
            @csrf <!-- Token CSRF para la seguridad -->

            <!-- Grupo nombre -->
            <div class="formulario-grupo" id="formulario-nombre">
                <label for="name" class="formulario-label">Nombre del Producto</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="name" id="name" placeholder="Nombre del producto" required>
                </div>
            </div>

            <!-- Grupo descripción -->
            <div class="formulario-grupo" id="formulario-descripcion">
                <label for="description" class="formulario-label">Descripción</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="description" id="description" placeholder="Breve descripción del producto" required>
                </div>
            </div>

            <!-- Grupo precio -->
            <div class="formulario-grupo" id="formulario-precio">
                <label for="price" class="formulario-label">Precio</label>
                <div class="formulario-grupo-input">
                    <input type="number" step="0.01" class="formulario-input" name="price" id="price" placeholder="Ejemplo: 299.99" required>
                </div>
            </div>

            <!-- Botón de envío -->
            <div class="formulario-grupo-enviar">
                <button type="submit" class="formulario-btn" id="boton-enviar">Registrar Producto</button>
            </div>
        </form>
	</main>
</body>
</html>
