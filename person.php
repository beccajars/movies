<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <?php
        require('includes/config.php');
        require('models/person_model.php');
    ?>
<?php foreach ($personBio as $row) { ?>
    <title>CIS 282 | <?php echo $row['Name']; ?></title>
</head>
<body>
    <div class="container-fluid">
        <h1><?php echo $row['Name']; ?></h1>
        <?php echo $row['birthday']; ?> - <?php echo $row['dod']; ?> <br>
        Place of birth: <?php echo $row['pob']; ?> <br>
        Gender: <?php echo $row['gender']; ?> <br>
    </div>
<?php }?>


    <h2>Featured Movies:</h2>
    <?php foreach ($personFilm as $row) {?> 
    <?php echo $row['title']; ?> as <?php echo $row['character_nm']; ?><br>

    <?php }?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>