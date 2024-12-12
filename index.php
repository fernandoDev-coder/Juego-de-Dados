<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            color: #4CAF50;
        }
        form {
            margin: 20px 0;
        }
        label {
            font-size: 1.1rem;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Juego de Dados!</h1>
        <form method="POST">
            <label for="numero">Elige un número entre 1 y 6:</label>
            <input type="number" id="numero" name="numero" min="1" max="6" required>
            <button type="submit">Lanzar dado</button>
        </form>

        <?php
        // Generar un número aleatorio entre 1 y 6
        $resultado = rand(1, 6);

        // Número elegido por el jugador
        $eleccion = $_POST['numero'] ?? null;

        if ($eleccion) {
            if ($resultado == $eleccion) {
                echo "<div class='result' style='color:green;'>¡Ganaste! El dado mostró $resultado.</div>";
            } else {
                echo "<div class='result' style='color:red;'>Perdiste. Elegiste $eleccion y el dado mostró $resultado.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
