<?php
    setcookie("name", "", time()-60, "/","",0);
setcookie("age", "", time()-60, "/","",0);
?>
<html>
<head>
    <title>Deleting cookies with php</title>
</head>
<body>
<?php
echo "deleted cookies"
?>
</body>
</html>
