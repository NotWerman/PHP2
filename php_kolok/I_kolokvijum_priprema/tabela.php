<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASLOV</title>
</head>
<body>
  
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
            <table>
                <?php
                    for($i=0;$i<10;$i++)
                    {
                        ?>
                        <tr>
                            <td><?= $i+1 ?> </td>
                            <td>Filip</td>
                            <td>Brzanovic</td>
                        
                            
                        </tr>
                        <?php
                    }
                ?>
            </table>
            </td>
            
            </tr>

            <tr>
            
            <td colspan="2" align="center">IME I PREZIME <br> BROJ INDEXA</td>
            
            </tr>
        </table>
    
</body>
</html>