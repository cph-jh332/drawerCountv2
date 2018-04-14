<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 13-04-2018
 * Time: 20:50
 */

interface IPersonMapper
{
    public function getPerson($name);
    public function addPerson(Person $person);
}