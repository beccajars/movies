<?php 

    $movie_Id = $_GET["movie"];

    //Get movie details
    $strSQL = "SELECT
    m.movie_id
    , p.person_id
    , m.title
    , p.first_name as first_name
    , p.last_name as last_name
    , m.year
    , m.release_date
    , m.description
    , m.duration
    , r.rating_nm as rating
    , m.post_credit
    , m.gross_box_office as gate
    , l.language_nm as language
    , m.rt_rating as rotten_rating

    FROM
    cis282movies.movies m
    , cis282movies.persons p
    , cis282movies.rating r
    , cis282movies.language l
    
    
    WHERE
    m.director_id = p.person_id
    AND m.rating_id = r.rating_id
    AND m.language_id = l.language_id
    AND m.movie_id = $movie_Id

    ORDER BY m.movie_id
    
    ";
 

    // Get result
    $result = mysqli_query($conn, $strSQL);

    // Fetch data
    $movieBio = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Get Cast Details
    $strSQL = "SELECT
    c.movie_id
    , p.person_id
    , p.first_name as first_name
    , p.last_name as last_name
    , c.character_nm
    , r.role_nm as role

    FROM 
    cis282movies.movies m
    , cis282movies.persons p
    , cis282movies.cast c
    , cis282movies.roles r

    WHERE

    c.role_id = r.role_id
    AND c.person_id = p.person_id
    AND m.movie_id = c.movie_id
	AND m.movie_id = $movie_Id
    order by c.role_id
    ";

    // Get Result
    $result = mysqli_query($conn, $strSQL);

    // Fetch Data
    $movieCast = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Free result
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($conn);



    ?>