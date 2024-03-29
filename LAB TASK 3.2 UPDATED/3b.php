
        <?php
            $date = $_REQUEST['date'];
            $month = $_REQUEST['month'];
            $year = $_REQUEST['year'];
         
            if($date == "" || $month == "" || $year == "" ) {
                echo "Incomplete form submitted.";
            }
            elseif( $date<1 || $date>31) {
                echo "Date must in between 1-31.";
            }
            elseif( $month<1 || $month>12) {
                echo "Month must in between 1-12.";
            }
            elseif( $year<1953 || $year>1998) {
                echo "Year must in between 1953-1998.";
            }
            else{
                echo "form submitted.";
            }
        ?>
    