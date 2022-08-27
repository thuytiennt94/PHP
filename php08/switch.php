<html>
    <body>

    <?php
        $d = date("D");

        switch ($d){
            case "mon":
                echo "today is monday";
                break;

            case "tue":
                echo "today is tuesay";
                break;

            case "web":
                echo "today is wednesday";
                break;

            case "thu":
                echo "today is thursday";
                break;

            case "fri":
                echo "today is friday";
                break;

            case "sat":
                echo "today is saturday";
                break;

            case "sun":
                echo "today is sunday";
                break;

            default:
                echo "wonder which day is this? ";
        }
    ?>
    </body>
</html>
