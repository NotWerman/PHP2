<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASLOV</title>
</head>
<body>
    <?php

        class Auto
        {
            public $model,$godiste,$proizvodjac;
        }

    ?>
  
        <table border="1">
            <tr>
            
                <td colspan="2" align="center">I Kolokvijum</td>
                        

            </tr>

            <tr>
            
            <td><a href="prikaz.php"</a>REFERENCA NA STRANICU PRIKAZA</td>
            <td><a href="tabela.php">REFERENCA NA STRANICU TABELE</a> </td>

            </tr>

            <tr>
            
            <td colspan="2" align="center">
                <?php
                    $niz_automobila=array();
                    $file=fopen("automobili.txt","r");
                    while(!feof($file))
                    {
                        $fileLine=fgets($file);
                        $separated=explode( ",",$fileLine );
                        $auto  = new Auto();
                        $auto->model=$separated[0];
                        $auto->godiste=$separated[1];
                        $auto->proizvodjac=$separated[2];
                        $niz_automobila[]=$auto;

                    }
                    var_dump($niz_automobila);
                    ?>
            </td>
            
            </tr>

            <tr>
            
            <td colspan="2" align="center">IME I PREZIME <br> BROJ INDEXA</td>
            
            </tr>
        </table>
    
</body>
</html>