<?php
class Cilinder extends Figuur
{
    private $h = 10;
    private $r = 3;

    public function __construct($h, $r)
    {
        $this->h = $h;
        $this->r = $r;
        // $this->pi = $pi;
    }
    protected function getH()
    {
        return $this->h;
    }
    protected function getR()
    {
        return $this->r;
    }

    public function berekenOppervlakte()
    {
        $cirkel = 2 * $this->pi * $this->r * $this->r;
        $buis = 2 * $this->pi * $this->r * $this->h;

        $uitkomst = $cirkel + $buis;
        return $uitkomst;
    }
}
