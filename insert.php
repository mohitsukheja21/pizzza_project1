 <?php   
    require_once  "connect.php";
    if(isset($_POST['add']))
    {
        $sql= $db->prepare("INSERT INTO data
        (name,email,gender) VALUES(?,?,?)");
        $sql->execute([

            $_POST['name'],
            $_POST['Email'],
            $_POST['gen']



        ]);
        header ("location:".$_SERVER['PHP_SELF']);
        echo "your data is inserted....";
        exit();
    }
    

   if(isset($_GET['delete']))
   {
      $sql=$db->prepare("Delete From data Where id=?");
      $sql->execute([$_GET['delete']]);
      echo "data deleted suceesfully";

        header( "location:".$_SERVER['PHP_SELF']);
        
        exit();

   }
   $ue=NULL;
   if(isset($_GET['edit']))
   {
         $sql=$db->prepare("Select * from data where id=?");
         $sql->execute([$_GET['edit']]);
         $ue=$sql->fetch();

         
   }
   if(isset($_POST['update']))
   {
      $sql=$db->prepare("Update data set Name=?,Email=?,Gender=? where Id=?");
      $sql->execute([
         $_POST['name'],
         $_POST['Email'],
         $_POST['gen'],
         $_POST['id']
      ]);
          header ("location:".$_SERVER['PHP_SELF'] . "?updated=1");
          exit();
   }
   
   $user= $db->query('SELECT * FROM data order BY id ASC')->fetchAll();
  ?>
 
 <!DOCTYPE html>

 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <h1 align="center"><?=$ue ? 'Update user':'ADD User' ?></h1>
    <form action="" method="POST">  

    <table border="1" align="center"> 

    <input type="hidden" name="id"
    value=<?=htmlspecialchars($ue['Id']??'')?>>
        
     <tr>
        <td>Enter Name:</td>
        <td>
            <input type="text" name="name" value=<?=htmlspecialchars($ue['Name']??'') ?>>
        </td>
     </tr>
     <tr>
        <td>Enter Email:</td>
        <td>
            <input type="text" name="Email"  value=<?=htmlspecialchars($ue['Email']??'') ?>>
        </td>
     </tr>
     <tr>
        <td>Enter Gender</td>
        <td>
            <input type="text" name="gen"  value=<?=htmlspecialchars($ue['Gender']??'') ?>>
        </td>
     </tr>
     <tr>
        <td colspan="2">
            <input type="submit" value="<?= $ue ? 'update':'Insert'?>" name="<?=$ue ? 'update' :'add' ?>">
            <input type="reset"  value="reset">
        </td>
        
     </tr>

    </table>
    </form>

    <table align="center" border="1">
      <tr>
         <td>ID</td>
         <td>Name</td>
         <td>Email</td>
         <td>Gender</td>
         <td>Operation</td>
      </tr>
      <?php foreach ($user as $u):?>
      
      <tr>
         <td><?=htmlspecialchars($u['Id']);?></td>
         <td><?=htmlspecialchars($u['Name']);?></td>
         <td><?=htmlspecialchars($u['Email']);?></td>
         <td><?=htmlspecialchars($u['Gender']);?></td>
         <td>
            <a href="?delete=<?=$u['Id'] ?>"onclick="return confirm('Are you want to delete?');"name="delete">Delete</a>
            <a href="?edit=<?=$u['Id']?>">EDIT</a>
         </td>
      </tr>

      <?php endforeach;?>
    </table>
 </body>
 </html>