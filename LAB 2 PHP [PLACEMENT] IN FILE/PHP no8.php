<?php 

    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;

    // $std = [1, 'alamin', 2.4];
    // $std = array(1, 'alamin', 2.4);
    // $std[1];

    // $std = ['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'];
    // $std['id']

    $students = [
                    's1'=>['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'],
                    's2'=>['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'],
                    's3'=>['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu']
                ];
    //$students['s2']['email'];

    // print('hello PHP');
    // echo "Another Hello PHP";

    // function sum($a=0, $b=0){
    //     return $a+$b;
    // }

    //echo sum(10);

    // if( 1  == '1'){
    //     echo 'true';
    // }else{
    //     echo "false";
    // }
    
    // foreach($std as $s){
    //     $s
    // }

    // for($i=0; $i<10; $i++){
    //     echo "<h2>Alamin <h2>";
    // }

    //print_r($students);

    //print_r($_GET);

    echo "Your username is:" . $_GET['name'];

?>

<h1>Test </h>