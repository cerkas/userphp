<?php

function get_users() {
    
    global $link;
    
     $sql  = "SELECT * FROM user";
     
     $result = mysqli_query($link, $sql);
     
     $users = mysqli_fetch_all($result, MYSQLI_ASSOC)  ;
    
     return $users;
}

function get_information($id){

    global $link;

    $sql  = "SELECT * FROM user WHERE id=".intval($id);

    $result = mysqli_query ($link, $sql);

    $information= mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $information;
}



