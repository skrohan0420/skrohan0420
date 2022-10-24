<?php 

// string				Required. Specifies the string to check
// return				Optional. Specifies the return value of the str_word_count() function.
//						Possible values:	0 - Default. Returns the number of words found
// 											1 - Returns an array with the words from the string
// 											2 - Returns an array where the key is the position of the word in the string, and value is the actual word
// 				
// char	Optional 		Specifies special characters to be considered as words.


echo str_word_count("Hello world!");
echo '<br>';
print_r(str_word_count("Hello world & good morning!",1));
echo  '<br>';
print_r(str_word_count("Hello world & good morning!",2,"&"));


 ?>