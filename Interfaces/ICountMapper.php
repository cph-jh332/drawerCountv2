<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 13-04-2018
 * Time: 20:52
 */

interface ICountMapper
{
    public function getCounts();
    public function getCount();
    public function addCount(Count $count);
}