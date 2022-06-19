<?php

  include('database.php');

if(isset($_POST['name'])) {
  $id_categoria = $_POST['id'];
  $task_name = $_POST['name'];
  $categorias = implode(',', $id_categoria);

    $query = "INSERT into tareas(Nombre, categorias) VALUES ('$task_name', '$categorias')";
    $result = mysqli_query($connection, $query);
  

  if (!$result) {
    die('Query Failed.');
  }

  echo "Task Added Successfully";  

}

?>
