<?php
class Cirkel extends Figuur
{
    // private $r = 5;
    public function __construct($r)
    {
        $this->r = $r;
    }
    protected function getR()
    {
        return $this->r;
    }
    public function berekenOppervlakte()
    {
        $uitkomst = $this->r * $this->pi * 2;
        return $uitkomst;
    }
}
