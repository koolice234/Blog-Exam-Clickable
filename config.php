<?php
try {
    $config = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
