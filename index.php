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

        <input type="submit"name="restar" value="Restar">

        <input type="submit"name="multiplicar" value="Multiplicar">

        <input type="submit"name="dividir" value="Dividir">

    </form>

    <?php
    if (isset($_POST['sumar'])) {
         $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];


    if (isset($_POST['restar'])) 
         $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

    if (isset($_POST['multiplicar'])) 
         $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

    if (isset($_POST['dividir']))
         $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Obtener los valores de los campos del formulario


        //Realizar la suma
        $resultado=$num1 + $num2;

        $resta =$num1 - $num2;

        $multiplicacion =$num1 * $num2;

        $division=$num1 / $num2;

        //Mostrar el resultado
        echo "<h3>El resultado de la suma es: $suma</h3>";

         echo "<h3>El resultado de la resta es: $resta</h3>";

          echo "<h3>El resultado de la multiplicacion es: $multiplicar</h3>";

           echo "<h3>El resultado de la division es: $dividir</h3>";
    
    }
    ?>

</body>
</html>