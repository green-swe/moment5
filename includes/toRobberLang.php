<?php function toRobberLang($string)
{
  $vowels = array('a', 'e', 'i', 'o', 'u', 'y', 'å', 'ä', 'ö');
  $specialCharacters = '/[\'^£$%&*()}{@#~?!><>,|=_+¬-]/';
  $split = preg_split('//u', $string);
  //preg splits adds empty data at the start and end of the array,
  //these needs to be removed
  array_shift($split);
  array_pop($split);  

  for ($i = 0; $i < count($split); $i++) {
    
    if (!in_array($split[$i], $vowels) && !ctype_space($split[$i]) && !preg_match($specialCharacters, $split[$i])) {
      $join = $split[$i] . "o" . strtolower($split[$i]);
      $split[$i] = $join;
      echo $split[$i] . "<br>";
    }
  }
  return $string = implode($split);
}
