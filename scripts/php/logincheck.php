<?php 
    include('./includes/dbconnection.php');
    $query = "SELECT * FROM users WHERE name='".$_POST['uname']."' AND pw'".md5($_POST['pw'])."'";
    $request = mysqli_query($connection, $query);

    if(myqli_num_rows($request) > 0)    echo "Login erlaubt";
    else                                echo "User or password incorrect";


    mysqli_close($connection);
?>
                                                                               
                                                                               
                                                                               
                                                                               
                                                                               
                                                                               
                                                                               
                                                                               
                                                                              