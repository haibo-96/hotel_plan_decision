<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/14
 * Time: 23:55
 */

namespace app\index\service;


use app\index\domain\HotelInfoRecive;

interface generateHotelDate
{
    public function generateHotelDate(HotelInfoRecive $hotelInfoRecive);
}