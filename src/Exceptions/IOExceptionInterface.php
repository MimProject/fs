<?php


namespace MimProject\Fs\Exception;

/**
 * Interface IOExceptionInterface
 *
 * @package MimProject\Fs\Exception
 */
interface IOExceptionInterface extends ExceptionInterface
{

    /**
     * @return string|null The path
     */
    public function getPath(): ?string;

}