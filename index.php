<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E&M Registrer</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="./Storage_pc/eym.png">
</head>
<body>

<div class="container">
    <div class="registro">
        <center>
            <form id="form">
                <img src="./Storage_pc/eym.png" class="logo">
                <h1>Bienvenido a <span class="jkl">Espacio & Mercadeo</span></h1>
                <h3>Por favor ingresa tus datos para poder tener un registro exitoso :)</h3>
                <p id="warnings" class="warnings"></p>

                <label class="lbl1">Nombres</label>
                <input type="text" name="Nombres" id="Nombres" autofocus><span class="info"></span>

                <label class="lbl1">Apellidos</label>
                <input type="text" name="Apellidos" id="Apellidos" autofocus><span class="info"></span>

                <label class="lbl1">Cedula</label>
                <input type="number" name="number" id="number" autofocus><span class="info"></span>

                <label class="lbl1">Area</label>
                <div class="dropdown">
                    <div class="select">
                        <span class="selected">Area</span>
                        <div class="carect">
                            <ul class="menu">
                                <li>Area 1</li>
                                <li>Area 2</li>
                                <li>Area 3</li>
                                <li>Area 4</li>
                                <li>Area 5</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <label class="lbl1">EPS</label>
                <div class="dropdown">
                    <div class="select">
                        <span class="selected">EPS</span>
                        <div class="carect">
                            <ul class="menu">
                                <li>EPS 1</li>
                                <li>EPS 2</li>
                                <li>EPS 3</li>
                                <li>EPS 4</li>
                                <li>EPS 5</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <label class="lbl1">Número de teléfono</label>
                <input type="number" name="number" id="number" class="info" autofocus>
                <p id="warnings2"></p>

                <br><br>
                <button type="submit"><span>Enviar</span></button>
                <br><br>

            </form>
        </center>
    </div>
</div>
</center>
        </div>
    </div>

    <script src="./menu.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>
