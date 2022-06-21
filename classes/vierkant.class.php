<?php
class Vierkant extends Figuur
{
    private $x;
    public function __construct($x)
    {
        $this->x = $x;
    }
    protected function getX()
    {
        return $this->x;
    }
    public function berekenOppervlakte()
    {
        $uitkomst = $this->x * $this->x;
        return $uitkomst;
    }
}
