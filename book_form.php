<?php

include_once("Config/Connections.php");
$con = Connections();

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)){
            $message[] = 'please fill out all';
    
        }else{
            $sql = "INSERT INTO `book_form`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) 
                    VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
            $con->query($sql) or die ($con->error);
    
            if($sql){
                $message[] = 'You successfully created your booking';
                header('location: Thankyoupages/Thankyou.html');
            }else{
                $message[] = 'could not fill out all';
            }
            }
        
    };

?>
