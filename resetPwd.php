 <?php
    if (null !==($_GET["epost"]) && null !==($_GET["token"])){
        session_start();        
        include 'connectloc.php';
        
        $epost = $conn->real_escape_string($_GET["epost"]);
        $token = $conn->real_escape_string($_GET["token"]);
        
        $data  = $conn->query("SELECT id FROM admin WHERE Epost='$epost' AND token='$token'");
        
        if($data->num_rows>0){
            //filter_var();
            $_SESSION["SESepost"]= $conn->real_escape_string($_GET["epost"]);
            $_SESSION["SEStoken"]= $conn->real_escape_string($_GET["token"]);
                                                     
            
            
        } else{
            echo"<div id=logga> 
            <img src=Assets/img/GLADRAGS-logotyp.jpg alt=logga title=logga> 
            </div>";
            echo"<br>";
            echo"kolla länken ";
            exit();
        }
         
    } else{
        header("Location: reset.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/form.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
   <div id="logga">
           <img id="imglogga" src="Assets/img/GLADRAGS-logotyp.jpg" alt="logga">
       </div>
   
   <form action="Assets/include/respwd.inc.php" method="post">
       <input type="text" name="nyLosen" placeholder="Ditt nya lösenord"><br><br>
       <input type="text" name="repLosen" placeholder="reptera ditt lösenord"><br><br>
       <button type="submit">Ändra</button>
   </form>
    
</body>
</html> 
   