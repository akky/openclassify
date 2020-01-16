<?php namespace Visiosoft\ProfileModule\Profile\Password;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\UsersModule\User\UserModel;


class PasswordFormBuilder extends FormBuilder
{
    protected $fields = [
        'new_password' => [
            'type' => 'anomaly.field_type.text',
            'required' => true,
            'config' => [
                'type' => 'password'
            ],
        ],
        're_new_password' => [
            'type' => 'anomaly.field_type.text',
            'required' => true,
            'config' => [
                'type' => 'password'
            ],
        ],
        'confirm_password' => [
            'type' => 'anomaly.field_type.boolean',
        ],
    ];

    protected $actions = [
        'update' => [
            'text' => 'visiosoft.module.profile::button.update_password'
        ],
    ];
}