<!-- Задание
Создайте класс, хранящий в себе отдельно числитель и знаме-
натель дроби, и следующие методы для работы с этим классом:
§ Метод сложения 3-х объектов-дробей.
§ Метод вычитания 2-х объектов-дробей.
§ Метод умножения 4-х объектов-дробей.
§ Метод деления 2-х объектов-дробей.
§ Метод сокращения дроби. -->

<?php 
class Fraction
{
    public $numerator;
    public $denominator;

    public function __construct($numerator, $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function __toString()
    {
        return "{$this->numerator}/{$this->denominator}";
    }

    public function __add(Fraction $fraction)
    {
        $numerator = $this->numerator * $fraction->denominator + $this->denominator * $fraction->numerator;
        $denominator = $this->denominator * $fraction->denominator;
        return new Fraction($numerator, $denominator);
    }

    public function __sub(Fraction $fraction)
    {
        $numerator = $this->numerator * $fraction->denominator - $this->denominator * $fraction->numerator;
        $denominator = $this->denominator * $fraction->denominator;
        return new Fraction($numerator, $denominator);
    }

    public function __mul(Fraction $fraction)
    {
        $numerator = $this->numerator * $fraction->numerator;
        $denominator = $this->denominator * $fraction->denominator;
        return new Fraction($numerator, $denominator);
    }

    public function __div(Fraction $fraction)
    {
        $numerator = $this->numerator * $fraction->denominator;
        $denominator = $this->denominator * $fraction->numerator;
        return new Fraction($numerator, $denominator);
    }
    public function simplify() {
            $gcd = $this->gcd($this->numerator, $this->denominator);

            $this->numerator /= $gcd;
            $this->denominator /= $gcd;
        }
    
        private function gcd($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }
   
}

$fraction1 = new Fraction(1, 2);
$fraction2 = new Fraction(1, 3);
$fraction3 = $fraction1-> __add($fraction2);
$fraction4=new Fraction(2,4);
$fraction4->simplify();
echo $fraction1->__toString() . "<br>";
echo $fraction3->__toString() . "<br>";