<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session;

use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
<<<<<<< HEAD
     * @return bool True if session started
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @throws \RuntimeException if session fails to start
     */
    public function start();

    /**
     * Returns the session ID.
     *
<<<<<<< HEAD
     * @return string The session ID
=======
     * @return string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function getId();

    /**
     * Sets the session ID.
     *
     * @param string $id
     */
    public function setId($id);

    /**
     * Returns the session name.
     *
<<<<<<< HEAD
     * @return mixed The session name
=======
     * @return string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function getName();

    /**
     * Sets the session name.
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
<<<<<<< HEAD
     * @return bool True if session invalidated, false if error
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function invalidate($lifetime = null);

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool $destroy  Whether to delete the old session or leave it to garbage collection
     * @param int  $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
<<<<<<< HEAD
     * @return bool True if session migrated, false if error
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function migrate($destroy = false, $lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save();

    /**
     * Checks if an attribute is defined.
     *
     * @param string $name The attribute name
     *
<<<<<<< HEAD
     * @return bool true if the attribute is defined, false otherwise
=======
     * @return bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function has($name);

    /**
     * Returns an attribute.
     *
     * @param string $name    The attribute name
     * @param mixed  $default The default value if not found
     *
     * @return mixed
     */
    public function get($name, $default = null);

    /**
     * Sets an attribute.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function set($name, $value);

    /**
     * Returns attributes.
     *
<<<<<<< HEAD
     * @return array Attributes
=======
     * @return array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function all();

    /**
     * Sets attributes.
<<<<<<< HEAD
     *
     * @param array $attributes Attributes
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function replace(array $attributes);

    /**
     * Removes an attribute.
     *
     * @param string $name
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove($name);

    /**
     * Clears all attributes.
     */
    public function clear();

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Registers a SessionBagInterface with the session.
     */
    public function registerBag(SessionBagInterface $bag);

    /**
     * Gets a bag instance by name.
     *
     * @param string $name
     *
     * @return SessionBagInterface
     */
    public function getBag($name);

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag();
}
