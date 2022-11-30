const items = document.getElementById('items')

const templateCard = document.getElementById('template-card').content
const fragment = document.createDocumentFragment()
let carrito = {}
document.addEventListener('DOMContentLoaded', ()=> {
    fechtData()
})
//
items.addEventListener('click', e =>{
    addCarrito(e)
})

const fechtData = async () => {
    try{
        const re = await fetch('products.json')
        const data = await re.json()

        pintarCards(data)
        

    } catch (error){
        console.log(error)
    }
}
const pintarCards = data => {
    //console.log(data)
    data.forEach(producto => {
        if(producto.Cantidad>0)
        {
            templateCard.querySelector('h6').textContent = producto.Nombre
            templateCard.querySelector('p').textContent = producto.Descripcion
            templateCard.querySelector('.precio').textContent = producto.Precio
            templateCard.querySelector('img').setAttribute("src", producto.Ruta)
            templateCard.querySelector('.btn-info').dataset.id = producto.id
            templateCard.querySelector('.btn-info').dataset.Cantidad = producto.Cantidad
            const clone = templateCard.cloneNode(true)
            fragment.appendChild(clone)
        }
        else{

        }
        // 
    })
    items.appendChild(fragment)
}

const addCarrito = e =>{
    //console.log(e.target.parentElement)
    //console.log(e.target.classList.contains('btn-info'))
    if(e.target.classList.contains('btn-info')) {
       setCarrito(e.target.parentElement)
    }
    
        e.stopPropagation()
    
    
}
const setCarrito = objeto =>{
    //console.log(objeto)
    const producto = {
        id: objeto.querySelector('.btn-info').dataset.id,
        Nombre: objeto.querySelector('h6').textContent,
        Precio: objeto.querySelector('.precio').textContent,
        Disponible: objeto.querySelector('.btn-info').dataset.Cantidad,
        Cantidad: 1
    }
    if(carrito.hasOwnProperty(producto.id))
    {
        if(producto.Cantidad <= producto.Disponible){
            producto.Cantidad = carrito[producto.id].Cantidad + 1 
        }

        
    }

    carrito[producto.id] = {...producto}
    
    console.log(carrito)
}
console.log(carrito)

//Seccion Guardar
