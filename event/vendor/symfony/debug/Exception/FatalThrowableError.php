<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Debug\Exception;

<<<<<<< HEAD
=======
@trigger_error(sprintf('The "%s" class is deprecated since Symfony 4.4.', FatalThrowableError::class), E_USER_DEPRECATED);

>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
/**
 * Fatal Throwable Error.
 *
 * @author Nicolas Grekas <p@tchwork.com>
<<<<<<< HEAD
=======
 *
 * @deprecated since Symfony 4.4
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
class FatalThrowableError extends FatalErrorException
{
    private $originalClassName;

    public function __construct(\Throwable $e)
    {
        $this->originalClassName = \get_class($e);

        if ($e instanceof \ParseError) {
            $severity = E_PARSE;
        } elseif ($e instanceof \TypeError) {
            $severity = E_RECOVERABLE_ERROR;
        } else {
            $severity = E_ERROR;
        }

        \ErrorException::__construct(
            $e->getMessage(),
            $e->getCode(),
            $severity,
            $e->getFile(),
            $e->getLine(),
            $e->getPrevious()
        );

        $this->setTrace($e->getTrace());
    }

    public function getOriginalClassName(): string
    {
        return $this->originalClassName;
    }
}
