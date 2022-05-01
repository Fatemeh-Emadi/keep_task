<?php 
include "database.php";

$tasks = $db->query("SELECT * from task");
$i=1;
?>
<html>
    <head>
    <title>Google Keep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="sidebars.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
    </head>
<body class="bg-dark">
<div class="container">
        <h3 class="text-light">Notes</h3>
        <hr class="text-light">
        <div class="row mt-5">
            

            <div class="col-lg-6 col-md-12 col-sm-12">
                
                <br class="text-light">
                <table class="table list-table table-secondary table-nowrap align-middle table-borderless ">
                    <thead>
                    <tr>
                        <th scope="col" style="width:50px;">#</th>
                        <th scope="col">title</th>
                        <th scope="col">note</th>
                        <th scope="col" style="width: 150px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($tasks as $task): ?>


                        <th scope="row">
                            <?php

                            echo $i++;
                            ?>

                        </th>
                        <td>
                            <?php echo $task["title"];?>

                        </td>
                        <td><?php echo $task["note"]; ?></td>
                        <td>
                            
                            <a class="btn btn-sm btn-outline-danger"
                               href="remove_notes_process.php?task_id=<?php echo $task["id"]; ?>" >
                                <i class="fas fa-trash"></i>
                            </a>

                        </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/2a5559cd61.js" crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="sidebars.js"></script>
 
</body>
</html>