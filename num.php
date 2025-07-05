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
        <input type="number" name="no"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
        <?php
            if(isset($_POST[ 'submit']))
            {
                $a=($_POST['no']);

                if($a<10)
                {
                    echo "Number is less than 10";
                }
                elseif($a>=10 && $a<=20)
                {
                    echo "Number is between 10 and 20";
                }
                else
                {
                    echo "Number is greter Than 20";
                }
               
            }
        
        ?>

    
</body>
</html>