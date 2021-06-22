<?php
    // inisial awal
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar_contoh"]["name"]);
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Validasi variabel
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar_contoh"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $error = false;
            echo "<br>";
        } else {
            echo "File is not an image.<br>";
            $error = false;
        }
    }

    // Validasi file
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $error = true;
    }

    // Validasi ukuran file > 500kb
    if ($_FILES["gambar_contoh"]["size"] > 500000) {
        echo "Sorry, your file is too large.<br>";
        $error = true;
    }
    
    // Validasi ekstensi file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $error = true;
    }

    // Validasi eror
    if ($error == true) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar_contoh"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar_contoh"]["name"]). " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
?>