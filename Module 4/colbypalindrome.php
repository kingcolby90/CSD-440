<!DOCTYPE html>
<html lang='en'>

  <head>
    <title> Colby Palindrome List</title>
    <meta charset='utf-8'>
  </head>

  <body>

    <?php

      $breakLine = '<br /><br />';

      function isPalindrome($string) {
        $clean = strtolower(str_replace(' ', '', $string));
        $length = strlen($clean);

        for ($i = 0; $i < $length / 2; $i++) {
          if ($clean[$i] !== $clean[$length - 1 - $i]) {
            return 'is not a palindrome.';
          }
        }
        return 'is a palindrome.';
      }

      $list = [
        'racecar',   // palindrome
        'radar',     // palindrome
        '11511',     // palindrome
        'apple',     // not
        'red',       // not
        '1234'       // not
      ];

      echo 'Testing a list of strings for palindrome status:' . $breakLine;

      foreach ($list as $item) {
        echo $item . ' ' . isPalindrome($item) . $breakLine;
      }

    ?>

  </body>

</html>





