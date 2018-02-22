<?php


$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "book_app";
$success    = "Database connection was successful";

try {
    $mysqli = mysqli_connect($server, $username, $password, $database);
    
    if($mysqli){
?>
            <script type="text/javascript">
                    console.log("<?php echo $success; ?>");
            </script>
<?php
    }
} catch (Exception $errormsg){
    echo $errormsg->getMessage();
}



?>