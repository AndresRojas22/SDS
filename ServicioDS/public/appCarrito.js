const Clickbutton = document.querySelector('.btn')
console.log(Clickbutton)
let car = []

Clickbutton.forEach(btn => {
    btn.addEventListener('click', addToCarritoItem)
});

function addToCarritoItem(e){
    const button = e.target
    const item = button.closet('.template-card')
    const itemTitle = item.querySelector('h6').textContent;
    const itemDescripcion = item.querySelector('p').textContent;
    const itemPrecio = item.querySelector('.precio').textContent;
    const itemDisponible = item.querySelector('.btn-info').dataset.Cantidad;
    const itemID = item.querySelector('.btn-info').dataset.id;
    const itemIMG = item.querySelector('.card img-top').src;

    const newItem = {
        title : itemTitle,
        descripcion : itemDescripcion,
        precio : itemPrecio,
        disponibilidad : itemDisponible,
        id : itemID,
        ruta : itemIMG
    }

    addItemCarrito(newItem)
}

function addItemCarrito(newItem){


    car.push(newItem)

    renderCarrito()
}

function renderCarrito(){
    console.log(newItem)
}