<?php
use System\Config\Env;
return 
[

    /*
    |--------------------------------------------------------------------------
    | Email configuration
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'SMTP' => [
        'PHPMailer' => Env::get('PHPMailer'),
        'Host'       => Env::get('Host'),
        'SMTPAuth'   => Env::get('SMTPAuth'),
        'Username'   => Env::get('Username'),
        'Password'   => Env::get('Password'),
        'Port'       => Env::get('Port'),
        'setFrom'    => [
            'mail'  =>  Env::get('mail'),
            'name'  =>  Env::get('name')
        ],
        'SMTPDebug' => Env::get('SMTPDebug'),
        'CharSet' => Env::get('CharSet'),
        'HTML' => Env::get('HTML')
    ]

];