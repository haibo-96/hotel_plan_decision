<?php
/**
 * Created by bo
 * User: Administrator
 * Date: 2018/5/12
 * Time: 23:39
 */

namespace app\index\domain;


class HotelInfoBack
{
    //酒店星级
    private $HotelRating;
    //酒店类型
    private $TypeOfHotel;
    //客房数量
    private $NumberOfRoom;
    //客房面积
    private $AreaOfRoom;
    //城市RevPAR
    private $RevPAR;
    //城市
    private $City;
    //同城同类酒店最小面积
    private $MinArea;

    public function getHotelRating() { return $this->HotelRating; }
    public function setHotelRating($HotelRating) { $this->HotelRating = $HotelRating; }

    public function getTypeOfHotel() { return $this->TypeOfHotel; }
    public function setTypeOfHotel($TypeOfHotel) { $this->TypeOfHotel = $TypeOfHotel; }

    public function getNumberOfRoom() { return $this->NumberOfRoom; }
    public function setNumberOfRoom($NumberOfRoom) { $this->NumberOfRoom = $NumberOfRoom; }

    public function getAreaOfRoom() { return $this->AreaOfRoom; }
    public function setAreaOfRoom($AreaOfRoom) { $this->AreaOfRoom = $AreaOfRoom; }

    public function getRevPAR() { return $this->RevPAR; }
    public function setRevPAR($RevPAR) { $this->RevPAR = $RevPAR; }

    public function getCity() { return $this->City; }
    public function setCity($City) { $this->City = $City; }

    public function getMinArea() { return $this->MinArea; }
    public function setMinArea($MinArea) { $this->MinArea = $MinArea; }
}

?>
