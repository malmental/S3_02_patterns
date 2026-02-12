<?php
require_once 'CarCouponGenerator.php';

class BmwCouponGenerator implements CarCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    public function addSeasonDiscount()
    {
        if (!$this->isHighSeason) {
            $this->discount += 5;
        }
    }

    public function addStockDiscount()
    {
        if (!$this->bigStock) {
            $this->discount += 7;
        }
    }

    public function generateNewCoupon()
    {
        return "Get {$this->discount}% of the price with ur BMW";
    }
}