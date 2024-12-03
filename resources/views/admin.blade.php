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
        <form action="{{ url('/productos') }}" method="POST" class="formulario" id="formulario">
            @csrf <!-- Token CSRF para la seguridad -->

            <!-- Grupo nombre -->
            <div class="formulario-grupo" id="formulario-nombre">
                <label for="nombre" class="formulario-label">Nombre del Producto</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="nombre" id="nombre" placeholder="Nombre del producto" required>
                </div>
            </div>

            <!-- Grupo dimensiones -->
            <div class="formulario-grupo" id="formulario-dimensiones">
                <label for="dimensiones" class="formulario-label">Dimensiones</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="dimensiones" id="dimensiones" placeholder="Ejemplo: 10x20x5 cm" required>
                </div>
            </div>

            <!-- Grupo descripción -->
            <div class="formulario-grupo" id="formulario-descripcion">
                <label for="descripcion" class="formulario-label">Descripción</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="descripcion" id="descripcion" placeholder="Breve descripción del producto" required>
                </div>
            </div>

            <!-- Grupo tipo de producto -->
            <div class="formulario-grupo" id="formulario-tipo_prod">
                <label for="tipo_prod" class="formulario-label">Tipo de Producto</label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="tipo_prod" id="tipo_prod" placeholder="Ejemplo: consumible, pesas o accesorio" required>
                </div>
            </div>

            <!-- Grupo precio -->
            <div class="formulario-grupo" id="formulario-precio">
                <label for="precio" class="formulario-label">Precio</label>
                <div class="formulario-grupo-input">
                    <input type="number" step="0.01" class="formulario-input" name="precio" id="precio" placeholder="Ejemplo: 299.99" required>
                </div>
            </div>

            <!-- Grupo cantidad -->
            <div class="formulario-grupo" id="formulario-cantidad">
                <label for="cantidad" class="formulario-label">Cantidad</label>
                <div class="formulario-grupo-input">
                    <input type="number" step="1" class="formulario-input" name="cantidad" id="cantidad" placeholder="Ejemplo: 50" required>
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