<?php

namespace App\Http\Controllers;

use App\Utils\UtilsCustomerAuth;
use Illuminate\Http\Request;

use App\Http\Requests;
use \Exception;

class LoginController extends Controller
{
    const LOGIN_STATUS_SUCCESS = 0;
    const LOGIN_STATUS_FAIL = 1;
    const LOGIN_STATUS_KEY = 'login_status';


    protected function login(Request $request)
    {
        $authDetails = array();
        $authDetails['username'] = $request->get('user');
        $authDetails['password'] = $request->get('pass');
        try {
            $user = UtilsCustomerAuth::check($authDetails);
            if ($user === false) {
                throw new Exception("log failed", self::LOGIN_STATUS_FAIL);
            } else {
                UtilsCustomerAuth::login($user);
                return redirect($this->getRedirectUrl())->with(self::LOGIN_STATUS_KEY, self::LOGIN_STATUS_FAIL);
            }
        } catch (Exception $e) {
            return redirect($this->getRedirectUrl())->with(self::LOGIN_STATUS_KEY, self::LOGIN_STATUS_FAIL);
        }

    }

    protected function logout(Request $request){
        try{
            UtilsCustomerAuth::logout();
        } catch (Exception $e){

        }
        return redirect($this->getRedirectUrl());
    }


}
