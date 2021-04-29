<?php

// die(var_dump($_FILES));

function goBackWithErro($message) {
    $_SESSION['notice'] = $message;

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit;
}

if (isset($_FILES['image'])) {
    if (!isset($_POST['description']) || empty($_POST['description'])) {
        goBackWithErro('Description required');
    }

    $image_name = basename($_FILES['image']['name']);

    $image_path = sprintf('%s/%s_%s', _TARGET_DIR, uniqid(), $image_name);

    $image_ext = strtolower(pathinfo($image_path, PATHINFO_EXTENSION));

    $allowed_images = ['jpg', 'png', 'jpeg', 'png', 'gif'];

    if (in_array($image_ext, $allowed_images) == FALSE) {
        goBackWithErro('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    }

    $image_size_data = getimagesize($_FILES['image']['tmp_name']);

    if ($image_size_data == false) {
        goBackWithErro('File is not an image.');
    }

    if ($_FILES['image']['size'] > 500000) {
        goBackWithErro('Sorry, your file is too large.');
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        // array_key_exists('images', $_SESSION) == FALSE
        if (isset($_SESSION['images']) == FALSE) {
            $_SESSION['images'] = [];
        }

        $_SESSION['images'][] = [
            'name' => $image_name,
            'desc' => $_POST['description']
        ];

        header('Location: ' . $_SERVER['HTTP_REFERER']);

        exit;
    } else {
        goBackWithErro('Sorry, there was an error uploading your file.');
    }
}