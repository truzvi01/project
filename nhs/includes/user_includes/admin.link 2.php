<?php 
$link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');
    $sql = "SELECT * from patients";
    $result = mysqli_query($link,$sql);
    if (isset($_GET['edit'])) {
        $user_id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($link, "SELECT * FROM patients WHERE user_id=$user_id");
        if (count($record) == 1 ) {
            $name = mysqli_fetch_array($record);
            $status = $name['status'];
            $last_name = $name['last_name'];
            $first_name = $name['first_name'];
            $gender = $name['gender'];
            $dob = $name['dob'];
            $birth_place = $name['birth_place'];
            $home_address = $name['home_address'];
            $city = $name['city'];
            $county = $name['county'];
            $postcode = $name['postcode'];
            $email = $name['email'];
            $telephone = $name['telephone'];
            $user_type = $name['user_type'];

        }
    }
?>