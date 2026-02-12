<?php
require_once 'BmwCouponGenerator.php';
require_once 'MercedesCouponGenerator.php';

echo 'Strategy Pattern' . PHP_EOL;

echo 'BMW Coupon' . PHP_EOL;
$bmwCouponGenerator = new BmwCouponGenerator();
$bmwCouponGenerator->addSeasonDiscount(); // Suma 5% si no es HighSeason
$bmwCouponGenerator->addStockDiscount(); // Suma 7% si hay bigStock

echo $bmwCouponGenerator->generateNewCoupon() . PHP_EOL;

echo 'Mercedes Benz Coupon' . PHP_EOL;
$MercedesCouponGenerator = new MercedesCouponGenerator();
$MercedesCouponGenerator->addSeasonDiscount(); // suma 4% si no es HighSeason
$MercedesCouponGenerator->addStockDiscount(); // suma 10% si es bigStock

echo $MercedesCouponGenerator->generateNewCoupon() . PHP_EOL;