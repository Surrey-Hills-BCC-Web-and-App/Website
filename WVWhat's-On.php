<!doctype html>
<html lang="en">
  <head>
    <title>What's On</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <style>
    * {
      text-align: center;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div style="background-color:#7cbe31; color:#0d2d52">
    <?php
    // Include the database configuration file
    include 'WOdb_connect.php';

    // Get images from the database
    $query = $db->query("SELECT * FROM WhatsOn ORDER BY uploaded_on DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $newsURL = "What's On/".$row["name"];
            $title = $row["title"];
            $time = $row["uploaded_on"];
            $user = $row["user"];
    ?>
        <h1><?php echo $title; ?></h1>
        <h5><?php echo $time; ?></h6>
        <h6>Uploaded by: <?php echo $user; ?></h6>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $newsURL; ?>" allowfullscreen></iframe>
        </div>
    <?php }
    }else{ ?>
        <p>No News found...</p>
    <?php } ?>
      <script>
        var frame = document.getElementById('news');
            frame.onload = function () {
                var body = frame.contentWindow.document.querySelector('body');
                body.style.color = '#0d2d52';
            };
        </script>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>