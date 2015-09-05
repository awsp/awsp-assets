<?php

funciton validation($cardValue) {
  $creditCardNumber = $value;

  // Get the first digit
  $firstNumber = substr($creditCardNumber, 0, 1);

  // Make sure it is the correct amount of digits. Account for dashes being present.
  switch ($firstNumber) {

      case 3:
          if ( ! preg_match('/^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/', $creditCardNumber))
          {
              return false;
          }
          break;
      case 4:
          if ( ! preg_match('/^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $creditCardNumber))
          {
              return false;
          }
          break;
      case 5:
          if ( ! preg_match('/^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $creditCardNumber))
          {
              return false;
          }
          break;
      case 6:
          if ( ! preg_match('/^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $creditCardNumber))
          {
              return false;
          }
          break;
      default:
          return false;

  }

  // Here's where we use the Luhn Algorithm
  $creditCardNumber = str_replace('-', '', $creditCardNumber);
  $map = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
  $sum = 0;
  $last = strlen($creditCardNumber) - 1;
  for ($i = 0; $i <= $last; $i++) {
      $sum += $map[$creditCardNumber[$last - $i] + ($i & 1) * 10];
  }
  if ($sum % 10 != 0) {
      return false;
  }

  // If we made it this far the credit card number is in a valid format
  return true;
}
