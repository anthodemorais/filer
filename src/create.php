<?php

if (isset($_POST["createFile"]))
{
    $newFile = '../storage/'. $_POST["fileName"];
    file_put_contents($newFile, $_POST["fileContent"]);
}

if (isset($_POST["createDir"]))
{
    $newFile = '../storage/'. $_POST["dirName"];
    mkdir($newFile);
}
?>