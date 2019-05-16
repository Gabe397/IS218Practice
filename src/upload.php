<?php
require __DIR__ . '/../vendor/autoload.php';

$uploadFile = new upFile();

$fileExtensions = ['csv','xlsx']; // Get all the file extensions

$currentDir = directoryFunctions::getCurrentDirectory();

$uploadDirectory = directoryFunctions::uploadsDirectory();

$errors = arrayFunctions::instantiateArray(); // Store all foreseen and unforseen errors here

$fileExtension = stringFunctions::stringLower(arrayFunctions::pointToEnd(stringFunctions::explodeString('.',$uploadFile->getFileName())));

$uploadPath = $currentDir . $uploadDirectory . stringFunctions::stringBasename($uploadFile->getFileName(),'.');

if (isset($_POST['submit'])) {

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a csv or a xlsx";
    }

    if ($uploadFile->getFileSize() > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = $uploadFile->moveFile($uploadFile->getFileTmpName(), $uploadPath);

        if ($didUpload) {
            echo "The file " . stringFunctions::stringBasename($uploadFile->getFileName() , '.') . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    }
    else {
        foreach ($errors as $key => $val) {
            echo $val;
        }
    }
}
?>

<html>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">

    <input type="Submit" value="Back" name="submit">
</form>


<?php if(empty($errors)) :

    header('Location: table.php?uploadPath='.$uploadPath);

    ?>


<?php endif; ?>


</body>
</html>



