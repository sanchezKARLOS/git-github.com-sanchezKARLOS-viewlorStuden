    <?php

    $id=$_GET['id'];
    
    $query =mysqli_connect("localhost", "root", "", "softwareducativo");
     $sql = "DELETE FROM estudiante where id like $id";
     $resultado =mysqli_query($query, $sql);
     if(!$resultado){
         echo "error al eliminar registro";
     }
     else{
         echo "se a eliminado correctamente";
         header('location:verlistadostuden.php');
     }
    
    ?>


    