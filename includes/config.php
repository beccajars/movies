<?php 
    $dbhost = 'cis282movies.crtglnnryrmm.us-east-1.rds.amazonaws.com';
    $dbuser = 'baileymovies';
    $dbpass = 'moviesdb';
    $dbname = 'cis282movies';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (! $conn)
    {
        die('Could not connect to instance: ' . mysqli_error($conn));
    }