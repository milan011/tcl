<?php 
	namespace App\Exceptions; 

	class ApiException extends \Exception{ 

		function __construct($msg='', $code=100){ 

			parent::__construct($msg); 
		}
	}

