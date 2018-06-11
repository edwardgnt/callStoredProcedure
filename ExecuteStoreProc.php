<?php
/**
 * Date: 9/20/16
 * Time: 8:30 PM
 */


// Database connection
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=company', 'root', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Calls an external stored procedure 
    $sql = "CALL ExplodeInvalidReasons()";
    $query = $db->query($sql);
    $query->execute();

    echo 'Procedure executed. Yay!';

} catch (PDOException $e) {
    $e->getMessage();
}




