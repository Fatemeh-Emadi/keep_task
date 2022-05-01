<?php

include "database.php";

$task_id = $_GET["task_id"];
$tasks = $db->query("SELECT * FROM task WHERE id = $task_id")->fetch_assoc();
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
        <h3 class="text-light">Edit Notes </h3>
        <hr class="text-light">

        <div class="row mt-5">
        <div class="col-6 text-light mt-5 bg-secondary  rounded" style="height:360px;">
        <form action="edit_notes_process.php" method="post">
          <div class="mb-3 mt-5">

            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" value="<?php echo $tasks["title"];?>">
          </div>
          <div class="mb-3">

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Take a note" name="note" value="<?php echo $tasks["note"];?>"></textarea>
          </div>
          <div class="row mb-3">
            <div class="col-3">
              <input type="date" class="rounded" style="border-style: none; padding:2px; width:135px;" name="date" value="<?php echo $tasks["date"];?>">
            </div>
            <div class="col-3">
              <input type="time" class="rounded" style="border-style: none; padding:2px; width:135px;" name="time" value="<?php echo $tasks["time"];?>">
            </div>
            <div class="col-3 ">

              <input type="color" class="form-control form-control-color" id="exampleColorInput" value="<?php echo $tasks["color"];?>" title="Choose your color" style="width:50px; height:40px;" name="color">
            </div>
            <div class="col-3 ">
              <input type="submit" class="btn btn-primary" value="Save Note"></input>
              <input type="hidden" value="<?php echo $tasks["id"]; ?>" name="id">
            </div>
          </div>
        </form>


                            
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>