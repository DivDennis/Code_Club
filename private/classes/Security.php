
<?php

/**
 * provide functions for application security
 */
  class Security{

	/**
	 * generate a sha256 hash
	 * @return hashed password
	 */
	public static function generateHash($password, $salt){
        $hash = hash_hmac("sha256", $password, $salt);
        return $hash;
	}


	/**
	 * This will generate a 256 bit hex value
	 * @return randomly gnerated salt
	 */
	public static function generateSalt(){
		$characters = '0123456789abcdef';
		$length = 10; 

		$string = '';
		for ($max = mb_strlen($characters) - 1, $i = 0; $i < $length; ++ $i)
		{
		$string .= mb_substr($characters, mt_rand(0, $max), 1);
		}
		return $string;
	}

}
?>