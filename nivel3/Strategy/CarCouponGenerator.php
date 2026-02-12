<?php

interface CarCouponGenerator
{
    /**
     * Añade descuento cuando es temporada baja
     */
    public function addSeasonDiscount();
    
    /**
     * Añade descuento cuando el inventario es muy grande
     */
    public function addStockDiscount();

    /**
     * Genera el cupón final con el descuento total
     */
    public function generateNewCoupon();
}