<?php
namespace Riskio\EventScheduler\Exception;

use Exception;

class NotFoundEventOccurenceException
    extends \RuntimeException
    implements ExceptionInterface
{
    public static function create(Exception $previous = null) : self
    {
        return new self('Event occurence not found', 0, $previous);
    }
}
