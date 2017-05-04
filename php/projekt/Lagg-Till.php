<?php
    include('../session.php');
    include_once '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <form action="projektAdd.php" method="post" enctype="multipart/form-data"  runat="server">
    Rubrik: <input type="text" name="rubrik"><br>
    Text: <input type="text" name="text"><br>
    Skola: 
       <?php           
                  if( $site_session == "admin")
                  {
                      echo '<select>';
                      echo '<option value="Norrköping">Norrköping</option>';
                      echo '<option value="Linköping">Linköping</option>';
                      echo '<option value="Gälve">Gävle</option>';
                      echo '</select>';
                      echo '<br>';
                  }
                  else
                  {
                    echo '<input type="text" name="skola" ';
                    echo 'value="';
                    echo $skola_session;
                    echo '"';
                    echo " disabled >";
                  };
                
       ?>
    Bild Namn: <input type="text" name="bNamn"><br>
    Bild:<br>
    <input type="file" name="upload"><br>
    <button type="submit">Spara</button>
    
    </form>
    
</body>
</html>
