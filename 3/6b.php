
        <?php
        $bloodgroup = $_REQUEST['bloodgroup'];
    
        if($bloodgroup == " ") {
            echo "Incomplete form submitted.";
        }
        else{
            echo "form submitted.";
        }

        ?>
