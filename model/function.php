<?php

    $link = null;
    function connect(){
    global $link;
    $link = mysqli_connect('localhost','root','','sadiphonebook');
    return $link;
}

function disconnect(){
    global $link;
    mysqli_close($link);
}


function register_user($name,$email,$password,$vercode){
    global $link;
    connect();
    $query = "INSERT INTO spb_user(u_name,u_email,u_pass,u_vercode)"
                ."VALUES('$name','$email','$password','$vercode')";
    $res = mysqli_real_query($link, $query);
    disconnect();
    return $res;
}

function get_user($email){
        global $link;
        connect();
        $query = "SELECT * FROM spb_user WHERE u_email = '$email'";
        $q = mysqli_query($link, $query);
        $f = mysqli_fetch_assoc($q);
        disconnect();
        return $f;
}

function add_contact($name, $phone, $uId){
    global $link;
    connect();
    $query = "INSERT INTO spb_contact(c_name,c_phone,u_id)"."VALUES('$name','$phone','$uId')";
    $res = mysqli_query($link, $query);
    disconnect();
    return $res;
}