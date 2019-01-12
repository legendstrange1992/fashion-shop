<?php
$host = 'ec2-54-225-121-235.compute-1.amazonaws.com';
$port=5432;
$dbname='dbsmf0pvdov0mv';
$user = 'gsgujdwxsikkjr';
$password = '77dd2531806e7701cbc74a56612fdaa47a439ac77dc262b1f374162fc96c0e29';
$conn = pg_connect("host=$host port=5432 dbname=$dbname user=$user password=$password");
pg_set_client_encoding($conn,'UNICODE');
 ?>