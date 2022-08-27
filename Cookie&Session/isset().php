<html>

<head>
    <title>Accessing cookies with php</title>
</head>
<body>
<?php
    if (isset($_COOKIE["name"]))
        echo "welcome " .$_COOKIE["name"]."<br/>";
    else
        echo "sorry... not recognized"."<br/>"
?>
</body>
</html>
