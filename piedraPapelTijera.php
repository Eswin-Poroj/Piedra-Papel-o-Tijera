<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra Papel o Tijera</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            justify-content: center;
        }
        .seccion {
            background-color: aqua;
            width: 650px;
            padding: 30px;
            position: relative;
            top: 44px;
        }
        .seccion h2 {
            text-align: center;
            font-size: xx-large;
            font-weight: 900;
        }
        .piedra {
            width: 200px;
            height: 200px;
            border: none;
            background-image: url('../piedra.png');
            background-size: cover;
            cursor: pointer;
            color:transparent;
        }

        .tijera {
            width: 200px;
            height: 200px;
            border: none;
            background-image: url('../tijera.png');
            background-size: cover;
            cursor: pointer;
            color:transparent;
        }

        .papel {
            width: 200px;
            height: 200px;
            border: none;
            background-image: url('../papel.png');
            background-size: cover;
            cursor: pointer;
            color:transparent;
        }
        .php{
            display: flex;
            justify-content: center;
            margin-top: 40px;
            margin-bottom: 30px;
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="seccion">
        <h2>PIEDRA PAPEL O TIJERA</h2>
        <br>
        <div class="input">
            <form action="" method="post">
                <input type="submit" alt="papel" name="jugador" value="1" class="papel">
                <input type="submit" alt="piedra" name="jugador" value="2" class="piedra">
                <input type="submit" alt="tijera" name="jugador" value="3" class="tijera">
            </form>
        </div>
        <div class="php">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $jugador = $_POST['jugador'];
                    $maquina = rand(1,3);

                    if ($jugador == 1 && $maquina == 2) {
                        echo 'Ganaste, gana papel a piedra';
                    } elseif ($jugador == 1 && $maquina == 3) {
                        echo 'Perdiste, gana tijera a papel';
                    } elseif ($jugador == 2 && $maquina == 1) {
                        echo 'Perdiste, gana papel a piedra';
                    } elseif ($jugador == 2 && $maquina == 3) {
                        echo 'Ganaste, gana piedra a tijera';
                    } elseif ($jugador == 3 && $maquina == 1) {
                        echo 'Ganaste, gana tijera a papel';
                    } elseif ($jugador == 3 && $maquina == 2) {
                        echo 'Perdiste, gana piedra a tijera';
                    } else {
                        echo 'Quedaron empates';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>