<?php

class CashDrawer
{
    private $cash;

    public function __construct($halfs, $ones, $twos, $fives, $tens, $twenties, $fifties, $hundreds, $twohundreds, $fivehundreds, $thousands, $extra)
    {
        $this->cash = ['05' => $halfs,'1' => $ones, '2' => $twos, '5' => $fives, '10' => $tens, '20' => $twenties, '50' => $fifties, '100' => $hundreds,
            '200' => $twohundreds, '500' => $fivehundreds, '1000' => $thousands, 'extra' => $extra];
    }

    /**
     * @return array
     */
    public function getCash(): array
    {
        return $this->cash;
    }

}