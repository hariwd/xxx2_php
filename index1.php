<?php include "function.php"; 
$data = getData();
//var_dump($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comody Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        header
    </div>

    <div class="container ">
        <div class="row">
            <?php foreach ($data->record as $d) { ?>
                <div class="col">
                    <a href="#"><img src="<?=$d->thumb_url?>" alt=""></a>
                    <a href="#"><p><?=$d->title?></p></a>
                    <p><a href="#"><?=$d->profile_name?></a> <span><?=$d->duration?></span></p>
                </div>
            <?php } ?>
            
        </div>
    </div>

    <div class="container ">
        footer
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>