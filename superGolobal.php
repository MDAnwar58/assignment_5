<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    function setName()
    {
        return $GLOBALS['u_name'] = $GLOBALS['name'];
    }
    function setEmail()
    {
        return $GLOBALS['u_email'] = $GLOBALS['email'];
    }

    function getName()
    {
        $user_name = setName();
        return "Name: {$user_name}<br>";
    }
    function getEmail()
    {
        $user_email = setEmail();
        return "Email: {$user_email}";
    }
    
    echo getName();
    echo getEmail();
}