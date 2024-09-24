<html>
    <head>
        <title>Calculadora Soma e Média</title>

     </head>
    <body>
        <form method="post">
            Valor1: <input name="valor1" /><br/>
            Valor2: <input name="valor2" /><br/> <br/>
            <input type="submit"/>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $var1 = $_REQUEST["valor1"];
            $var2 = $_REQUEST["valor2"];
            $soma = $var1 + $var2;
            echo "Soma:" . $soma . "<br />" ;
            echo "Média" . (($var1 + $var2)/2); #no lugar de '$var1 + $var2' pode usar $soma
        }
        
        ?>
        


    </body>
</html>