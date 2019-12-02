<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * DumperInterface is the interface implemented by all translation dumpers.
 * There is no common option.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
interface DumperInterface
{
    /**
     * Dumps the message catalogue.
     *
<<<<<<< HEAD
     * @param MessageCatalogue $messages The message catalogue
     * @param array            $options  Options that are used by the dumper
=======
     * @param array $options Options that are used by the dumper
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function dump(MessageCatalogue $messages, $options = []);
}
