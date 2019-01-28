<?php

if (isset($_POST["delete"]))
{
    unlink("../storage/" . $_POST["delete"]);
}

?>