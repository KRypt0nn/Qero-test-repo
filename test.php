<?php

$db = new Dataset ('tmp.db');
$db->set (1, 2);
$db->save ();
$db->close ();

?>
