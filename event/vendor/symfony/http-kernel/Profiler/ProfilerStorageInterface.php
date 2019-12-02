<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Profiler;

/**
 * ProfilerStorageInterface.
 *
 * This interface exists for historical reasons. The only supported
 * implementation is FileProfilerStorage.
 *
 * As the profiler must only be used on non-production servers, the file storage
 * is more than enough and no other implementations will ever be supported.
 *
 * @internal since 4.2
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProfilerStorageInterface
{
    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param string   $ip     The IP
     * @param string   $url    The URL
     * @param string   $limit  The maximum number of tokens to return
     * @param string   $method The request method
     * @param int|null $start  The start date to search from
     * @param int|null $end    The end date to search to
     *
     * @return array An array of tokens
     */
<<<<<<< HEAD
    public function find($ip, $url, $limit, $method, $start = null, $end = null);
=======
    public function find($ip, $url, $limit, $method, $start = null, $end = null): array;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Reads data associated with the given token.
     *
     * The method returns false if the token does not exist in the storage.
     *
     * @param string $token A token
     *
     * @return Profile|null The profile associated with token
     */
<<<<<<< HEAD
    public function read($token);
=======
    public function read($token): ?Profile;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Saves a Profile.
     *
     * @return bool Write operation successful
     */
<<<<<<< HEAD
    public function write(Profile $profile);
=======
    public function write(Profile $profile): bool;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Purges all data from the database.
     */
    public function purge();
}
