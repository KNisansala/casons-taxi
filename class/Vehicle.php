<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicles
 *
 * @author Suharshana DsW
 */
class Vehicle {

    public $id;
    public $title;
    public $image_name;
    public $price;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`price`,`short_description`,`description`,`queue` FROM `vehicle` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->price = $result['price'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `vehicle` (`title`,`image_name`,`price`,`short_description`,`description`,`queue`) VALUES  ('"
                . $this->title . "', '"
                . $this->image_name . "', '"
                . $this->price . "', '"
                . $this->short_description . "', '"
                . $this->description . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `vehicle` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `vehicle` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`price` ='" . $this->price . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $this->deleteVehiclePhotos();

        unlink(Helper::getSitePath() . "upload/vehicle/" . $this->image_name);

        $query = 'DELETE FROM `vehicle` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deleteVehiclePhotos() {

        $VEHICLE_PHOTO = new VehiclePhoto(NULL);

        $allPhotos = $VEHICLE_PHOTO->getVehiclePhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $VEHICLE_PHOTO->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/vehicle/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/vehicle/gallery/thumb/" . $IMG);

            $VEHICLE_PHOTO->id = $photo["id"];
            $VEHICLE_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `vehicle` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
