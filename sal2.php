<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $sal=($_POST['salary']);
        $da=$sal*0.10;
        $ta=$sal*0.10;
        $hra=$sal*0.15;
        $res=$sal+$da+$ta+$hra;

        $pf=$sal*0.05;
        $tax=$sal*0.05;
        $nsal=$res-$pf-$tax;
        echo "Net salary is :-".$nsal;
        

    
        
    }
    ?>
</body>
</html>