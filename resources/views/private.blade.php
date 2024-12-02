<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estiloProducto.css') }}">
    <title>CALZADO DEPORTIVO</title>
</head>
<body>
    <section class="contenido">
        <div class="mostrador" id="mostrador">
            @php $count = 0; @endphp
            @foreach ($producto as $item)
                @if ($count % 4 == 0)
                    @if ($count != 0)
                        </div> <!-- Cierre de la fila anterior -->
                    @endif
                    <div class="fila"> <!-- Nueva fila -->
                @endif
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="{{ asset('images/'.$item->producto_id.'.PNG') }}" alt="">
                    </div>
                    <p class="descripcion">{{$item->nombre}}</p>
                    <span class="precio">${{$item->precio}} MXN</span>
                </div>
                @php $count++; @endphp
            @endforeach
            </div> <!-- Cierre de la última fila -->
        </div>
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo">{{$item->nombre}}</h2>
                <p id="descripcion">{{$item->descripcion}}</p>

                <span class="precio" id="precio">{{$item->precio}}</span>

                <div class="fila">
                    <button>AGREGAR AL CARRITO</button>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/producto.js') }}"></script>
</body>
</html>
