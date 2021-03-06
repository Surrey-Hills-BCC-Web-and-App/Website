<!doctype html>
<html lang="en">
  <head>
    <title>Surrey Hills BCC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>Latest Podcast</h1>
    <?php
    include 'Pdb_connect.php';

    // Get images from the database
    $query = $db->query("SELECT * FROM Podcast ORDER BY uploaded_on DESC LIMIT 1");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $PodcastURL = "Podcasts/".$row["name"];
            $title = $row["title"];
            $time = $row["uploaded_on"];
            $user = $row["user"];
    ?>
    <h2><?php echo $title; ?></h2>
    <h6><?php echo $time; ?></h6>
    <h7>Uploaded by: <?php echo $user; ?></h7>
    </br>
    <video width="320" height="240" controls>
        <source src="<?php echo $PodcastURL; ?>" type="video/mp4">
    </video>
    <?php }
    }else{ ?>
        <p>No Podcast found...</p>
    <?php } ?>
    </br>
    </br>
    <h1>Latest News</h1>
    <?php
    // Include the database configuration file
    include 'WOdb_connect.php';

    // Get images from the database
    $query = $db->query("SELECT * FROM WhatsOn ORDER BY uploaded_on DESC LIMIT 1");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $newsURL = "What's On/".$row["name"];
            $title = $row["title"];
            $time = $row["uploaded_on"];
            $user = $row["user"];
    ?>
        <h2><?php echo $title; ?></h2>
        <h6><?php echo $time; ?></h6>
        <h7>Uploaded by: <?php echo $user; ?></h7>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $newsURL; ?>" allowfullscreen></iframe>
        </div>
    <?php }
    }else{ ?>
        <p>No News found...</p>
    <?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>