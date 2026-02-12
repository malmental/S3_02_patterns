<?php
require_once 'CarCouponGenerator.php';

class MercedesCouponGenerator implements CarCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    public function addSeasonDiscount()
    {
        if (!$this->isHighSeason) {
            $this->discount += 4;
        }
    }

    public function addStockDiscount()
    {
        if ($this->bigStock) {
            $this->discount += 10;
        }
    }

    public function generateNewCoupon() 
    {
        return "Get {$this->discount}% off the price of ur new Mercedes.";
    }
}