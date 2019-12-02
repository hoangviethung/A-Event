<?php

namespace Faker\Provider;

class Company extends Base
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('Ltd');

    protected static $jobTitleFormat = array(
        '{{word}}',
    );

    /**
     * @example 'Acme Ltd'
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @example 'Job'
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function jobTitle()
    {
        $format = static::randomElement(static::$jobTitleFormat);

        return $this->generator->parse($format);
    }
}
