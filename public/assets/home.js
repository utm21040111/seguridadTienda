// Se asegura de que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", () => {
    // Las rutas de las imágenes se pasan desde la vista Blade y están disponibles en la variable productImages
    // Ejemplo de cómo productImages se vería en el archivo Blade:
    // const productImages = @json([
    //     asset('assets/img/zapato1.webp'),
    //     asset('assets/img/zapato2.webp'),
    //     asset('assets/img/zapato3.webp'),
    //     asset('assets/img/zapato4.webp'),
    //     asset('assets/img/zapato5.webp')
    // ]);

    // Selecciona todos los elementos del DOM que tienen las clases 'product-card' o 'offer-card'
    const productCards = document.querySelectorAll(
        ".product-card, .offer-card"
    );

    // Para cada tarjeta de producto, asigna una imagen aleatoria de 'productImages'
    productCards.forEach((card) => {
        // Selecciona una imagen aleatoria del array 'productImages'
        const randomImage =
            productImages[Math.floor(Math.random() * productImages.length)];
        // Establece el atributo 'src' de la etiqueta 'img' dentro de la tarjeta al valor de 'randomImage'
        card.querySelector("img").src = randomImage;
    });

    // Selecciona todos los elementos del DOM con la clase 'contact-link'
    const contactLinks = document.querySelectorAll(".contact-link");
    // Añade un evento 'click' a cada enlace de contacto para desplazar suavemente a la sección de contacto
    contactLinks.forEach((link) => {
        link.addEventListener("click", () => {
            // Selecciona la sección de contacto usando su id
            const contactSection = document.getElementById("contact");
            // Desplaza suavemente la vista a la sección de contacto
            contactSection.scrollIntoView({ behavior: "smooth" });
        });
    });

    // Selecciona el enlace de logout usando su id
    const logoutLink = document.getElementById("logout-link");
    logoutLink.addEventListener("click", (event) => {
        event.preventDefault(); // Previene la acción por defecto del enlace

        // Muestra un cuadro de diálogo de confirmación
        if (confirm("¿Estás seguro de que quieres salir?")) {
            // Si el usuario confirma, envía el formulario de logout
            document.getElementById("logout-form").submit();
        }
    });
});

// Función para añadir un producto al carrito usando su id
function addToCart(productId) {
    // Selecciona todos los elementos del DOM que tienen las clases 'product-card' o 'offer-card'
    const productCards = document.querySelectorAll(
        ".product-card, .offer-card"
    );
    // Selecciona la tarjeta de producto específica basada en 'productId'
    const product = productCards[productId - 1];
    // Obtiene el texto del elemento 'h3' dentro de la tarjeta (título del producto)
    const title = product.querySelector("h3").innerText;
    // Obtiene el texto del primer elemento 'p' dentro de la tarjeta (descripción del producto)
    const description = product.querySelector("p").innerText;
    // Obtiene el texto del último elemento 'p' dentro de la tarjeta (precio del producto), lo convierte a número
    const price = parseFloat(
        product
            .querySelector("p:last-of-type")
            .innerText.replace("Precio: $", "")
    );
    // Obtiene la ruta de la imagen del producto
    const image = product.querySelector("img").src;

    // Obtiene el carrito de compras del almacenamiento local, o un array vacío si no existe
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    // Añade el producto seleccionado al carrito
    cart.push({ id: productId, title, description, price, image });
    // Guarda el carrito actualizado en el almacenamiento local
    localStorage.setItem("cart", JSON.stringify(cart));
    // Muestra un mensaje de alerta indicando que el producto ha sido añadido al carrito
    alert("Producto añadido al carrito");
}
