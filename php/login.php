<?php
include 'connection.php';
$pasw=$_REQUEST['log_password'];
$email=$_REQUEST['log_email'];
$emailExist="SELECT email FROM users WHERE email = '$email'";
$passwExist="SELECT passw FROM users WHERE passw = md5(\"$pasw \")";
$dataEmail = mysqli_query($conn,$emailExist);
$dataPassw = mysqli_query($conn,$passwExist);

/* ************************************************************************************************************** */
if(mysqli_num_rows($dataEmail)>0 && mysqli_num_rows($dataPassw)>0 ){
    echo '<script> window.location ="../index.html"</script>';
}else{
    //Funcion para agregar registro la funcion tiene 2 parametros 
    echo '<script> alert("Usuario no existente verifique tus datos");
    window.location ="../html/login.html"
    </script>';
    
}
/* ************************************************************************************************************** */

mysqli_close($conn);
?>

