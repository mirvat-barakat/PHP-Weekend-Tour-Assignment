<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('success' => false, 'message' => 'Email must contain @, no dashes, a "dot" somewhere after the @'));
}
if (strlen($password) < 8 || !preg_match('@[A-Z]@', $password) || !preg_match('@[^\w]@', $password)) {
    echo json_encode(array('success' => false, 'message' => 'Password must contain at least 8 characters, one upper case letter, and one special character'));
}
else{
    echo json_encode(array('success' => true));  
}
?>