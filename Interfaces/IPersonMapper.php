<?php

interface IPersonMapper
{
    public function getPerson($name);
    public function addPerson(Person $person, $password);
}