<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 上午10:29
 */

namespace Hanccc\Exceptions;


class RequestException extends \Exception
{

    public function __construct($message, $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }


    public function __toString()
    {
        return $this->message;
    }

}