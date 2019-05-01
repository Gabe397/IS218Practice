<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 4/8/2019
 * Time: 8:10 PM
 */
class upFile
{
    public function __construct()
    {
    }
    public function getFileName()
    {
        $name = self::fileVar()['fileToUpload']['name'];
        return $name;
    }
    public function getFileSize()
    {
        $size = self::fileVar()['fileToUpload']['size'];
        return $size;
    }
    public function getFileTmpName(){
        $tmpName = self::fileVar()['fileToUpload']['tmp_name'];
        return $tmpName;
    }
    public function getFileType()
    {
        $fileType = self::fileVar()['fileToUpload']['type'];
        return $fileType;
    }
    public static function fileVar()
    {
        return $_FILES;
    }
    public function moveFile($name, $path)
    {
        return move_uploaded_file($name,$path);
    }
}