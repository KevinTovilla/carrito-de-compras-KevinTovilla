const btnCart = document.querySelector('.container-cart-icon') 
const containerCartProducts = document.querySelector(".container-cart-products")


btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle("hidden-cart")//crea el evento de darle clock al boton de carrito y al container de la info del carrito
})



/*-----------------------------------------------------*/
const carInfo = document.querySelector(".cart-product")
const repiteProduct = document.querySelector(".repite-product")

//lista de contenedor de productos
const productList = document.querySelector(".container-items")

//arreglo de productos
let allProducts = [];

//llama  al span de total a pagar y lo guarda en valor total
const valortotal= document.querySelector('#total-pagar')

//const countproduct = document.querySelector('#')



productList.addEventListener('click', e => {
//aqui añadiremos la lista con los true de las consolas

    if(e.target.classList.contains('añade-carrito')){//muestra en consola las clases pero con contains muestra si es verdadero o falso
        const product = e.target.parentElement //sirve para retroceder y no de true si no de la clase
        
        const infoproduct = {
            quantity:1, //cantidad de compras en carrito
            title: product.querySelector('h2').textContent, //content muestra solo el texto de la seleccion por ejemplo lo que contiene h2
            price: product.querySelector('p').textContent,
        };

        const existe = allProducts.some(product => product.title === infoproduct.title)//toma en cuenta si ya existe dentro del container osea h2 y p
        if (existe){
            const product = allProducts.map(product => {
                if(product.title === infoproduct.title){
                    product.quantity++;
                    return product
                } else{
                    return product
                }
            })
            allProducts = [...product]//se exparse porque devuelve el arreglo
        }else{
        allProducts = [...allProducts, infoproduct] //.. expred exparse en eel arreglo y añade el infoproduct
        }
        showHTML();//muestra el html
    }
})

//boton borrar elementos del container del carrito
repiteProduct.addEventListener('click', e => {
    if(e.target.classList.contains('icon-close')){
        const product = e.target.parentElement
        const title = product.querySelector('p').textContent

        allProducts = allProducts.filter(product => product.title !== title)//filtra
    }
    showHTML();
})

//funcion para mostra html
const showHTML = () => {

    //limpiar html container carrito
    repiteProduct.innerHTML = '';

    let total = 0;
   //// let totalofproductos = 0;

    allProducts.forEach(product => { //busca el producto
        const containerProduct = document.createElement('div')//el div es la clase cartproduct
        containerProduct.classList.add('cart-product') //añade al cart-product los productos

//aqui se muestra lo que contiene el container lo que se mostrara
        containerProduct.innerHTML = `
            <div class="info-cart-product">
                <span id="cantidad-producto-carrito">${product.quantity}</span>
                <p class="titulo-producto-carrito">${product.title}</p>
                <span id="precio-producto-carrito">${product.price}</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        `

        repiteProduct.append(containerProduct) //añade al container del carrito
        
        total = total + parseInt(product.quantity * product.price.slice(1));//añade la suma del producto y el slice(1) hace que no aparezca el signo $
        //totalofproductos = totalofproductos + product.quantity //no sirve
    });

    valortotal.innerText = `$${total}` //devuelve el total
    //countProducts.innerText = totalofproductos;
};