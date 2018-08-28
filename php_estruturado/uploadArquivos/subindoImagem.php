<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="mestre.css"> 

</head>
<body>


<?php

if(isset($_FILES['arquivo'])){
var_dump($_FILES['arquivo']);

move_uploaded_file($_FILES['arquivo']['tmp_name'], 'img/'.$_FILES['arquivo']['name']);

}

?>
    
    <form method="POST" action="" enctype="multipart/form-data">
    	<input type="file" name="arquivo"/>
    	<input type="submit" value="Enviar arquivo" name="enviar"/>
    </form>
   

</body>
</html>
