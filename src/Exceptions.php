<?php

/*
 * PHP-Auth (https://github.com/delight-im/PHP-Auth)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

namespace Delight\Auth;

class AuthException extends \Exception 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('AuthException'));
    }
    
    public function setMessage(string $message) 
    {
        $this->message = $message;
    }
}

class UnknownIdException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('UnknownIdException'));
    }
}

class InvalidEmailException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('InvalidEmailException'));
    }
}

class UnknownUsernameException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('UnknownUsernameException'));
    }
}

class InvalidPasswordException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('InvalidPasswordException'));
    }
}

class EmailNotVerifiedException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('EmailNotVerifiedException'));
    }
}

class UserAlreadyExistsException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('UserAlreadyExistsException'));
    }
}

class NotLoggedInException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('NotLoggedInException'));
    }
}

class InvalidSelectorTokenPairException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('InvalidSelectorTokenPairException'));
    }
}

class TokenExpiredException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('TokenExpiredException'));
    }
}

class TooManyRequestsException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('TooManyRequestsException'));
    }
}

class DuplicateUsernameException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('DuplicateUsernameException'));
    }
}

class AmbiguousUsernameException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('AmbiguousUsernameException'));
    }
}

class AttemptCancelledException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang(''));
    }
}

class ResetDisabledException extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('ResetDisabledException'));
    }
}

class ConfirmationRequestNotFound extends AuthException 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('ConfirmationRequestNotFound'));
    }
}


class AuthError extends \Exception
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('AuthError'));
    }

    public function setMessage(string $message) 
    {
        $this->message = $message;
    }
}

class DatabaseError extends AuthError 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('DatabaseError'));
    }
}

class MissingCallbackError extends AuthError 
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('MissingCallbackError'));
    }
}

class HeadersAlreadySentError extends AuthError
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('HeadersAlreadySentError'));
    }
}

class EmailOrUsernameRequiredError extends AuthError
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) 
    {
        parent::__construct($message, $code, $previous);
        $this->setMessage(lang('EmailOrUsernameRequiredError'));
    }
}
