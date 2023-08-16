<?php

namespace VendorName\Skeleton\Exceptions;

use Exception;
use Throwable;


/**
* Class SkeletonException
* @package VendorName\Skeleton\Exceptions
*/
class SkeletonException extends Exception
{
    /**
     * CoreException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    
}
