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
    require('models/movie_model.php');
    ?>

<?php foreach($movieBio as $row) { ?>
<title>CIS 282 | <?php echo $row['title']; ?></title>    
</head>

<body>
    <div class="container-fluid">
        <div class="row movie-header">
            <div class="col-7 offset-md-1">
                <h2><?php echo $row['title']; ?> (<?php echo $row['year']; ?>)</h2>
                <div class="row movie-details">
                    <div class="col-4 offset-md-1 text-left">
                        Director: <a href="person.php?person=<?php echo $row['person_id']; ?>">
                        <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a>
                    </div> |

                        <div class="col-1 text-center"><?php echo $row['rating']; ?></div> |
                        <div class="col-3 text-center"><?php echo $row['duration']; ?> mins</div> |
                        <div class="col-2 text-center"><?php echo $row['release_date']; ?> (<?php echo $row['language']; ?>)</div>

                    
                </div>
            </div>
            <div class="col-4">
                 <h3><?php echo $row['rotten_rating']; ?> %</h3>
             </div>
        </div>
</div>

<div class="row movie-desc">
    <div class="col-7 offset-md-1">
    <?php echo $row['description']; ?>
    </div>
</div>

<?php
}
?>

<?php foreach($movieCast as $row) { ?>
<div class="container-fluid">
    <div class="row cast">
        <div class="col-4 offset-md-1">
            <h4>
                <a href="person.php?person=<?php echo $row['person_id']; ?>">
                <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
                </a>
            </h4>
        </div>
        <div class="col-7"><h4><?php echo $row['character_nm']; ?></h4></div> 
    </div>
</div>

<?php 
}
?>





















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>