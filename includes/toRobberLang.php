<?php function toRobberLang($string)
{
  $consonants = '/[b-df-hj-np-tv-z]/i';
  $split = preg_split('//u', $string);

  for ($i = 0; $i < count($split); $i++) {
    if (preg_match($consonants, $split[$i])) {
      $join = $split[$i] . "o" . strtolower($split[$i]);
      $split[$i] = $join;
      echo $split[$i] . "<br>";
    }
  }
  return $string = implode($split);
}
