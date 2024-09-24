<html>
    <head>
        <title>Calculadora de valor do produto apos venda</title>

     </head>
    <body>
        <form method="post">
            Valor_1: <input name="vendacomdesconto" /><br/>
            <input type="submit"/>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $valorecomdesconto = $_REQUEST["vendacomdesconto"];
            if(is_numeric($valorec)){

            } else {
                echo "Digite um numero valido";
            }


        }
        
        ?>
        


    </body>
</html>