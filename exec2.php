<html>
    <head>
        <title>Calculadora de 15%</title>

     </head>
    <body>
        <form method="post">
            Valor_1: <input name="Valor_1" /><br/>
            <input type="submit"/>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $valorec = $_REQUEST["Valor_1"];
            $calculo_de_15percent = $valorec * (15/100);
            echo "15%: " . $calculo_de_15percent;

        }
        
        ?>
        


    </body>
</html>