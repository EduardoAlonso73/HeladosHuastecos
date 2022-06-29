<?php
include 'connection.php';
$usernm=$_REQUEST['inp_usario'];
$pasw=$_REQUEST['inp_password'];
$email=$_REQUEST['inp_email'];
$query_insert=" INSERT INTO users (username, passw, email) VALUES (\"$usernm \", md5(\"$pasw \"),\"$email \")";
$emailExist="SELECT email FROM users WHERE email = '$email'";
$result = mysqli_query($conn,$emailExist);

/* ************************************************************************************************************** */
if(mysqli_num_rows($result)>0){
    echo '<script> alert("Este usuarios ya esta registrado");
     window.location ="../html/registro.html"  </script>';
}else{
    //Funcion para agregar registro la funcion tiene 2 parametros 
   insert_registro($conn,$query_insert);
}
/* ************************************************************************************************************** */

// My function -> insert_registro 
function insert_registro($conec,$query){

    if(mysqli_query($conec,$query)){
        echo "Datos insertados";
    }else{
    echo "Error: ".$query."<br>". mysqli_connect_error($conec);
    }
}
mysqli_close($conn);
?>

