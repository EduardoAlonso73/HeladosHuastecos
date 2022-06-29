<?php
include 'connection.php';
$email=$_REQUEST['email'];
$pasw=$_REQUEST['new_password'];
$query_update=" INSERT INTO user_test (username, passw, email) VALUES (\"$usernm \", md5(\"$pasw \"),\"$email \")";
$emailExist="SELECT email FROM user_test WHERE email = '$email'";
$result = mysqli_query($conn,$emailExist);

/* ************************************************************************************************************** */
if(mysqli_num_rows($result)>0){
    
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

