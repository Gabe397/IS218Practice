<?php
require __DIR__ . '/../vendor/autoload.php';


$currentDir = directoryFunctions::getCurrentDirectory();
$uploadDirectory = directoryFunctions::uploadsDirectory();

$errors = arrayFunctions::instantiateArray(); // Store all foreseen and unforseen errors here

$fileExtensions = ['csv','xlsx']; // Get all the file extensions

$uploadFile = new upFile();

$fileExtension = strtolower(end(explode('.',$uploadFile->getFileName()))); //Needs an exception.

$uploadPath = $currentDir . $uploadDirectory . basename($uploadFile->getFileName());

if (isset($_POST['submit'])) {

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a csv or a xlsx";
    }

    if ($uploadFile->getFileSize() > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($uploadFile->getFileTmpName(), $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($uploadFile->getFileName()) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}



