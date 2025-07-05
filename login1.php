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
               $s=($_POST['name']);
               $m=($_POST['password']);

               if($m<8)
               {
                echo " please enter 8 digits";
               }
               else if($m!==[0-9])
               {
                echo "Password atleast one number";

               }
                else if($m!==['A-Z'])
               {
                echo "Password atleast one character";

               }
               else
               {
                    echo"Your ID IS CREATED";
               }




    }
    ?>
    
</body>
</html>