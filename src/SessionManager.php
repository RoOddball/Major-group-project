<?php


class SessionManager
{
    public function isLoggedIn()
    {
        if (isset($_SESSION['usernameEntered'])) {
            return true;
        } else {
            return false;
        }


    }

    public function storeUsername($username)
    {
        $_SESSION['usernameEntered'] = $username;
    }

    public function storeIsAdmin($isAdmin)
    {
        $_SESSION['isAdmin'] = $isAdmin;
    }

    public function usernameFromSession()
    {
        if (isset($_SESSION['usernameEntered'])) {
            return $_SESSION['usernameEntered'];
        } else {
            return false;
        }
    }

    public function isAdminFromSession()
    {
        if (isset($_SESSION['username'])) {
            return $_SESSION['isAdmin'];
        } else {
            return false;
        }

    }
}