<?php


$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "book_app";

try {
    $connection = mysqli_connect($server, $username, $password, $database);
    
    if($connection){
        ?>

<script type="text/javascript">
        console.log("<?php echo "Database connection was successful";?>");
</script>
<?php
} } catch (Exception $errormsg){
    echo $errormsg->getMessage();
}



?>