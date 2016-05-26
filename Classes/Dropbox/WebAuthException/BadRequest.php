<?php
namespace SFroemken\FalDropbox\Dropbox\WebAuthException;

/**
 * Thrown if the redirect URL was missing parameters or if the given parameters were not valid.
 *
 * The recommended action is to show an HTTP 400 error page.
 */
class BadRequest extends \Exception
{
    /**
     * @param string $message
     *
     * @internal
     */
    function __construct($message)
    {
        parent::__construct($message);
    }
}