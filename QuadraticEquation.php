<?php


namespace Quadratic;


class QuadraticEquation
{
    public float $a;
    public float $b;
    public float $c;
    public float $delta;

    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta = 0;

    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @return float
     */
    public function getC(): float
    {
        return $this->c;
    }

    public function disPlay(): string{
      return 'phuong trinh bac 2: '.$this->a.'x2 + '.$this->b.'x + '.$this->c.' = 0';
    }

    public function getDiscriminant() : float{
        $this->delta = $this->b * $this->b - (4 * $this->a * $this->c);
        return $this->delta;
    }

    public function getRoot1(): float {
        if ($this->getDiscriminant() >=0 ){
            $root1 = (-$this->b + sqrt($this->delta))/2;
        } else {
            $root1 = 0;
        }
       return $root1;
    }

    public function getRoot2(): float {
        if ($this->getDiscriminant() >= 0){
            $root2 = (-$this->b - sqrt($this->delta))/2;
        } else {
            $root2 = 0;
        }
        return $root2;
    }
}

$quadratic = new QuadraticEquation(0,1,2);


function quadratic ($quadratic){
    echo $quadratic->disPlay().'<br/>';
    if ($quadratic->getRoot1() !=0 && $quadratic->getRoot2() !=0){
        if ($quadratic->getRoot1() == $quadratic->getRoot2()){
            echo 'phuong trinh co 1 nghiem :'.$quadratic->getRoot1();
        } else {
            echo 'phuong trinh co hai nghiem phan biet : x1 = '.$quadratic->getRoot1().' x2: '.$quadratic->getRoot2();
        }

    } else {
        echo 'The equation has no root';
    }
}

quadratic($quadratic);