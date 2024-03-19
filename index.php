<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E&M Registrer</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="icon" href="./Storage_pc/eym.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="registro">
            <center>
                <form method="post" id="form">
                    <img src="./Storage_pc/eym.png" class="logo">
                    <h1>Bienvenido a <span class="jkl">Espacio & Mercadeo</span></h1>
                    <h3>Te presentamos nuestro emocionante sistema de ingreso dinámico, diseñado para hacer que entrar y salir sea más fácil y divertido que nunca!</h3>
                    <p id="warnings" class="warnings"></p>

                    <label class="lbl1">Nombres</label>
                    <input type="text" name="nombres" id="nombres" autofocus autocomplete="off" required maxlength="20" pattern="[A-Za-zÁÉÍÓÚáéíóú\s]+" title="Solo se permiten letras y espacios">

                    <label class="lbl1">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" autofocus autocomplete="off" required maxlength="20" pattern="[A-Za-zÁÉÍÓÚáéíóú\s]+" title="Solo se permiten letras y espacios">

                    <label class="lbl1">Cedula</label>
                    <input type="number" name="cedula" id="cedula" autofocus autocomplete="off" required maxlength="10" pattern="[0-9]+" title="Solo se permiten números">

                    <label class="lbl1">Seleccionar</label>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected" id="selectedSeleccionar">Seleccionar</span>
                            <div class="carect">
                                <ul class="menu">
                                    <li onclick="selectOption('seleccionar', 'Ingreso')">Ingreso</li>
                                    <li onclick="selectOption('seleccionar', 'Salida')">Salida</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <label class="lbl1">Area</label>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected" id="selectedArea">Area</span>
                            <div class="carect">
                                <ul class="menu">
                                    <li onclick="selectOption('area', 'Talento Humano')">Talento Humano</li>
                                    <li onclick="selectOption('area', 'Administración y Financiera')">Administración y Financiera</li>
                                    <li onclick="selectOption('area', 'Operación Logística')">Operación Logística</li>
                                    <li onclick="selectOption('area', 'Trade y BTL')">Trade y BTL</li>
                                    <li onclick="selectOption('area', 'BI')">BI</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <label class="lbl1">EPS</label>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected" id="selectedEps">EPS</span>
                            <div class="carect">
                                <ul class="menu">
                                    <li onclick="selectOption('eps', 'Salud Total')">Salud Total</li>
                                    <li onclick="selectOption('eps', 'Sura')">Sura</li>
                                    <li onclick="selectOption('eps', 'Nueva EPS')">Nueva EPS</li>
                                    <li onclick="selectOption('eps', 'Coosalud')">Coosalud</li>
                                    <li onclick="selectOption('eps', 'Capital Salud')">Capital Salud</li>
                                    <li onclick="selectOption('eps', 'Famisanar')">Famisanar</li>
                                    <li onclick="selectOption('eps', 'Compensar')">Compensar</li>
                                    <li onclick="selectOption('eps', 'EPM')">EPM</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="seleccionar" id="hiddenSeleccionar">
                    <input type="hidden" name="area" id="hiddenArea">
                    <input type="hidden" name="eps" id="hiddenEps">

                    <label class="lbl1">Número de teléfono</label>
                    <input type="number" name="numero" id="number" class="info" autofocus autocomplete="off">
                    <p id="warnings2"></p>

                    <br><br>
                    <button type="submit" name="register" id="register"><span>Enviar</span></button>
                    <br><br>
                </form>
            </center>
        </div>
    </div>

    <script>
        function selectOption(inputName, value) {
            document.getElementById("selected" + inputName.charAt(0).toUpperCase() + inputName.slice(1)).textContent = value;
            document.getElementById("hidden" + inputName.charAt(0).toUpperCase() + inputName.slice(1)).value = value;
        }
    </script>
    <script src="./js/button.js"></script>
    <script src="./js/.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>