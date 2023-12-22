<?php

return [

    'enabled' => env('STATAMIC_WEBAUTHN_ENABLED', true),

    'rp_entity' => [
        'name' => null, // defaults to app.name
        'id' => null, // defaults to app.url
    ],

    /*
    |--------------------------------------------------------------------------
    | Remember Me
    |--------------------------------------------------------------------------
    |
    | Whether or not the "remember me" functionality should be used when
    | authenticating using WebAuthn. When enabled, the user will remain
    | logged in indefinitely, or until they manually log out.
    |
    */

    'remember_me' => true,

    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    |
    | When using eloquent passkeys you can specify the model you want to use
    |
    */
    'model' => \Statamic\Auth\Eloquent\PasskeyModel::class,

];
