<!doctype html>
<html lang="en">
  <head>
    <title>Podcasts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand" href="http://newhope.net.au"><img src="/Media/NHLOGO.png" height="60" style="margin-top: .11cm;"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-size: 20pt;">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Podcasts.php">Podcasts<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="What's-On.php">What's On</a>
                </li>
                <li>
                    <a class="nav-link" href="UploadLogin/login.php">Upload News</a>
                </li>
                <li>
                    <a class="nav-link" href="PodcastLogin/login.php">Upload Podcasts</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    include 'Pdb_connect.php';

    // Get images from the database
    $query = $db->query("SELECT * FROM Podcast ORDER BY uploaded_on DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $PodcastURL = "Podcasts/".$row["name"];
            $title = $row["title"];
            $time = $row["uploaded_on"];
            $user = $row["user"];
    ?>
    <h1><?php echo $title; ?></h1>
    <h6><?php echo $time; ?></h6>
    <h7>Uploaded by: <?php echo $user; ?></h7>
    </br>
    <video width="320" height="240" controls>
        <source src="<?php echo $PodcastURL; ?>" type="video/mp4">
    </video>
    <?php }
    }else{ ?>
        <p>No Podcasts found...</p>
    <?php } ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>