<?php
include_once 'database.php';



if(isset($_POST['submit'])){
  echo 'llego';
    $pname = $_POST['p_name'];
    $pyear = $_POST['p_year'];
    $plocation = $_POST['p_location'];
    $pimage = $_POST['p_image'];
    $pclass = $_POST['p_class'];
    $resident = $_POST['resident_prof'];
    $subsidies = $_POST['subsidies'];
    $financing = $_POST['financing'];
    $agency = $_POST['agency'];
    $joint = $_POST['joint_ven_part'];


    

    $insertar = "INSERT INTO projects(p_name,p_year,p_image,p_location, p_class, resident_prof, subsidies, financing, agency, joint_ven_part) VALUES ('{$pname}','{$pyear}', '{$pimage}', '{$plocation}', '{$pclass}', '{$resident}', '{$subsidies}', '{$financing}', '{$agency}', '{$joint}');";


    $res_insert = mysqli_query($connect, $insertar);

    echo $res_insert;

    if ($res_insert == true) {
        echo 'Su registro ha sido exitoso';
      } else {
        echo 'Error, no se pudo registrar';
      }

}
else{
  echo 'no llego el submit';
}



?>