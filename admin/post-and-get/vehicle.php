<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $VEHICLE = new Vehicle(NULL);
    $VALID = new Validator();

    $VEHICLE->title = mysql_real_escape_string($_POST['title']);
    $VEHICLE->price = mysql_real_escape_string($_POST['price']);
    $VEHICLE->short_description = mysql_real_escape_string($_POST['short_description']);
    $VEHICLE->description = mysql_real_escape_string($_POST['description']);

    $dir_dest = '../../upload/vehicle/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $VEHICLE->image_name = $imgName;

    $VALID->check($VEHICLE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $VEHICLE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-tour-date.php?id=" . $VEHICLE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
//    $result = $VEHICLE->create();
//    if ($result) {
//        header("location: ../create-tour-package.php?id=" . $VEHICLE->id . "&&message=10");
//    } else {
//        
//    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/tour-package/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $VEHICLE = new Vehicle($_POST['id']);

    $VEHICLE->image_name = $_POST['oldImageName'];
    $VEHICLE->title = mysql_real_escape_string($_POST['title']);
    $VEHICLE->price = mysql_real_escape_string($_POST['price']);
    $VEHICLE->short_description = mysql_real_escape_string($_POST['short_description']);
    $VEHICLE->description = mysql_real_escape_string($_POST['description']);


    $VALID = new Validator();

    $VALID->check($VEHICLE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $VEHICLE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        
        $VEHICLE = Vehicle::arrange($key, $img);
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}