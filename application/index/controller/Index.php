<?php
namespace app\index\controller;
use app\index\domain\HotelInfoRecive;
use app\index\service\generateHotelDateImpl;
use think\Controller;
use think\Request;
use think\Db;

class Index extends controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function genetateHotelDate(){
        $hotelInfoRecive = new HotelInfoRecive();
        $hotelInfoRecive -> setAmountInvested(input('amountInvested'));
        $hotelInfoRecive -> setPayBackPeriod(input('paybackPeriod'));
        $hotelInfoRecive -> setProfitRate(input('profitRate')/100);
        $hotelInfoRecive -> setProfitOfHotel(input('POR_OfHotel')/100);
        $hotelInfoRecive -> setRegion(input('region'));
        $hotelInfoRecive -> setTypeOfHotel(input('typeOfHotel'));
        $hotelInfoRecive -> setHotelRating(input('hotelRating'));
        $hotelInfoRecive -> setRevPAR(682.54);
        $hotelInfoRecive -> setConstAndInstallCost(11000);
        $hotelInfoRecive -> setAreaPropOfHotel(0.45);
        $hotelInfoRecive -> setRatePeriod(0.07);
        $hotelInfoRecive -> setIncomeTaxRate(0.25);

        $generateHotelDateImpl = new generateHotelDateImpl();
        $generateHotelDateImpl -> generateHotelDate($hotelInfoRecive);
    }
}
