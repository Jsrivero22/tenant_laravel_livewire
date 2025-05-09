<?php

namespace App\Helpers\admin\menu;

class MenuHelper
{
    public static function getMenuItems()
    {
        $menu = [
            'logo' => [
                'dark' => asset('admin/images/logo/dark.png'),
                'light' => asset('admin/images/logo/01.png'),
                'link' => route('dashboard'),
            ],

            'items' => [
                [
                    'type' => 'title',
                    'title' => 'Dashboard',
                    // 'link' => route('dashboard'),
                ],
                [
                    'type' => 'item',
                    'title' => 'Dashboard',
                    'icon' => 'ti ti-home',
                    // 'badge' => '4',
                    'link' => route('dashboard'),
                    // 'subItems' => [
                    //     ['title' => 'Dashboard', 'link' => route('dashboard')],
                    // ],
                ],
                [
                    'type' => 'title',
                    'title' => 'Multitenancy',
                ],
                [
                    'type' => 'item',
                    'title' => 'Tenants',
                    'icon' => 'ti ti-building',
                    'link' => route('profile.edit'),
                ],

                [
                    'type' => 'title',
                    'title' => 'Settings',
                ],
                [
                    'type' => 'item',
                    'title' => 'Profile',
                    'icon' => 'ph-duotone ph-squares-four',
                    'link' => route('profile.edit'),
                ],
                [
                    'type' => 'item',
                    'title' => 'Roles',
                    'icon' => 'ph-duotone ph-user-circle-gear',
                    'link' => route('profile.edit'),
                    'subItems' => [
                        ['title' => 'Roles', 'link' => route('profile.edit')],
                        ['title' => 'Crear Role', 'link' => route('profile.edit')],
                    ],
                ],
            ]
        ];

        return $menu;
    }
}
