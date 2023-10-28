<?php

$server  = "localhost";
$user = "root";
$password = "";
$database = "hackathon";
global $conn;
$conn = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("error detected ... : ". mysqli_connect_error());
}
// session_start() ;
// signu up page password hash
function PasswordMatchAndHash($password, $repassword){
    if ($password == $repassword) {
        global $checked_password;
        $checked_password = true;
        global $hash;
        $hash = password_hash($password ,PASSWORD_DEFAULT);
    }

    return $hash;
}
function emailAlreadyExists($email, $conn) {
    $email = $conn->real_escape_string($email); // Sanitize the input to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true; // Email exists
    } else {
        return false; // Email doesn't exist
    }
}
function isImage($file) {
    $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF, IMAGETYPE_BMP);
    $detectedType = exif_imagetype($file['tmp_name']);
    
    return in_array($detectedType, $allowedTypes);
}
function isPDF($file) {
    $allowedExtensions = ['pdf'];
    $fileExtension = pathinfo($file['resume']['name'], PATHINFO_EXTENSION);

    // Check if the file extension is in the allowedExtensions array
    if (in_array(strtolower($fileExtension), $allowedExtensions)) {
        return true; // File is a PDF
    } else {
        return false; // File is not a PDF
    }
} 
