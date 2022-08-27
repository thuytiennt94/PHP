<?php
session_start();

if (isset($_SESSION['counter'])){
    $_SESSION['counter']=1;
}else{
    $_SESSION['counter']++;
}
$msg = "you have visited this page ".$_SESSION['counter'];
$msg .= " in this session.";
echo ($msg);
?>

<p>
    to continue click following link <br/>

    <a href="nextpage.php?<?php echo htmlspecialchars(SID);?>">
</p>
