<?php

namespace App\Utils;
use Illuminate\Support\Facades\DB;

class UtilsCustomerAuth
{


    /**
     * Check the username and password
     *
     * @param array [username, password] $authDetails
     * @return bool|array
     */
    public static function check($authDetails)
    {
        $password = md5($authDetails['password']);
        $user = DB::connection('mysql_user')->select("
          SELECT * FROM ky_member WHERE member_name = ? OR member_email = ? LIMIT 1
          ", [$authDetails['username'], $authDetails['username']]);
        if (count($user) > 0 && $user[0]->member_passwd == $password) {
            return $user[0];
        } else {
            return false;
        }
    }

    /**
     * Set session with user array
     *
     * @param array $user
     */
    public static function login($user)
    {
        session_start();
        $_SESSION['user_id'] = $user->member_id;
        $_SESSION['user_name'] = $user->member_name;
        $_SESSION['user_email'] = $user->member_email;
    }

    /**
     * Logout and destroy session
     */
    public static function logout()
    {
        session_start();
        if ($_SESSION['user_id']) {
            $_SESSION = array();
        }
    }

    /**
     * Get user ID
     *
     * @return int
     */
    public static function getUserId()
    {
        session_start();
        if (isset($_SESSION['user_id'])) {
            return intval($_SESSION['user_id']);
        }
    }

    /**
     * Get username
     *
     * @return string|bool
     */
    public static function getUserName(){
        session_start();
        if (isset($_SESSION['user_name'])) {
            return $_SESSION['user_name'];
        } else {
            return false;
        }
    }

    /**
     * Get user email
     *
     * @return string
     */
    public static function getUserEmail(){
        session_start();
        if (isset($_SESSION['user_email'])) {
            return intval($_SESSION['user_email']);
        }
    }
}