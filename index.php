<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
</head>
<body>
    
    <h2>Formulario para sumar dos números</h2>
    <form  method="post">
        <label for="num1">Ingrese el primer número:</label>
        <input type="number"name="num1"required><br><br>

        <label for="num2">Ingrese el segundo número:</label>
        <input type="number"name="num2"required><br><br>

        <input type="submit"name="sumar" value="Sumar">
    </form>

    <?php
    if (isset($_POST['sumar'])) {
        // Obtener los valores de los campos del formulario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        //Realizar la suma
        $resultado =$num1 + $num2;

        //Mostrar el resultado
        echo "<h3>El resultado de la suma es: $resultado</h3>";
    }
    ?>

</body>
</html>