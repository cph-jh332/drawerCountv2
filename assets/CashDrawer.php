<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 10:29 AM
 */

class CashDrawer
{
    private $cash;

    public function __construct($halfs, $ones, $twos, $fives, $tens, $twenties, $fifties, $hundreds, $twohundreds, $fivehundreds, $thousands)
    {
        $this->cash = ['0,5' => $halfs,'1' => $ones, '2' => $twos, '5' => $fives, '10' => $tens, '20' => $twenties, '50' => $fifties, '100' => $hundreds,
            '200' => $twohundreds, '500' => $fivehundreds, '1000' => $thousands];
    }

    /**
     * @return array
     */
    public function getCash(): array
    {
        return $this->cash;
    }

}