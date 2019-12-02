<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function close()
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function validateId($sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead($sessionId)
    {
        return '';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function updateTimestamp($sessionId, $data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite($sessionId, $data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy($sessionId)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function gc($maxlifetime)
    {
        return true;
    }
}
