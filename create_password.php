<?php
$pwd_text = 'umckampus2';
$pwd_hash = password_hash($a,PASSWORD_BCRYPT);
print($pwd_hash);
?>