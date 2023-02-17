<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="stylesgrafica.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <h1 class="titulo-grafico">La vestimenta mas usada por jovenes entre 17 y 24 años</h1>
    <section class="contenido-de-grafica">
        <div class="grafico"></div>
        <div class="contenido-leyenda">
            <span class="leyenda">
                <span class="color-playeras"></span>
                <p class="ropa">40% Playeras</p>
            </span>
            <span class="leyenda">
                <span class="color-pantalones"></span>
                <p class="ropa">35% Pantalones</p>
            </span>
            <span class="leyenda">
                <span class="color-tenis"></span>
                <p class="ropa">20% Tenis</p>
            </span>
            <span class="leyenda">
                <span class="color-gorras"></span>
                <p class="ropa">10% Gorras</p>
            </span>
            <p class="total">Total: 1.000.000</p>
        </div>
</section>
<input class = 'salir' type="button" value="salir" onClick="history.go(-1);">
</body>
</html>