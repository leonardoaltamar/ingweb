const Carrito = document.getElementById('carrito');
const listaProductos = document.querySelector('#lista-carrito tbody');
const clearCarrito = document.getElementById("vaciar-carrito");
const btnProcesarPedido = document.getElementById("procesar-pedido");

const btnDetalleProducto = document.getElementById('detalleProducto');

function comprarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('add-car')) {
        const product = e.target.parentElement.parentElement;
        leerDatosProducto(product);
        // console.log(product);
    } else {

    }
}

function detalleProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('detalle-producto')) {
        const product = e.target.parentElement.parentElement;
        id = product.querySelector('a').getAttribute('data-id');
        location.href="shop/detalleProducto/"+id;
    } else {

    }
}


function insertarCarrito(producto) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${producto.imagen}" width=100>
        </td>
        <td>${producto.titulo}</td>
        <td>${producto.precio}</td>
        <td>
            <a href="#" class="borrar-producto fas fa-times-circle" data-id="${producto.id}"></a>
        </td>
    `
    listaProductos.appendChild(row);
    guardarProductosLocalStorage(producto);
}

function leerDatosProducto(producto) {
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h5').textContent,
        precio: producto.querySelector('p span').textContent,
        id: producto.querySelector('a').getAttribute('data-id'),
        cantidad: 1
    }
    let productosLS;
    productosLS = obtenerProductosLocalStorage();
    productosLS.forEach(function(productoLS){
        if (productoLS.id === infoProducto.id) {
            productosLS = productoLS.id;
        }
    });
    if (productosLS === infoProducto.id) {
        Swal.fire({
            type: 'info',
            title: 'Oops...',
            text: "Este producto ya esta agregado",
            timers: 1000,
            showConfirmButton: false
        });
    } else {
        insertarCarrito(infoProducto);
    }

    console.log(infoProducto.id);
}

function eliminarProducto(e) {
    e.preventDefault();
    let producto, productoID;
    if (e.target.classList.contains('borrar-producto')) {
        e.target.parentElement.parentElement.remove();
        producto = e.target.parentElement.parentElement;
        productoID = producto.querySelector('a').getAttribute('data-id');
    }
    eliminarProductosLocalStorage(productoID);
    calcularTotal();
}

const productos = document.getElementById('lista-productos');


function vaciarLocalStorage() {
    localStorage.clear();
}

function vaciarCarrito(e) {
    e.preventDefault();
    while (listaProductos.firstChild) {
        listaProductos.removeChild(listaProductos.firstChild);
    }
    vaciarLocalStorage();
    return false;
}


function obtenerProductosLocalStorage() {
    let productoLS;
    if (localStorage.getItem('productos') === null) {
        productoLS = [];
    }
    else {
        productoLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productoLS;
}


function guardarProductosLocalStorage(producto) {
    let productos;
    productos = obtenerProductosLocalStorage();
    productos.push(producto);
    localStorage.setItem('productos', JSON.stringify(productos));
}

function eliminarProductosLocalStorage(productoID) {
    let productosLS;
    productosLS = obtenerProductosLocalStorage();
    productosLS.forEach((productoLS, index) => {
        if (productoLS.id === productoID) {
            productosLS.splice(index, 1);
        }
    });

    localStorage.setItem('productos', JSON.stringify(productosLS));
}




function leerLocalStorage() {
    let productosLS;
    productosLS = obtenerProductosLocalStorage();
    productosLS.forEach(function(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
                <a href="#" class="borrar-producto fas fa-times-circle" data-id="${producto.id}"></a>
            </td>
        `;
        listaProductos.appendChild(row);
    });
}

function obtenerEvento(e) {
    e.preventDefault();
    let id, cantidad, producto, productosLS;
    if (e.target.classList.contains('cantidad')) {
        producto = e.target.parentElement.parentElement;
        id = producto.querySelector('a').getAttribute('data-id');
        cantidad = producto.querySelector('input').value;
        let actualizarMontos = document.querySelectorAll('#subtotales');
        let actualizarMontosInput = document.querySelector('#subtotales input');
        console.log(actualizarMontos);
        productosLS = obtenerProductosLocalStorage();
        productosLS.forEach(function (productoLS, index) {
            if (productoLS.id === id) {
                productoLS.cantidad = cantidad;
                actualizarMontos[index].value = Number(cantidad * productosLS[index].precio);
            }
        });
        localStorage.setItem('productos', JSON.stringify(productosLS));

    }
    else {
        console.log("click afuera");
    }
}


function leerLocalStorageCompra() {
    let productosLS;
    productosLS = obtenerProductosLocalStorage();
    let cantidadInput = 0;
    productosLS.forEach(function(producto){
        const row = document.createElement('tr');
        cantidadInput = producto.precio * producto.cantidad;
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>${producto.titulo}</td>
            <td>
            ${producto.precio}
            </td>
            <td>
            <input type="number" name="cantidad[]" class="form-control cantidad" min="1" value="${producto.cantidad}">
            </td>
            <td>
            <input type="text" name="subtotal[]" id="subtotales" value="${producto.precio * producto.cantidad}"  class="border-0" readonly style="background-color: white;">
            </td>

            <td>
            <a href="#" class="borrar-producto fas fa-trash" style="font-size:30px" data-id="${producto.id}"></a>
            </td>
            <input type="hidden" id="subtotales" name="id[]" value="${producto.id}"  class="border-0" readonly style="background-color: white;">
            <input type="hidden" name="precio[]" id="precios" value="${producto.precio}">
            `;
        listaCompra.appendChild(row);
    });
}



function procesarPedido(e) {
    e.preventDefault();
    if(obtenerProductosLocalStorage().length === 0){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: "No puede procesar la compra debido a que el carrito se encuentra vacio",
            timers: 1000,
            showConfirmButton: false
        });
    }else{
        location.href = "shop/compra";
    }
}

function calcularTotal(){
    let productosLS;
    let total =0, subtotal = 0, iva = 0;
    productosLS = obtenerProductosLocalStorage();

    for (let i = 0; i < productosLS.length; i++) {
        let element = Number(productosLS[i].precio * productosLS[i].cantidad);
        total = total + element;
    }
    iva = parseFloat( total * 0.19).toFixed(2);
    subtotal = parseFloat(total-iva).toFixed(2);

    document.getElementById('total').value = total.toFixed(2);
}

function cargarEventos() {
    productos.addEventListener('click', e => {
        comprarProducto(e);

    });
    Carrito.addEventListener('click', (e) => {
        eliminarProducto(e);
    });

    clearCarrito.addEventListener('click', (e) => {
        vaciarCarrito(e);
    });


    document.addEventListener('DOMContentLoaded', leerLocalStorage());

    btnProcesarPedido.addEventListener('click', (e)=>{ procesarPedido(e)});

    productos.addEventListener('click', (e)=>{
        detalleProducto(e);
    });

}

cargarEventos();
