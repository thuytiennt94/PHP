<?php
$myBD = new mysqli('localhost', 'root', '', 'library');
//make sure the above credentials are correct for your eniromment
if ($myBD->connect_error)
{
    die('connect error (' . $myBD->connect_errno . ')' .$myBD->connect_error);
}
$sql = "Select * from books where available = 1 order by title";
$result = $myBD->query($sql);
?>
<table cellspacing="2" cellpadding="6" align="center" border="1">
    <tr>
        <td colspan="4">
            <h3 align="center">These Books are currently available</h3>
        </td>
    </tr>
    <tr>
        <td align="center">Title</td>
        <td align="center">Year Published</td>
        <td align="center">ISBN</td>
    </tr>


<?php
While ($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>";
    //echo stripslashes($row["title"]);
    echo stripcslashes($row["title"]);
    echo "</td><td align='center'>";
    echo $row["pub_year"];
    echo "</td><td>";
    echo $row["ISBN"];
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>