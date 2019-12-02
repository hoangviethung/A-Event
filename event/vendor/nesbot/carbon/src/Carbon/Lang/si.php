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
}, 'si');
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

/*
 * Authors:
 * - François B
 * - Serhan Apaydın
 * - JD Isaacks
 */
return [
<<<<<<< HEAD
    'year' => 'වසර|වසර :count',
    'month' => 'මාසය|මාස :count',
    'week' => 'සතියක්|සති :count යි',
    'day' => 'දිනය|දින :count',
    'hour' => 'පැය|පැය :count',
    'minute' => 'මිනිත්තුව|මිනිත්තු :count',
    'second' => 'තත්පර කිහිපය|තත්පර :count',
=======
    'year' => '{1}වසර|වසර :count',
    'month' => '{1}මාසය|මාස :count',
    'week' => '{1}සතියක්|සති :count යි',
    'day' => '{1}දිනය|දින :count',
    'hour' => '{1}පැය|පැය :count',
    'minute' => '{1}මිනිත්තුව|මිනිත්තු :count',
    'second' => '{1}තත්පර කිහිපය|තත්පර :count',
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    'ago' => ':timeකට පෙර',
    'from_now' => ':timeකින්',
    'diff_yesterday' => 'ඊයේ',
    'diff_tomorrow' => 'හෙට',
    'formats' => [
        'LT' => 'a h:mm',
        'LTS' => 'a h:mm:ss',
        'L' => 'YYYY/MM/DD',
        'LL' => 'YYYY MMMM D',
        'LLL' => 'YYYY MMMM D, a h:mm',
        'LLLL' => 'YYYY MMMM D [වැනි] dddd, a h:mm:ss',
    ],
    'calendar' => [
        'sameDay' => '[අද] LT[ට]',
        'nextDay' => '[හෙට] LT[ට]',
        'nextWeek' => 'dddd LT[ට]',
        'lastDay' => '[ඊයේ] LT[ට]',
        'lastWeek' => '[පසුගිය] dddd LT[ට]',
        'sameElse' => 'L',
    ],
    'ordinal' => ':number වැනි',
    'meridiem' => ['පෙර වරු', 'පස් වරු', 'පෙ.ව.', 'ප.ව.'],
    'months' => ['ජනවාරි', 'පෙබරවාරි', 'මාර්තු', 'අප්‍රේල්', 'මැයි', 'ජූනි', 'ජූලි', 'අගෝස්තු', 'සැප්තැම්බර්', 'ඔක්තෝබර්', 'නොවැම්බර්', 'දෙසැම්බර්'],
    'months_short' => ['ජන', 'පෙබ', 'මාර්', 'අප්', 'මැයි', 'ජූනි', 'ජූලි', 'අගෝ', 'සැප්', 'ඔක්', 'නොවැ', 'දෙසැ'],
    'weekdays' => ['ඉරිදා', 'සඳුදා', 'අඟහරුවාදා', 'බදාදා', 'බ්‍රහස්පතින්දා', 'සිකුරාදා', 'සෙනසුරාදා'],
    'weekdays_short' => ['ඉරි', 'සඳු', 'අඟ', 'බදා', 'බ්‍රහ', 'සිකු', 'සෙන'],
    'weekdays_min' => ['ඉ', 'ස', 'අ', 'බ', 'බ්‍ර', 'සි', 'සෙ'],
    'first_day_of_week' => 1,
];
