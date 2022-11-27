const items = document.getElementById('items')
const templateCard = document.getElementById('template-card').content
const fragment = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', ()=> {
    fechtData()
})
//
items.addEventListener('click', e =>{

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
    console.log(data)
    data.forEach(producto => {
        if(producto.Cantidad>0)
        {
            templateCard.querySelector('h6').textContent = producto.Nombre
            templateCard.querySelector('p').textContent = producto.Descripcion
            templateCard.querySelector('h4').textContent = "$ " +producto.Precio
            templateCard.querySelector('img').setAttribute("src", producto.Ruta)
            const clone = templateCard.cloneNode(true)
            fragment.appendChild(clone)
        }
        else{

        }
        // 
    })
    items.appendChild(fragment)
}