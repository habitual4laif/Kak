<?php


class Calculate {

    public $digitOne;
    public $digitTwo;
    public $calc;

    public function __construct($digitOne, $digitTwo, $calc)
    {
      $this->digitOne = $digitOne;
      $this->digitTwo = $digitTwo;
      $this->calc = $calc;
    }

    public function operation()
    {
      switch ($this->calc) {
        case 'add':
          $result = $this->digitOne + $this->digitTwo;
          break;
        case 'sub':
          $result = $this->digitOne - $this->digitTwo;
          break;
        case 'mul':
          $result = $this->digitOne * $this->digitTwo;
          break;
        case 'div':
          $result = $this->digitOne / $this->digitTwo;
          break;
        default:
          $result = "Error";
          break;
      }
      return $result;
    }

}
