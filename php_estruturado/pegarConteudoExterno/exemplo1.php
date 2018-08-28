<?php
$url = file_get_contents('https://www.menortarifa.com/home.php');

?>



<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).text('aaaaa');
    });

      $("h1").click(function(){
        $(this).text('aaaaa');
    });
});
</script>
</head>
<body>

<?php print_r($url); ?>


</body>
</html>
