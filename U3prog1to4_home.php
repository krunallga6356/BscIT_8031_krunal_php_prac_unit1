<?php
    echo "<h2> Home page </h2>";
    if(isset($_COOKIE['username']))
    {
        echo "Welcome : " . $_COOKIE['username'];
    }
    else
    {
        echo "Cookie not found.";
    }

    echo "<br><br>";
    echo "<a href='U3prog1to4.html'> Go Back </a>";
?>