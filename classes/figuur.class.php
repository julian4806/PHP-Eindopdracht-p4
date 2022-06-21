<?php
abstract class Figuur
{
    protected $pi = 3.14159265359;
    private function __construct($r)
    {
        $this->r = $r;
    }
    protected function getR() // wat?
    {
        return $this->r;
    }
    abstract function berekenOppervlakte();
}
