<?php

class Count
{
    private $id, $drawer1, $drawer2, $totalDeposit, $diff, $counterId;


    public function __construct($id, $drawer1, $drawer2, $totalDeposit, $diff, $counterId)
    {
        $this->id = $id;
        $this->drawer1 = $drawer1;
        $this->drawer2 = $drawer2;
        $this->totalDeposit = $totalDeposit;
        $this->diff = $diff;
        $this->counterId = $counterId;
    }

    /**
     * @return mixed
     */
    public function getDrawer1()
    {
        return $this->drawer1;
    }

    /**
     * @return mixed
     */
    public function getDrawer2()
    {
        return $this->drawer2;
    }

    /**
     * @return mixed
     */
    public function getTotalDeposit()
    {
        return $this->totalDeposit;
    }

    /**
     * @return mixed
     */
    public function getDiff()
    {
        return $this->diff;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCounterId()
    {
        return $this->counterId;
    }
}