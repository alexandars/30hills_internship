
<?php
try{
    $kon = new PDO('mysql:host=localhost;dbname=social_network;charset=utf8','root','');
}catch(PDOException $e){
    echo $e->getMessage();
}
?>