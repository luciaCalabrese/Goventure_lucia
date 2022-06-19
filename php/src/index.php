<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goventure- Lucia</title>
    <link rel="shortcut icon" href="goventureicon.jpg">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="css.css">
   <script src="app.js"></script>
</head>
<body>

<!-- NAVIGATION  -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d7ecef;">
    <a class="navbar-brand" href="#">Gestor de tareas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar"
                       aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row p-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <!-- FORM TO ADD TASKS -->
                    <form id="task-form">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Nombre de la tarea" class="form-control">
                        </div>
                        <?php
                        include('database.php');
                        $query = "SELECT * from categorias";
                        $result = mysqli_query($connection, $query);
                        if (!$result) {
                            die('Query Failed' . mysqli_error($connection));
                        }
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<label for="s1"> <input type="checkbox" name="subject" value="'.$row['Nombre'].'" id="s1"> '. $row["Nombre"] . ' </label> ';
                        }
                        ?>
                        <br>
                        <input type="hidden" id="taskId">
                        <button type="submit" class="btn btn-secondary btn-block text-center">
                            Guardar tarea
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
            <div class="card my-4" id="task-result">
                <div class="card-body">
                    <!-- SEARCH -->
                    <ul id="container"></ul>
                </div>
            </div>

            <table id="example" class="table table-bordered table-sm">
                <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Categorias</td>
                    <td>Acciones</td>
                </tr>
                </thead>
                <tbody id="tasks"></tbody>
            </table>
        </div>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>

</script>
<!-- Frontend Logic -->
<script src="app.js"></script>
</body>

</html>
