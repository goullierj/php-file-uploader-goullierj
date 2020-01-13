<?php
namespace App\models;

class FileUpload
{
    public $filename;
    function uploadFile()
    {
        $uploads_dir = 'assets/images';
        $tmp_name = $_FILES['image']["tmp_name"];
        $name = $this->filename;
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
    function getFileExtension()
    {
        $path = $_FILES['image']['name'];
        return $ext = pathinfo($path, PATHINFO_EXTENSION);
    }
    function setStoreName($name)
    {
        if (!empty($_POST['filename'])) {
            $this->filename = $name;
        }
    }
}