<?php

return [
    [
        'label' => 'Trang chủ',
        'icon' => 'las la-home iq-arrow-left',
        'route' => 'dashboard'
    ],
    [
        'label' => 'Sách',
        'icon' => 'ri-book-2-line',
        'items' => [
            [
                'label' => 'Danh sách sách',
                'icon' => 'fa fa-book',
                'route' => 'book'
            ],
            [
                'label' => 'Thêm sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'book.create'
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
                'route' => 'category.index'
            ],
            [
                'label' => 'Thêm thể loại sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'category.create'
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
                'route' => 'department.index'
            ],
            [
                'label' => 'Thêm ban',
                'icon' => 'ri-award-fill',
                'route' => 'department.create'
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
                'route' => 'member.index'
            ],
            [
                'label' => 'Thêm thành viên',
                'icon' => 'fas fa-user-plus',
                'route' => 'member.create'
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
                'route' => 'shelf.index'
            ],
            [
                'label' => 'Thêm kệ sách',
                'icon' => 'fas fa-book-medical',
                'route' => 'shelf.create'
            ]
        ]
    ],
];
