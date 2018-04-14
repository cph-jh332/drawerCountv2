<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 10:27 AM
 */
require_once '../assets/CashDrawer.php';

class Calculator
{
    public function calculateDiff(CashDrawer $cashDrawer, $toDeposit, $leftInDrawer){
        $total = $this->calculateTotal($cashDrawer);
        $total -= $leftInDrawer;
        $diff = $total - $toDeposit;
        return $diff;
    }

    public function calculateTotal(CashDrawer $cashDrawer){
        $cash = $cashDrawer->getCash();
        $total = 0;
        $total += $cash['0.5'] * 0.5;
        $total += $cash['1'] * 1;
        $total += $cash['2'] * 2;
        $total += $cash['5'] * 5;
        $total += $cash['10'] * 10;
        $total += $cash['20'] * 20;
        $total += $cash['50'] * 50;
        $total += $cash['100'] * 100;
        $total += $cash['500'] * 500;
        $total += $cash['1000'] * 1000;
        return $total;
    }
}