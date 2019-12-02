<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Event;

<<<<<<< HEAD
=======
use Symfony\Component\Debug\Exception\FatalThrowableError;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @deprecated since Symfony 4.3, use ExceptionEvent instead
 */
class GetResponseForExceptionEvent extends RequestEvent
{
<<<<<<< HEAD
    /**
     * The exception object.
     *
     * @var \Exception
     */
    private $exception;

    /**
     * @var bool
     */
    private $allowCustomResponseCode = false;

    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, \Exception $e)
    {
        parent::__construct($kernel, $request, $requestType);

        $this->setException($e);
    }

    /**
     * Returns the thrown exception.
=======
    private $throwable;
    private $exception;
    private $allowCustomResponseCode = false;

    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, \Throwable $e)
    {
        parent::__construct($kernel, $request, $requestType);

        $this->setThrowable($e);
    }

    public function getThrowable(): \Throwable
    {
        return $this->throwable;
    }

    /**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     */
    public function setThrowable(\Throwable $exception): void
    {
        $this->exception = null;
        $this->throwable = $exception;
    }

    /**
     * @deprecated since Symfony 4.4, use getThrowable instead
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @return \Exception The thrown exception
     */
    public function getException()
    {
<<<<<<< HEAD
        return $this->exception;
    }

    /**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
=======
        @trigger_error(sprintf('The "%s()" method is deprecated since Symfony 4.4, use "getThrowable()" instead.', __METHOD__), E_USER_DEPRECATED);

        return $this->exception ?? $this->exception = $this->throwable instanceof \Exception ? $this->throwable : new FatalThrowableError($this->throwable);
    }

    /**
     * @deprecated since Symfony 4.4, use setThrowable instead
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @param \Exception $exception The thrown exception
     */
    public function setException(\Exception $exception)
    {
<<<<<<< HEAD
        $this->exception = $exception;
=======
        @trigger_error(sprintf('The "%s()" method is deprecated since Symfony 4.4, use "setThrowable()" instead.', __METHOD__), E_USER_DEPRECATED);

        $this->throwable = $this->exception = $exception;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    }

    /**
     * Mark the event as allowing a custom response code.
     */
    public function allowCustomResponseCode()
    {
        $this->allowCustomResponseCode = true;
    }

    /**
     * Returns true if the event allows a custom response code.
     *
     * @return bool
     */
    public function isAllowingCustomResponseCode()
    {
        return $this->allowCustomResponseCode;
    }
}
