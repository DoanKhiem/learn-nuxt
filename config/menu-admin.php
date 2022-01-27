<?php

return [
    [
        'label' => 'Trang chủ',
        'icon' => 'las la-home iq-arrow-left',
        'route' => 'admin.dashboard'
    ],
    [
        'label' => 'Sách',
        'icon' => 'ri-book-2-line',
        'items' => [
            [
                'label' => 'Danh sách sách',
                'icon' => 'fa fa-book',
                'route' => 'admin.book.index'
            ],
            [
                'label' => 'Thêm sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'admin.book.create'
            ]
        ]
    ],
    [
        'label' => 'Thể loại',
        'icon' => 'ri-book-2-line',
        'items' => [
            [
                'label' => 'Danh sách loại sách',
                'icon' => 'fa fa-book',
                'route' => 'admin.category.index'
            ],
            [
                'label' => 'Thêm thể loại sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'admin.category.create'
            ]
        ]
    ],
    [
        'label' => 'Ban',
        'icon' => 'ri-award-line',
        'items' => [
            [
                'label' => 'Danh sách ban',
                'icon' => 'ri-award-fill',
                'route' => 'admin.department.index'
            ],
            [
                'label' => 'Thêm ban',
                'icon' => 'ri-award-fill',
                'route' => 'admin.department.create'
            ]
        ]
    ],
    [
        'label' => 'Thành viên',
        'icon' => 'fas fa-user-friends',
        'items' => [
            [
                'label' => 'Danh sách thành viên',
                'icon' => 'fa fa-users',
                'route' => 'admin.member.index'
            ],
            [
                'label' => 'Thêm thành viên',
                'icon' => 'fas fa-user-plus',
                'route' => 'admin.member.create'
            ]
        ]
    ],
    [
        'label' => 'Kệ sách',
        'icon' => 'ri-book-2-line',
        'items' => [
            [
                'label' => 'Danh sách kệ sách',
                'icon' => 'fa fa-book',
                'route' => 'admin.shelf.index'
            ],
            [
                'label' => 'Thêm kệ sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'admin.shelf.create'
            ]
        ]
    ],
];
