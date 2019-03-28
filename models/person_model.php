<?php 
    $personId = $_GET["person"];

    //Get person details
    $strSQL = "SELECT
    concat( p.first_name, ' ', p.last_name) as Name
    , p.dob as birthday
    , if(p.dod = 0000-00-00, 'present', dod) as dod
    , if(p.gender = 'm', 'Male', 'Female') as gender
    , p.pob

    FROM cis282movies.persons p

    WHERE p.person_id =  $personId
    ";

    //Get result
    $result = mysqli_query($conn, $strSQL);

    //Fetch data
    $personBio = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Get person's movies deatils
    $strSQL = "SELECT 
    m.title as title
    , c.character_nm as character_nm
    FROM cis282movies.cast c,
    cis282movies.persons p,
    cis282movies.movies m
    
    WHERE 
    c.person_id = p.person_id
    AND m.movie_id = c.movie_id
    AND p.person_id = $personId
    ";

    //Get result
    $result = mysqli_query($conn, $strSQL);

    //Fetch data
    $personFilm = mysqli_fetch_all($result, MYSQLI_ASSOC);


    // Free result
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($conn);
?>