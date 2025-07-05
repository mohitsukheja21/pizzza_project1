<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST">
        Enter Percentage:
        <input type="number" name="no"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
        <?php
            if(isset($_POST[ 'submit']))
            {
                $a=($_POST['no']);

                if($a>=90)
                {
                    echo "A Grade";
                }
                else if($a>=75 && $a<90)
                {
                    echo "B Grade";
                }
                else if($a>=50 && $a<75)
                {
                    echo "c Grade";
                }
                else 
                {
                    echo "fail ";
                }



            }
         ?>

</body>
</html>