//普通用户提交
<?php
	$amountInvested=$_POST["amountInvested"];
	$paybackPeriod=$_POST["paybackPeriod"];
	$profitRate=(float)$_POST["profitRate"]/100;
	$POR_OfHotel=$_POST["POR_OfHotel"]/100;
	$region=$_POST["region"];
	$typeOfHotel=$_POST["typeOfHotel"];
	$hotelRating=$_POST["hotelRating"];
	$RevPAR=682.54;					//从数据库中获取
	$constAndInstaCost=11000;		//从数据库中获取
	$areaProp_OfHotel=0.45;			//从数据库中获取
	$ratePeriod=0.07;
	$incomeTaxRate=0.25;
/*	$RevPAR=
	$constAndInstaCost=*/

	/*echo $amountInvested.$paybackPeriod.$profitRate.$POR_OfHotel.$region.$typeOfHotel.$hotelRating;*/
	$presentValueFactor=1/pow((1+(float)$ratePeriod),$paybackPeriod);
	$cashFlowOfYear=$amountInvested*$ratePeriod/(1-pow((1+(float)$ratePeriod),(-$paybackPeriod)));
	$income=$cashFlowOfYear/(1-$incomeTaxRate);
	$amortization=$amountInvested/$paybackPeriod;
	$profitOfAmortization=$income-$amortization;
	$incomeOfYear=$profitOfAmortization/$profitRate;
	$hotelIncomeDay=$incomeOfYear*$POR_OfHotel/365;
	$numberOfHotel=$hotelIncomeDay/$RevPAR;
	$areaOfHotel=$amountInvested/$constAndInstaCost*$areaProp_OfHotel;
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

?>