<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $VEHICLE_PHOTO = new VehiclePhoto($_POST['id']);

    unlink(Helper::getSitePath() . "upload/vehicle/gallery/" . $VEHICLE_PHOTO->image_name);
    unlink(Helper::getSitePath() . "upload/vehicle/gallery/thumb/" . $VEHICLE_PHOTO->image_name);

    $result = $VEHICLE_PHOTO->delete();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}