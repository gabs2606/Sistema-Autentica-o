<?php

class Validator {

    public function __construct() {
    
    }
    public function validateEmail(string $email): bool {
        if (empty($email)) {
            return false;
        }
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public function validatePassword(string $password): bool {
        if (empty($password)) {
            return false;
        } 

        if (strlen($password) < 8) {
            return false;
        }

        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }   
        return true;
    }

    public function emailRepeated($email, $users): bool {
        foreach ($users as $user) {
            if ($user->getEmail() === $email) {
                return true;
            }
        }
        return false;

    }
    public function validateNewPassword(string $newPassword): bool
{
    return $this->validatePassword($newPassword);
}
}