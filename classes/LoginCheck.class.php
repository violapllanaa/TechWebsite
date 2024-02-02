<?php
class LoginCheck {

public function isLogin(){
	if (isset($_SESSION['user_type'])) {
		return true;
	}else{
		return false;
	}
}

}
