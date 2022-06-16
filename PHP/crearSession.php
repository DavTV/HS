<?php session_start();?>
<?php
include("conexion.php");
if(isset($_POST['login'])){
    if(isset($_POST['correo'])>=1  &&  isset($_POST['contrasenia'])>=1){
        $correo = $_POST['correo'];
        $password = $_POST['contrasenia'];
        $consulta = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasenia = '$password'";
        $resultado = $conex->query($consulta);

        if(mysqli_num_rows($resultado)>=1){
            // session_start();
            $_SESSION["usuario"]=$correo;
            ?>
            <script type="text/javascript"> 
            window.location="panel.php"; 
            </script> 
        <?php
        }else{
        
            // echo '<script language="javascript">alert("El Usuario/Contraseña no es correcto,intente de nuevo");</script>';
           echo "<div class='py-3'><center>Usuario incorrecto</center></div>";
        
        } 
        

    }else{
        echo "llene los datos primero";
    }}





?>

