
<?php
// echo date('l jS \of F Y h:i:s A')
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : 'No first name given';

$lname = (isset($_POST['lname'])) ? $_POST['lname'] : 'No last name given';

$somevalue = "whatever";

$array = ['fname' => $fname, 'lname' => $lname, 'response' => $somevalue];

echo json_encode($array);

?>
