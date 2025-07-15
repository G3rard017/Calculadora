<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ece9e6, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


        .form-container {
            background-color: #f9f9f9;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }


        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }


        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }


        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }


        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


        input[type="submit"]:hover {
            background-color: #45a049;
        }


        .resultado {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #222;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Suma de Dos Números</h2>
        <form method="get">
            <label for="num1">Primer número:</label>
            <input type="number" name="num1" required>


            <label for="num2">Segundo número:</label>
            <input type="number" name="num2" required>


            <input type="submit" name="sumar" value="Calcular Suma"><br><br>
            <input type="submit" name="restar" value="Calcular Resta"><br><br>
            <input type="submit" name="mult" value="Calcular Multiplicación"><br><br>
            <input type="submit" name="div" value="Calcular División"><br><br>
        </form>


        <?php
        if (isset($_GET['sumar'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 + $num2;


            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['restar'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 - $num2;


            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['mult'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 - $num2;


            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['div'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 - $num2;


            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
