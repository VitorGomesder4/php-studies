<html>
    <head>
        <title>Calculadora de raiz quadrada</title>

     </head>
    <body>
        <form method="post">
            Valor_1: <input name="Valor_1" /><br/>
            <input type="submit"/>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $valorec = $_REQUEST["Valor_1"];
            if(is_numeric($valorec)){
                $calculo_de_raiz = pow($valorec,(1/2));
                echo "raiz de " . $valorec . " é: " . $calculo_de_raiz;
            } else {
                echo "Digite um numero valido";
            }


        }
        
        ?>
        


    </body>
</html>