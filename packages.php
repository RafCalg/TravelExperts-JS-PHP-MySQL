<!DOCTYPE html>
<html>
    <head>
        

    </head>

    <body>
        <?php
            $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   
            
            $sql = "select PackageId, PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice from packages";
            $result = mysqli_query($link, $sql) or die("SQL Error"); 
            $paraArray = array();
                       
            while($row = mysqli_fetch_row($result))
            {
                $pkgRow[] = $row;
            }

            mysqli_close($link);
            //print_r($pkgRow);

        ?>
    </body>
</html>

