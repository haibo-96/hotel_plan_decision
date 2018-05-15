<?php
/**
 * Created by bo.
 * User: Administrator
 * Date: 2018/5/12
 * Time: 14:35
 */

namespace app\index\domain;


class HotelInfoRecive
{
    //投资额
    private $AmountInvested;
    //回收期
    private $PayBackPeriod;
    //摊销及所得税前利润率
    private $ProfitRate;
    //客房营收比例
    private $ProfitOfHotel;
    //建筑酒店所在地区
    private $Region;
    //酒店类型
    private $TypeOfHotel;
    //酒店星级
    private $HotelRating;
    //RevPAR
    private $RevPAR;
    //建筑安装成本
    private $ConstAndInstallCost;
    //酒店面积比例
    private $AreaPropOfHotel;
	//利率
    private $RatePeriod	;
	//所得税
    private $IncomeTaxRate;


    public function getAmountInvested() { return $this->AmountInvested; }
    public function setAmountInvested($AmountInvested) { $this->AmountInvested = $AmountInvested; }

    public function getPayBackPeriod() { return $this->PayBackPeriod; }
    public function setPayBackPeriod($PayBackPeriod) { $this->PayBackPeriod = $PayBackPeriod; }

    public function getProfitRate() { return $this->ProfitRate; }
    public function setProfitRate($ProfitRate) { $this->ProfitRate = $ProfitRate; }

    public function getProfitOfHotel() { return $this->ProfitOfHotel; }
    public function setProfitOfHotel($ProfitOfHotel) { $this->ProfitOfHotel = $ProfitOfHotel; }

    public function getRegion() { return $this->Region; }
    public function setRegion($Region){ $this->Region = $Region; }

    public function getTypeOfHotel() { return $this->TypeOfHotel; }
    public function setTypeOfHotel($TypeOfHotel) { $this->TypeOfHotel = $TypeOfHotel; }

    public function getHotelRating() { return $this->HotelRating; }
    public function setHotelRating($HotelRating) { $this->HotelRating = $HotelRating;}

    public function getRevPAR() { return $this->RevPAR; }
    public function setRevPAR($RevPAR) { $this->RevPAR = $RevPAR; }

    public function getConstAndInstallCost() { return $this->ConstAndInstallCost; }
    public function setConstAndInstallCost($ConstAndInstallCost) { $this->ConstAndInstallCost = $ConstAndInstallCost; }

    public function getAreaPropOfHotel() { return $this->AreaPropOfHotel; }
    public function setAreaPropOfHotel($AreaPropOfHotel) { $this->AreaPropOfHotel = $AreaPropOfHotel; }

    public function getRatePeriod() { return $this->RatePeriod; }
    public function setRatePeriod($RatePeriod) { $this->RatePeriod = $RatePeriod; }

    public function getIncomeTaxRate() { return $this->IncomeTaxRate; }
    public function setIncomeTaxRate($IncomeTaxRate) { $this->IncomeTaxRate = $IncomeTaxRate; }

}

?>