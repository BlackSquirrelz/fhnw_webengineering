<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:49
 */

namespace validator;

use domain\User;


class UserValidator
{
    private $valid = true;
    private $firstNameError = null;
    private $lastNameError = null;
    private $usernameError = null;
    private $emailError = null;
    private $passwordError = null;

    public function __construct(User $user = null)
    {
        if (!is_null($user)) {
            $this->validate($user);
        }
    }

    public function validate(User $user)
    {
        if (!is_null($user)) {
            if (empty($user->getFirstName())) {
                $this->firstNameError = 'Please enter your first name';
                $this->valid = false;
            }

            if (empty($user->getLastName())) {
                $this->lastNameError = 'Please enter your last name';
                $this->valid = false;
            }

            if (empty($user->getUserName())) {
                $this->usernameError = 'Please enter a username name';
                $this->valid = false;
            }

            if (empty($user->getEmail())) {
                $this->emailError = 'Please enter an email address';
                $this->valid = false;
            } else if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $this->emailError = 'Please enter a valid email address';
                $this->valid = false;
            }

            if (empty($user->getPassword())) {
                $this->passwordError = 'Please enter a password';
                $this->valid = false;
            }
        } else {
            $this->valid = false;
        }
        return $this->valid;

    }

    public function isValid()
    {
        return $this->valid;
    }

    public function isFirstNameError()
    {
    return isset($this->firstNameError);
    }

    public function getFirstNameError()
    {
        return $this->firstNameError;
    }

    public function isLastNameError()
    {
        return isset($this->lastNameError);
    }

    public function getLastNameError()
    {
        return $this->lastNameError;
    }
    public function isUsernameError()
    {
        return isset($this->usernameError);
    }

    public function getUsernameError()
    {
        return $this->usernameError;
    }

    public function isEmailError()
    {
        return isset($this->emailError);
    }

    public function getEmailError()
    {
        return $this->emailError;
    }

    public function setUsernameError($usernameError)
    {
        $this->usernameError = $usernameError;
        $this->valid = false;
    }

    public function setEmailError($emailError)
    {
        $this->emailError = $emailError;
        $this->valid = false;
    }

    public function isPasswordError()
    {
        return isset($this->passwordError);
    }

    public function getPasswordError()
    {
        return $this->passwordError;
    }
}