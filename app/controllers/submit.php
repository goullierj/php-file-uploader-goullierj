<?php
if (!empty($_FILES)){
    $uploader = new App\models\FileUpload();
    $uploader->setStoreName($_POST['filename'] . '.' . $uploader->getFileExtension());
    $uploader->uploadFile();
    echo $twig->render('index.html',['filename'=>$uploader->filename, 'pageName' => 'send', 'img' => $_POST['filename'] . '.' . $uploader->getFileExtension()]);
} else{
    echo $twig->render('index.html', ['pageName' => 'form']);
}