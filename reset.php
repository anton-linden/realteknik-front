<?php
    if (isset($_POST["losen"])){
        include 'connectloc.php';
        
        $epost = $conn->real_escape_string($_POST["epost"]);
        $data = $conn->query("SELECT ID FROM admin WHERE epost='$epost'");
        
        if($data->num_rows > 0){
            $str = "0123456789qwertyuiopasdfghjklzxcvbnm";
            $str = str_shuffle($str);
            $str = substr($str, 0, 9);
            $url = "http://localhost/mobila_applikationer/Glad_Rags/admin_1/resetPwd.php?token=$str&epost=$epost";
            
            mail($epost, "Återställ lösenord", "För att återställa lösenorden klicka på denna länk: $url", "Från: admin");
            
            $conn->query("UPDATE admin SET token='$str' WHERE Epost='$epost'");
            
        } else{
        }
    }
?>
    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="admin/css/login.css?<?php echo time(); ?>">
        <title>Document</title>
    </head>

    <body>
        <form action="authorize.php" method="post">
            <img id="logotype" src="webbsida/bilder/realgymnasiet_svart_logo_gron_bakgrund.png">

            <div id="inloggForm">
                <form method="post" action="reset.php">
                    <input type="email" name="epost" placeholder="E-post">
                    <br><br>

                    <button type="submit" name="losen">Glömt lösenord</button>
                </form>
            </div>
    </body>

    </html>
