let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 8;

window.onload = function(){
    $('#onload').fadeOut();
    $('body').removeClass('hidden');
}

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.box-container .box')];
    for (var i = currentItem; i < currentItem + 4; i++) {
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 4;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}

const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
const comprarCarritoBtn = document.getElementById('comprar-carrito');

cargarEventListeners();

function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
    comprarCarritoBtn.addEventListener('click', () => {
        const carrito = obtenerCarritoDeLocalStorage();
        if (carrito.length === 0) {
            alert('El carrito está vacío');
            return;
        }
        generarFactura(carrito);
    });
    document.addEventListener('DOMContentLoaded', () => {
        const carrito = obtenerCarritoDeLocalStorage();
        cargarCarritoEnTabla(carrito);
        actualizarBotonComprar(carrito);
    });
}

function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        nombre: elemento.querySelector('h3').textContent,
        precio: parseFloat(elemento.querySelector('.precio').textContent.replace('S/ ', '')),
        id: elemento.querySelector('a').getAttribute('data-id')
    }
    insertarCarrito(infoElemento);
    agregarProductoAlCarrito(infoElemento);
}

function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td><img src="${elemento.imagen}" width="100" height="150px"></td>
        <td>${elemento.nombre}</td>
        <td>S/ ${elemento.precio.toFixed(2)}</td>
        <td><a href="#" class="borrar" data-id="${elemento.id}">X</a></td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e) {
    e.preventDefault();
    let elemento, elementoId;
    if (e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');
        eliminarProductoDelCarrito(elementoId);
    }
}

function vaciarCarrito() {
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    localStorage.removeItem('carrito');
    actualizarBotonComprar([]);
    return false;
}

function obtenerCarritoDeLocalStorage() {
    return JSON.parse(localStorage.getItem('carrito')) || [];
}

function agregarProductoAlCarrito(producto) {
    const carrito = obtenerCarritoDeLocalStorage();
    carrito.push(producto);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    cargarCarritoEnTabla(carrito);
    actualizarBotonComprar(carrito);
}

function eliminarProductoDelCarrito(id) {
    let carrito = obtenerCarritoDeLocalStorage();
    carrito = carrito.filter(producto => producto.id !== id);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    cargarCarritoEnTabla(carrito);
    actualizarBotonComprar(carrito);
}

function cargarCarritoEnTabla(carrito) {
    const tablaCarrito = document.querySelector('#lista-carrito tbody');
    tablaCarrito.innerHTML = '';
    carrito.forEach(producto => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${producto.imagen}" width="100"></td>
            <td>${producto.nombre}</td>
            <td>S/ ${producto.precio.toFixed(2)}</td>
            <td><a href="#" class="borrar" data-id="${producto.id}">X</a></td>
        `;
        tablaCarrito.appendChild(row);
    });
}

function actualizarBotonComprar(carrito) {
    if (carrito.length === 0) {
        comprarCarritoBtn.style.display = 'none';
    } else {
        comprarCarritoBtn.style.display = 'block';
    }
}

function generarFactura(carrito) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    let total = 0;
    const igv = 0.18;
    let yPos = 60; 
  
    const logoBase64 = 'data:image/png;base64,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';
    doc.addImage(logoBase64, 'PNG', 10, 10, 30, 30);

    
    doc.setFontSize(18);
    doc.text('TDF.PE', 50, 20);
    doc.setFontSize(14);
    doc.text('Factura', 50, 30);

    doc.setLineWidth(0.5);
    doc.rect(10, 40, 190, 150); 

    doc.setFontSize(12);
    doc.text('Descripcion', 15, 50);
    doc.text('Cantidad', 105, 50);
    doc.text('Precio', 165, 50);
    doc.line(10, 52, 200, 52);

    carrito.forEach(producto => {
        doc.text(producto.nombre, 15, yPos);
        doc.text('1', 110, yPos);
        doc.text(`S/ ${producto.precio.toFixed(2)}`, 165, yPos);
        yPos += 10;
        total += producto.precio;
    });

    let subtotal = total;
    let igvAmount = subtotal * igv;
    let totalConIGV = subtotal + igvAmount;

    yPos += 10;
    doc.line(10, yPos, 200, yPos);
    yPos += 10;
    doc.text(`Subtotal: S/ ${subtotal.toFixed(2)}`, 15, yPos);
    yPos += 10;
    doc.text(`IGV (18%): S/ ${igvAmount.toFixed(2)}`, 15, yPos);
    yPos += 10;
    doc.text(`Total: S/ ${totalConIGV.toFixed(2)}`, 15, yPos);

    doc.save('factura.pdf');
}




