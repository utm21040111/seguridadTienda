<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite un diseño responsivo al configurar la ventana gráfica -->
    <title>Carrito de Compras</title> <!-- Título de la página -->
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styleHome.css')}}">
</head>
<body>

        <!-- Encabezado de la página -->
        <header>
    <nav>
        <div class="logo">Oslo Digital Shoe Store</div>
        <ul>
            <!-- Enlaces de navegación -->
            <li><a href="{{route('home')}}">Inicio</a></li> <!-- Enlace a la página de inicio -->
                <li><a href="#contact" class="contact-link">Contacto</a></li> <!-- Enlace a la sección de contacto en la página de inicio -->
                <li><a href="{{route('cart')}}">Carrito de Compras</a></li> <!-- Enlace a la página del carrito de compras -->
            <li>
                <a href="{{ route('logout') }}" id="logout-link">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</header>

    <main>
        <!-- Sección principal del carrito de compras -->
        <section class="cart">
            <h2>Carrito de Compras</h2> <!-- Título de la sección -->
            <table id="cart-items" class="cart-items"></table> <!-- Tabla para listar los ítems del carrito -->
            <div class="total">
                <h3>Total: $<span id="total-price">0.00</span></h3> <!-- Muestra el total del precio de los ítems en el carrito -->
                </br></br>
                <button id="pagar" onclick="checkout()">Pagar</button> <!-- Botón para proceder al pago -->
                </br></br>
            </div>
        </section>
    </main>

    <footer id="contact">
        <!-- Sección de redes sociales -->
        <div class="social-media">
            <a href="https://instagram.com">Instagram</a>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://twitter.com">Twitter</a>
        </div>
        <!-- Información de contacto -->
        <div class="contact-info">
            <p>Teléfono: +52 449 805 40 66</p>
            <p>Dirección: Av. Gerónimo de la Cueva s/n, Villas del Río, 20126 Aguascalientes, Ags.</p>
            <p>Email: edwinaseru@gmail.com</p>
        </div>
    </footer>

    <script src="{{ asset('assets/cart.js')}}"></script>
</body>
</html>
