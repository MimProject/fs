<?php


namespace MimProject\Fs\Exception;


use RuntimeException;
use Throwable;

/**
 * Class IOException
 *
 * @package MimProject\Fs\Exception
 */
class IOException extends RuntimeException implements IOExceptionInterface
{
    /**
     * @var string|null
     */
    private $path;

    /**
     * IOException constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param Throwable|null $previous
     * @param string|null     $path
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null, string $path = null)
    {
        $this->path = $path;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
}