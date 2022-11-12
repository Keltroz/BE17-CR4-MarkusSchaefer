<?php

require_once "./db_connect.php";
function file_upload($image){
    $result = new stdClass();
    $result->fileName = "placeholder.png";
    $result->error = 1;
    $fileName = $image["name"];
    $fileType = $image["type"];
    $fileTmpName = $image["tmp_name"];
    $fileError = $image["error"];
    $fileSize = $image["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $filesAllowed = ["png", "jpg", "jpeg"];
    if ($fileError == 4) {
        $result->ErrorMessage = "No image added.";
        return $result;
    } else {
        if (in_array($fileExtension, $filesAllowed)) {
            if ($fileError == 0) {
                if ($fileSize < 10000000) {
                    $fileNewName = uniqid('') . "." . $fileExtension;
                    $destination = "../images/$fileNewName";
                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;
                    } else {
                        $result->ErrorMessage = "There was an error uploading this file.";
                        return $result;
                    }
                } else {
                    $result->ErrorMessage = "This image is bigger than the allowed 10000Kb. <br> Please choose a smaller one and update the product.";
                    return $result;
                }
            } else {
                $result->ErrorMessage = "There was an error uploading - $fileError code. Check the PHP documentation.";
                return $result;
            }
        } else {
            $result->ErrorMessage = "This file type can't be uploaded.";
            return $result;
        }
    }
}
