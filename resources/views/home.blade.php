<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Zapatos</title>
    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Enlaces a los archivos CSS del carrusel Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('assets/styleHome.css')}}">

</head>
<body>
    <!-- Encabezado de la página -->
    <header>
    <nav>
        <div class="logo">Oslo Digital Shoe Store</div>
        <ul>
            <!-- Enlaces de navegación -->
            <li><a href="#offers">Ofertas</a></li>
            <li><a href="#contact" class="contact-link">Contacto</a></li>
            <li><a href="{{ route('cart') }}">Carrito de Compras</a></li>
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
        <!-- Sección de ofertas con carrusel -->
        <section id="offers" class="offers">
            <h2>Ofertas</h2>
            <center><div class="offer-cards">
                <!-- Tarjeta de oferta 1 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 1"></center>
                    <h3>Zapato en Oferta 1</h3>
                    <p>Descripción del zapato en oferta 1</p>
                    <p>Precio: <span class="original-price">$50.00</span> $35.00</p>
                    <button onclick="addToCart(1)">Añadir al Carrito</button>
                </div>
                <!-- Tarjeta de oferta 2 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 2"></center>
                    <h3>Zapato en Oferta 2</h3>
                    <p>Descripción del zapato en oferta 2</p>
                    <p>Precio: <span class="original-price">$60.00</span> $40.00</p>
                    <button onclick="addToCart(2)">Añadir al Carrito</button>
                </div>
                <!-- Tarjeta de oferta 3 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 3"></center>
                    <h3>Zapato en Oferta 3</h3>
                    <p>Descripción del zapato en oferta 3</p>
                    <p>Precio: <span class="original-price">$80.00</span> $55.00</p>
                    <button onclick="addToCart(3)">Añadir al Carrito</button>
                </div>
                <!-- Tarjeta de oferta 4 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 4"></center>
                    <h3>Zapato en Oferta 4</h3>
                    <p>Descripción del zapato en oferta 4</p>
                    <p>Precio: <span class="original-price">$70.00</span> $50.00</p>
                    <button onclick="addToCart(4)">Añadir al Carrito</button>
                </div>
                <!-- Tarjeta de oferta 5 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 5"></center>
                    <h3>Zapato en Oferta 5</h3>
                    <p>Descripción del zapato en oferta 5</p>
                    <p>Precio: <span class="original-price">$90.00</span> $65.00</p>
                    <button onclick="addToCart(5)">Añadir al Carrito</button>
                </div>
                <!-- Tarjeta de oferta 6 -->
                <div class="offer-card">
                    <center><img src="https://via.placeholder.com/150" alt="Zapato en oferta 6"></center>
                    <h3>Zapato en Oferta 6</h3>
                    <p>Descripción del zapato en oferta 6</p>
                    <p>Precio: <span class="original-price">$100.00</span> $70.00</p>
                    <button  onclick="addToCart(6)">Añadir al Carrito</button>
                </div>
            </div></center>
        </section>
        
        <!-- Sección de productos -->
        <section class="products">
            <script>
                // Descripciones de los productos
                const productDescriptions = [
                    "Zapato casual de cuero",
                    "Zapato deportivo para correr",
                    "Zapato elegante de vestir",
                    "Botas de montaña",
                    "Sandalias cómodas de verano",
                    "Zapatillas de lona",
                    "Mocasines de piel",
                    "Botines de moda",
                    "Zapatos de trabajo resistentes",
                    "Zapatos de baile",
                    "Zapatos de tacón alto",
                    "Zapatillas de deporte",
                    "Zapatos para caminar",
                    "Zapatos de golf",
                    "Zapatos de ciclismo",
                    "Zapatos de senderismo",
                ];

                // Generar tarjetas de producto dinámicamente
                for (let i = 4; i <= 19; i++) {
                    document.write(`
                        <div class="product-card">
                            <img src="https://via.placeholder.com/150" alt="Zapato ${i}">
                            <h3>Zapato ${i}</h3>
                            <p>${productDescriptions[i - 4]}</p>
                            <p>Precio: $${(Math.random() * 100).toFixed(2)}</p>
                            <button onclick="addToCart(${i})">Añadir al Carrito</button>
                        </div>
                    `);
                }
            </script>
        </section>
    </main>

    <!-- Pie de página con información de contacto y redes sociales -->
    <footer id="contact">
        <div class="social-media">
            <a href="https://instagram.com">Instagram</a>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://twitter.com">Twitter</a>
        </div>
        <div class="contact-info">
            <p>Teléfono: +52 449 805 40 66</p>
            <p>Dirección: Av. Gerónimo de la Cueva s/n, Villas del Río, 20126 Aguascalientes, Ags.</p>
            <p>Email: edwinaseru@gmail.com</p>
        </div>
    </footer>

    <!-- Script para manejar interactividad y carrusel -->
    <script src="{{ asset('assets/home.js')}}"></script>
    <script>
    // Definir el array de rutas de imágenes en la vista Blade
    const productImages = {!! json_encode([
        asset('assets/img/zapato1.webp'),
        asset('assets/img/zapato2.webp'),
        asset('assets/img/zapato3.webp'),
        asset('assets/img/zapato4.webp'),
        asset('assets/img/zapato5.webp')
    ]) !!};
</script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            // Inicializar carrusel de ofertas
            $('.offer-cards').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>

</body>
</html>
