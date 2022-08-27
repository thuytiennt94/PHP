<?php
setcookie("name", "John Watkin", time()+3600, "/", "", 0);
setcookie("age", "36", time()+3600, "/", "",0);
?>
<html>
    <head>
        <title>Setting cookies with php</title>
    </head>

    <body>
        <?php echo "set cookies"?>
    </body>
</html>