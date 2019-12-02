<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD
\Symfony\Component\Translation\PluralizationRules::set(function ($number) {
    return $number === 1 ? 0 : 1;
}, 'lo');
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

/*
 * Authors:
 * - François B
 * - ryanhart2
 */
return [
    'year' => ':count ປີ',
    'y' => ':count ປີ',
    'month' => ':count ເດືອນ',
    'm' => ':count ດ. ',
    'week' => ':count ອາທິດ',
    'w' => ':count ອທ. ',
    'day' => ':count ມື້',
    'd' => ':count ມື້',
    'hour' => ':count ຊົ່ວໂມງ',
    'h' => ':count ຊມ. ',
    'minute' => ':count ນາທີ',
    'min' => ':count ນທ. ',
<<<<<<< HEAD
    'second' => 'ບໍ່ເທົ່າໃດວິນາທີ|:count ວິນາທີ',
=======
    'second' => '{1}ບໍ່ເທົ່າໃດວິນາທີ|]1,Inf[:count ວິນາທີ',
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    's' => ':count ວິ. ',
    'ago' => ':timeຜ່ານມາ',
    'from_now' => 'ອີກ :time',
    'diff_yesterday' => 'ມື້ວານນີ້ເວລາ',
    'diff_tomorrow' => 'ມື້ອື່ນເວລາ',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'ວັນdddd D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[ມື້ນີ້ເວລາ] LT',
        'nextDay' => '[ມື້ອື່ນເວລາ] LT',
        'nextWeek' => '[ວັນ]dddd[ໜ້າເວລາ] LT',
        'lastDay' => '[ມື້ວານນີ້ເວລາ] LT',
        'lastWeek' => '[ວັນ]dddd[ແລ້ວນີ້ເວລາ] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => 'ທີ່:number',
    'meridiem' => ['ຕອນເຊົ້າ', 'ຕອນແລງ'],
    'months' => ['ມັງກອນ', 'ກຸມພາ', 'ມີນາ', 'ເມສາ', 'ພຶດສະພາ', 'ມິຖຸນາ', 'ກໍລະກົດ', 'ສິງຫາ', 'ກັນຍາ', 'ຕຸລາ', 'ພະຈິກ', 'ທັນວາ'],
    'months_short' => ['ມັງກອນ', 'ກຸມພາ', 'ມີນາ', 'ເມສາ', 'ພຶດສະພາ', 'ມິຖຸນາ', 'ກໍລະກົດ', 'ສິງຫາ', 'ກັນຍາ', 'ຕຸລາ', 'ພະຈິກ', 'ທັນວາ'],
    'weekdays' => ['ອາທິດ', 'ຈັນ', 'ອັງຄານ', 'ພຸດ', 'ພະຫັດ', 'ສຸກ', 'ເສົາ'],
    'weekdays_short' => ['ທິດ', 'ຈັນ', 'ອັງຄານ', 'ພຸດ', 'ພະຫັດ', 'ສຸກ', 'ເສົາ'],
    'weekdays_min' => ['ທ', 'ຈ', 'ອຄ', 'ພ', 'ພຫ', 'ສກ', 'ສ'],
    'list' => [', ', 'ແລະ '],
];
