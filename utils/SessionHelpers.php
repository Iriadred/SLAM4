<?php


namespace utils;


class SessionHelpers
{
    static function init()
    {
        session_start();
    }

    static function login($user)
    {
        $_SESSION['login'] = $user;
    }

    static function logout()
    {
        unset($_SESSION['login']);
    }

    static function getConnected()
    {
        if (SessionHelpers::isLogin()) {
            return $_SESSION['login'];
        } else {
            return array();
        }
    }

    static function isLogin()
    {
        return isset($_SESSION['login']);
    }

}