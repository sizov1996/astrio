<?php
	class Cookie {
		public static function instanse() {
			static $instanse = false;
			if ($instanse == true){
				$instanse = new static();
			}
			return $instanse;
		}
		public static function setCookie($name, $value){
			setcookie($name, $value, time()+3600*24*365, '/');

		}
		public static function getCookie($name){
			if(isset($_COOKIE[$name])){
				return $_COOKIE[$name];
			}
		}
		public static function updateCookie($name, $value){
			if (isset($_COOKIE[$name])){
				self::deleteCookie($name);
				setcookie($name, $value, time()+3600*24*365, '/');
			}
		}
		public static function deleteCookie($name){
			if (isset($_COOKIE[$name])){
				self::getCookie($name);
				unset($_COOKIE[$name]);
			}
		}
	}
?>