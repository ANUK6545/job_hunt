<?php

include("dbcon.php");
$data = $_REQUEST;


if ($data['function'] == 'register') {

    $query = "select email from user where email = '".$data['email']."' " ;
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);

        if ($count == 0) {
            $query = "  INSERT INTO  user (uname ,  pwd ,  email ,  role ) VALUES ( '".$data['name']."','".$data['password']."' , '".$data['email']."' ,'".$data['role']."'); ";
            $result = mysqli_query($conn, $query);

            echo 1 ;
        }
        else{
            echo 0 ;
        }

        exit;
}

if($data['function'] == 'login') {
    $query = "select uid, uname, role from user where pwd='" . $data['password'] . "' and email='" . $data['email'] . "' limit 1 ";
    $result = mysqli_query($conn, $query);
    while ($r = mysqli_fetch_assoc($result)) $rows[] = $r;

    if (count($rows) == 1) {
      
        echo json_encode($rows);
        session_start();

        $_SESSION['username'] = $rows[0]['uname'];
        $_SESSION['session_id'] = $rows[0]['uid'];
    } else {
        echo "0";
    }

    exit;
}
