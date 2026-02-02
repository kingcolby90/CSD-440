<!DOCTYPE html>
<html>

<head>
  <title> Customer Array Search</title>
  <meta charset='utf-8'>
</head>

<body>

<?php

  $newLine = "<br />";
  $customers = array(
      array("first" => "Razor",      "last" => "Ramone",     "age" => 30, "phone" => "111-2001"),
      array("first" => "Stone Cold", "last" => "Austin",     "age" => 31, "phone" => "111-2002"),
      array("first" => "The",        "last" => "Undertaker", "age" => 32, "phone" => "111-2003"),
      array("first" => "Shawn",      "last" => "Michaels",   "age" => 33, "phone" => "111-2004"),
      array("first" => "Bret",       "last" => "Hart",       "age" => 34, "phone" => "111-2005"),
      array("first" => "Macho Man",  "last" => "Savage",     "age" => 35, "phone" => "111-2006"),
      array("first" => "Big Daddy",  "last" => "Diesel",     "age" => 36, "phone" => "111-2007"),
      array("first" => "The",        "last" => "Rock",       "age" => 37, "phone" => "111-2008"),
      array("first" => "Triple",     "last" => "H",          "age" => 38, "phone" => "111-2009"),
      array("first" => "Mankind",    "last" => "Foley",      "age" => 39, "phone" => "111-2010")
  );

  $arrlength = count($customers);

  echo("All Customers (Wrestlers):" . $newLine);
# customer display
  for($x = 0; $x < $arrlength; $x++) {
      echo $customers[$x]["first"] . " " . $customers[$x]["last"] .
           " | Age: " . $customers[$x]["age"] .
           " | Phone: " . $customers[$x]["phone"] . $newLine;
  }

  echo($newLine . "Search by Last Name: Rock" . $newLine);
# last name search
  for($x = 0; $x < $arrlength; $x++) {
      if($customers[$x]["last"] == "Rock"){
          echo $customers[$x]["first"] . " " . $customers[$x]["last"] .
               " | Age: " . $customers[$x]["age"] .
               " | Phone: " . $customers[$x]["phone"] . $newLine;
      }
  }

  echo($newLine . "Wrestlers age:" . $newLine);
# age search
  for($x = 0; $x < $arrlength; $x++) {
      if($customers[$x]["age"] > 35){
          echo $customers[$x]["first"] . " " . $customers[$x]["last"] .
               " | Age: " . $customers[$x]["age"] .
               " | Phone: " . $customers[$x]["phone"] . $newLine;
      }
  }

  echo($newLine . "Search by Phone Number: " . $newLine);

  # phone number search
  for($x = 0; $x < $arrlength; $x++) {
      if($customers[$x]["phone"] == "111-2004"){
          echo $customers[$x]["first"] . " " . $customers[$x]["last"] .
               " | Age: " . $customers[$x]["age"] .
               " | Phone: " . $customers[$x]["phone"] . $newLine;
      }
  }

?>

</body>
</html>

