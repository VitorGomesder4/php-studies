<html>
    <head>
        <title>Calculo de triangulos</title>
     </head>
    <body>
        <form method="post">
            Valor_1: <input name="prim_lado" /><br/>
            Valor_2: <input name="segun_lado" /><br/>
            Valor_3: <input name="ter_lado" /><br/>
            <input type="submit"/>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $prim_lado = $_REQUEST["prim_lado"];
            $segun_lado = $_REQUEST["segun_lado"];
            $ter_lado = $_REQUEST["ter_lado"];
            if(is_numeric($prim_lado && $segun_lado && $ter_lado)){
                if($prim_lado == $segun_lado && $prim_lado == $ter_lado){
                    echo "Equilatero";
                }

            } else {
                echo "Digite numeros validos";
            }


        }
        
        ?>
        


    </body>
</html>
//isoceles = 2 lado igual, escaleno 3 lado diferente, equilatero 3 lado igual.