<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Psr\Container\ContainerInterface;
<<<<<<< HEAD
=======
use Symfony\Component\HttpFoundation\Session\SessionInterface;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

/**
 * Sets the session in the request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TestSessionListener extends AbstractTestSessionListener
{
    private $container;

    public function __construct(ContainerInterface $container, array $sessionOptions = [])
    {
        $this->container = $container;
        parent::__construct($sessionOptions);
    }

<<<<<<< HEAD
    protected function getSession()
=======
    protected function getSession(): ?SessionInterface
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        if (!$this->container->has('session')) {
            return null;
        }

        return $this->container->get('session');
    }
}
