<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/14
 * Time: 23:57
 */

namespace app\index\service;

use app\index\domain\HotelInfoRecive;
use app\index\service\generateHotelDate;

class generateHotelDateImpl
{
    public function generateHotelDate(HotelInfoRecive $hotelInfoRecive){

        $presentValueFactor=1/pow((1+(float) $hotelInfoRecive ->getRatePeriod()),$hotelInfoRecive -> getPayBackPeriod());
        $cashFlowOfYear=$hotelInfoRecive -> getAmountInvested() * $hotelInfoRecive -> getRatePeriod() / (1-pow((1+(float) $hotelInfoRecive->getRatePeriod()),(-$hotelInfoRecive->getPayBackPeriod())));
        $income=$cashFlowOfYear/(1-$hotelInfoRecive->getIncomeTaxRate());
        $amortization=$hotelInfoRecive->getAmountInvested()/$hotelInfoRecive->getPayBackPeriod();
        $profitOfAmortization=$income-$amortization;
        $incomeOfYear=$profitOfAmortization/$hotelInfoRecive->getProfitRate();
        $hotelIncomeDay=$incomeOfYear*$hotelInfoRecive->getProfitOfHotel()/365;
        $numberOfHotel=$hotelIncomeDay/$hotelInfoRecive->getRevPAR();
        $areaOfHotel=$hotelInfoRecive->getAmountInvested()/$hotelInfoRecive->getConstAndInstallCost()*$hotelInfoRecive->getAreaPropOfHotel();
        $areaOfRoom=$areaOfHotel/$numberOfHotel;


        echo $presentValueFactor."<br>";
        echo $cashFlowOfYear."<br>";
        echo $income."<br>";
        echo $amortization."<br>";
        echo $profitOfAmortization."<br>";
        echo $incomeOfYear."<br>";
        echo $hotelIncomeDay."<br>";
        echo $numberOfHotel."<br>";
        echo $areaOfHotel."<br>";
        echo $areaOfRoom."<br>";
    }
}