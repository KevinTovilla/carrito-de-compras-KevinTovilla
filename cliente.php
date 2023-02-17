<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Sneakers Cactux</title>
    <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <header>
        <h1>Sneakers Cactux</h1>

        <div class="container-icon">

            <div class="container-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-carrito">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                

                <!--<div class="count-productos">
                    <span id="contador-productos">0</span>
                </div>-->
            </div>
            
            <div class="container-cart-products hidden-cart">
                <div class="repite-product">
                    <div class="cart-product">
                        <div class="info-cart-product">
                            <span id="cantidad-producto-carrito"></span>
                            <p class="titulo-producto-carrito">Carrito Vacio</p>
                            <span id="precio-producto-carrito"></span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>

                <div class="cart-total">
                    <h3>Total</h3>
                    <span id="total-pagar">$</span>
                </div>
            </div>
        </div>
    </header>
    <div class="container-items">
        <div class="item">
            <figure>
                <img src="img\tenis222.jpg" alt="Chunky">
            </figure>
            <div class="info-producto">
                <h2>Tenis Nike ChunkyDunky</h2>
                <p class="precio">$2500</p>
                <button class="añade-carrito">Añadir al carrito </button">
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="img\tenis11.jpg" alt="travis1">
            </figure>
            <div class="info-producto">
                <h2>Tenis react Nike x Travis Scott</h2>
                <p class="precio">$3000</p>
                <button class ="añade-carrito">Añadir al carrito</button">
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="img\tenis333.jpg" alt="pelucheg">
            </figure>
            <div class="info-producto">
                <h2>Tenis Nike x Grateful Dead Green</h2>
                <p class="precio">$2300</p>
                <button class ="añade-carrito">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="img\tenis444.jpg" alt="travis2">
            </figure>
            <div class="info-producto">
                <h2>Tenis Nike Jordan 6 x Travis Scott olive</h2>
                <p class="precio">$3000</p>
                <button class ="añade-carrito">Añadir al carrito</button">
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="img\tenis55.jpg" alt="off">
            </figure>
            <div class="info-producto">
                <h2>Tenis Nike Jordan 4 x Off-White</h2>
                <p class="precio">$2700</p>
                <button class ="añade-carrito">Añadir al carrito</button">
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="img\tenis331.jpg" alt="peluchey">
            </figure>
            <div class="info-producto">
                <h2>Tenis Nike x Grateful Dead Yellow</h2>
                <p class="precio">$2500</p>
                <button class ="añade-carrito">Añadir al carrito</button">
            </div>
        </div>
    </div>

    <input class = 'salir' type="button" value="salir" onClick="history.go(-1);">


    <script src="indexx.js"></script>
</body>
</html>