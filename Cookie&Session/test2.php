<html>

    <head>
        <title>Accessing cookies with php</title>
    </head>

    <body>
    <?php
        echo $_COOKIE["name"]. "<br/>";

//      /*is equivalent to */
    $HTTP_COOKIE_VARS = $_COOKIE;
    echo $HTTP_COOKIE_VARS["name"]."<br/>";

    echo $_COOKIE["age"]."<br/>";

    echo $HTTP_COOKIE_VARS["age"]."<br/>"
    ?>
    </body>
</html>
