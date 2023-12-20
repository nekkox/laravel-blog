@php

    enum TokenType: string {
           case _return = "return";
           case semi = "semi";
           case literal_int = "literal_int";
       };

   Class Tokens
   {
       public TokenType $type = TokenType::_return;
       public ?string $value = "return";

       public function __toString():string
       {
         return "Token type is: " . $this->type->name . " " . $this->value;
       }
   }




  $str1 = "return 70;";
  $length = strlen($str1);
  $string = [];
 $digit = [];
 $tokens = [];

  for($i = 0; $i < $length; $i++) {
    if(ctype_alpha($str1[$i])){

        while (ctype_alnum($str1[$i])){
            $string[]=$str1[$i];
            $i++;
        }
        $i--;
       $string =  join($string);
        if($string === "return"){
            $token = new Tokens();
            $token->type = TokenType::_return;
            $tokens[]=$token;
        }
    }
    elseif (ctype_space($str1[$i])){
        continue;
    }
    elseif (ctype_digit($str1[$i])){
        $digit[] = $str1[$i];
    }
  }

 echo $tokens[0];
//echo join($string) . "<br>";
  //echo join($digit) . "<br>";

@endphp
