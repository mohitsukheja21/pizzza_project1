<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST">
            Enter Number:
    <input type="number" name="no"> <br> <br>
    <input type="submit" name="submit" value="submit">
   </form> 
        <?php
            if(isset($_POST['submit']))
            {
                $a=($_POST['no']);

                for($i=$a-1; $i>0;$i--)
                {
                    $a=$a*$i;
                }

                echo "Factorial Number is: $a";
            }
        
        ?>
</body>
</html>