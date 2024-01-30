<?php 

// string				Required. The string to be calculated
// raw					Optional. Specifies hex or binary output format:
// 							TRUE - Raw 16 character binary format
// 							FALSE - Default. 32 character hex number


// all hasing algorithem

// MD2
// MD5
// SHA-1
// SHA-224
// SHA-256
// SHA-384
// SHA-512




// The md5() function calculates the MD5 hash of a string.

// The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.

// From RFC 1321 - The MD5 Message-Digest Algorithm: "The MD5 message-digest algorithm takes as input a message 	of arbitrary length and produces as output a 128-bit "fingerprint" or "message digest" of the input. The 	MD5 algorithm is intended for digital signature applications, where a large file must be "compressed" in a secure manner before being encrypted with a private (secret) key under a public-key cryptosystem such as RSA."

// To calculate the MD5 hash of a file, use the md5_file() function.



	$str = "Hello world"; 
		echo "The string: ".$str."<br>"; 
		echo "TRUE - Raw 16 character binary format:   ".md5($str, TRUE)."<br>"; 
		echo "FALSE - 32 character hex number:   ".md5($str, FALSE)."<br>"; 
 ?>