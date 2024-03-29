    <?php
        $gender = $_REQUEST['gender'];
        
        if($gender == "") {
            echo "Atleast one of them must be selected.";
        }
        else{
            echo "form submitted.";
        }
        
    ?>
   