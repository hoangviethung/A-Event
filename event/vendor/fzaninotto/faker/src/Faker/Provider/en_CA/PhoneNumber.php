<?php

namespace Faker\Provider\en_CA;

<<<<<<< HEAD
class PhoneNumber extends \Faker\Provider\PhoneNumber
=======
class PhoneNumber extends \Faker\Provider\en_US\PhoneNumber
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
{
    protected static $formats = array(
        '%##-###-####',
        '%##.###.####',
        '%## ### ####',
        '(%##) ###-####',
        '1-%##-###-####',
        '1 (%##) ###-####',
        '+1 (%##) ###-####',
        '%##-###-#### x###',
        '(%##) ###-#### x###',
    );
}
