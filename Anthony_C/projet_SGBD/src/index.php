<?php
    require("function.php");
    //Authentification de l'utilisateur.
    /*do {
        $login = readline("Login : ");
        quitApplication($login);
        $password = readline("Password : ");
        quitApplication($password);
    } while (testlogin($login,$password) == false);
*/
    //Après authentification de l'utilisateur.
    define("SQL","SQL :> ");
    do {
        $value = readline(SQL);
        quitApplication($value);
    } while (testInputs($value) == false);
?>