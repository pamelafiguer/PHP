<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 01</title>
    <link rel="stylesheet" href="estilo.css">
    <h1> LLAMADAS INTERNACIONALES </h1>
</head>
<body>
    <form action="ejemplo08.php" method="post">

        <div class="form-group">
        <div class="form-content">
            <label for="name">Nombre</label>
            <input type="text" id="txtnombre" name="nombre" placeholder="Nombre">
        </div>
        </div>

        <div class="form-group">
        <div class="form-content">
            <label for="minutos">Minutos</label>
            <input type="number" id="min" name="minutos" placeholder="Minutos">
        </div>
        </div>

        <div class="form-group">
        <div class="form-content">
            <label for="precio">precio</label>
            <select name="precio" id="precio"><br>

            <option value="2.1">2.1</option>
            <option value="3.1">3.1</option>
            <option value="3.1">3.1</option>
            <option value="3.1">3.1</option>
            <option value="2.5">2.5</option>
            <option value="2.4">2.4</option>
            <option value="2.6">2.6</option>
            <option value="4.7">4.7</option>
            <option value="4.1">4.1</option>
            <option value="4.5">4.1</option>
            <option value="5.1">5.1</optio>
            <option value="5.5">5.5</option>
            <option value="4.3">4.3</option>
            <option value="6.1">6.1</option>
            <option value="5.2">5.2</option>
            <option value="6.2">6.2</option>
            </select><br>
        </div> 
        </div> 

        <div class="form-group">
            <div class="form-content">
            <label for="pais">Pais</label>
        <select name="pais" id="pais"><br>
            <option value="1">PERU</option>
            <option value="2">BRASIL</option>
            <option value="3">ARGENTINA</option>
            <option value="4">ECUADOR</option>
            <option value="5">COLOMBIA</option>
            <option value="6">ALEMANIA</option>
            <option value="7">KOREA</option>
            <option value="8">USA</option>
            <option value="9">REINO UNIDO</option>
            <option value="10">FRANCIA</option>
            <option value="11">CHINA</option>
            <option value="12">RUSIA</option>
            <option value="13">ITALIA</option>
            <option value="14">JAPON</option>

        </select><br>
        </div>
        </div>


        <input type="submit" value="CALCULAR">

    </form>







    
</body>
</html>