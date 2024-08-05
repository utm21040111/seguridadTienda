// Espera a que todo el contenido del DOM se haya cargado
document.addEventListener('DOMContentLoaded', () => {
    // Obtiene el contenedor de los elementos del carrito
    const cartItemsContainer = document.getElementById('cart-items');
    // Obtiene el elemento donde se mostrará el precio total
    const totalPriceElement = document.getElementById('total-price');
    // Recupera el carrito desde el almacenamiento local o inicializa un array vacío si no existe
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    // Inicializa la variable del precio total
    let totalPrice = 0;

    // Comprueba si el carrito tiene productos
    if (cart.length > 0) {
        // Inicializa el contenido de la tabla con una fila
        let tableContent = '<tr>';
        // Recorre cada producto en el carrito
        cart.forEach((item, index) => {
            // Cada 4 productos, cierra la fila actual y comienza una nueva
            if (index % 4 === 0 && index !== 0) {
                tableContent += '</tr><tr>';9
            }
            // Añade una celda para cada producto con su imagen, título, descripción, precio y botón de eliminar
            tableContent += `
                <td class="cart-item" style="padding: 10px; width: 25%;">
                    <img src="${item.image}" alt="${item.title}" style="width: 100px; height: auto;">
                    <div>
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                        <p>Precio: $${item.price.toFixed(2)}</p>
                        <button onclick="removeFromCart(${item.id})" style="background-color: red;">Eliminar</button>
                    </div>
                </td>
            `;
            // Suma el precio del producto al precio total
            totalPrice += item.price;
        });
        // Cierra la última fila de la tabla
        tableContent += '</tr>';
        // Inserta el contenido generado en el contenedor de elementos del carrito
        cartItemsContainer.innerHTML = tableContent;
    } else {
        // Si el carrito está vacío, muestra un mensaje indicándolo
        cartItemsContainer.innerHTML = '<tr><td>No hay productos en el carrito</td></tr>';
    }

    // Muestra el precio total en el elemento correspondiente
    totalPriceElement.innerText = totalPrice.toFixed(2);

    // Añade un evento de clic a cada enlace de contacto para desplazarse suavemente a la sección de contacto
    const contactLinks = document.querySelectorAll('.contact-link');
    contactLinks.forEach(link => {
        link.addEventListener('click', () => {
            const contactSection = document.getElementById('contact');
            contactSection.scrollIntoView({ behavior: 'smooth' });
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

// Función para eliminar un producto del carrito
function removeFromCart(productId) {
    // Recupera el carrito desde el almacenamiento local
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    // Filtra los productos para eliminar el producto con el ID dado
    cart = cart.filter(item => item.id !== productId);
    // Guarda el carrito actualizado en el almacenamiento local
    localStorage.setItem('cart', JSON.stringify(cart));
    // Recarga la página para reflejar los cambios
    window.location.reload();
}

// Función para proceder al pago
function checkout() {
    // Muestra una alerta indicando que el pago se realizó con éxito
    alert('Pago realizado con éxito');
    // Elimina el carrito del almacenamiento local
    localStorage.removeItem('cart');
    // Recarga la página para reflejar los cambios
    window.location.reload();
}
