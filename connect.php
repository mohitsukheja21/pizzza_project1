 <?php
    date_default_timezone_set("asia/kolkata");
    define("FILENAME",$_SERVER['DOCUMENT_ROOT']."/mohit/php/error.log");
    define("ISDEBUG",true);
    define("SERVER","localhost:3306 ");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","MOHIT");

    function LogError($error){
      $ErrorDateTime=date("D d-m-Y h:i:s A");
      $code=$error->getcode();
      $message=$error->getMessage();
      $line=$error->getLine();
      $file=$error->getFile();

      $ErrorMessage="\n Error Code $code ErrorDetail $message on $ErrorDateTime in file $file at lineno $line ";
      file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND|LOCK_EX);
      if(ISDEBUG==true)
         echo $ErrorMessage;
      else
       echo "oops something went wrong we went trying to findout the problems please come after sometime ";
      exit();


    }
    $db=null;
    try{
      $db=new PDO("mysql:host=".SERVER.";dbname=".DATABASE,USERNAME,PASSWORD);
      $db->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOEXCEPTION $error ){  
      LogError($error);
    }
   ?>