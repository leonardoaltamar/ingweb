const listaCompra = document.querySelector('#lista-compra tbody');
const carrito = document.getElementById('carrito');
const btnProcesarCompra = document.getElementById('procesar-compra');

console.log("hola mundo, me estoy ejecutando");
console.log(listaCompra);


function procesarCompra(e) {
    e.preventDefault();

    if(obtenerProductosLocalStorage().length === 0){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: "No hay productos para comprar, favor seleccionarlos en la ventana de ventas",
            timers: 1000,
            showConfirmButton: false
        });
    }
}

function cargarEventosFactura() {
    document.addEventListener('DOMContentLoaded', leerLocalStorageCompra());

    carrito.addEventListener('click', (e)=>{
        eliminarProducto(e);
    });

    calcularTotal();

    btnProcesarCompra.addEventListener('click', (e)=>{
        procesarCompra(e);
    });

    carrito.addEventListener('change', (e) => {obtenerEvento(e)})

    carrito.addEventListener('keyup', (e) => {obtenerEvento(e)} )

}

cargarEventosFactura();
