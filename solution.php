<?php

class Solution {

  private $alphabet;
  private $cometa;

  public function __construct($cometa)
  {
    $this->alphabet = [
      'A' => 1,
      'B' => 2,
      'C' => 3,
      'D' => 4,
      'E' => 5,
      'F' => 6,
      'G' => 7,
      'H' => 8,
      'I' => 9,
      'J' => 10,
      'K' => 11,
      'L' => 12,
      'M' => 13,
      'N' => 14,
      'O' => 15,
      'P' => 16,
      'Q' => 17,
      'R' => 18,
      'S' => 19,
      'T' => 20,
      'U' => 21,
      'V' => 22,
      'W' => 23,
      'X' => 24,
      'Y' => 25,
      'Z' => 26
    ];

    $this->cometa = $cometa;
  }

  public function __toString()
  {
    return $this->getCometa();
  }

  private function getCometa()
  {
    $result = '';

    foreach($this->cometa as $key => $value)
    {
      $cLetters = $this->getVal(str_split($key));
      $gLetters = $this->getVal(str_split($value));

      if(($cLetters % 45) == ($gLetters % 45))
      {
        $result .= $key . ' will take ' . $value;
      }
      else
      {
        $result .= $key . ' will NOT take ' . $value;
      }

      $result .= "\n";
    }

    return $result;
  }

  private function getVal($arr)
  {
    $points = 1;

    foreach($arr as $value)
    {
      $points = $points * $this->alphabet[$value];
    }

    return $points;
  }
}

$cometa = [
  'HALLEY'  => 'AMARELO',
  'ENCKE'   => 'VERMELHO',
  'WOLF'    => 'PRETO',
  'KUSHIDA' => 'AZUL'
];

echo new Solution($cometa);
