<?php

interface ICountMapper
{
    public function getCounts();
    public function getCount();
    public function addCount(Count $count);
}