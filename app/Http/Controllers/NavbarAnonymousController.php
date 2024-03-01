<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarAnonymousController extends Controller
{
    public function showNavbar()
    {
        $menuData = [
            [
                "title" => "Home",
                "icon" => "home",
                "items" => [
                    [
                        "title" => "Sub Home",
                        "icon" => "icon home",
                        "url" => "/subhome"
                    ],
                    [
                        "title" => "Sub Home 2",
                        "icon" => "icon sub home 2",
                        "items" => [
                            [
                                "title" => "SubItem Home 1",
                                "icon" => "icon sub home 3",
                                "url" => "/subhome3",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 2",
                                "icon" => "icon sub home 4",
                                "url" => "/subhome4",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 3",
                                "icon" => "icon sub home 5",
                                "url" => "/subhome5",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 4",
                                "icon" => "icon sub home 6",
                                "url" => "/subhome6",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 5",
                                "icon" => "icon sub home 7",
                                "url" => "/subhome7",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 6",
                                "icon" => "icon sub home 8",
                                "url" => "/subhome8",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 7",
                                "icon" => "icon sub home 9",
                                "url" => "/subhome9",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 8",
                                "icon" => "icon sub home 10",
                                "url" => "/subhome10",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 9",
                                "icon" => "icon sub home 11",
                                "url" => "/subhome11",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem Home 10000",
                                "icon" => "icon sub home 12",
                                "url" => "/subhome12",
                                "image" => "image url"
                            ]

                        ]
                    ],
                    [
                        "title" => "Sub home 3",
                        "icon" => "icon sub home 3",
                        "items" => [
                            [
                                "title" => "SubItem home 1",
                                "icon" => "icon sub home 3",
                                "url" => "/subhome3",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem home 2",
                                "icon" => "icon sub home 4",
                                "url" => "/subhome4",
                                "image" => "image url"
                            ]
                        ]
                    ],
                    [
                        "title" => "Sub home 4",
                        "icon" => "icon sub home 4",
                        "url" => "/subhome4"
                    ],
                    [
                        "title" => "Sub home 5",
                        "icon" => "icon sub home 5",
                        "url" => "/subhome5"
                    ],
                    [
                        "title" => "Sub home 6",
                        "icon" => "icon sub home 6",
                        "url" => "/subhome6"
                    ],
                    [
                        "title" => "Sub home 7",
                        "icon" => "icon sub home 7",
                        "url" => "/subhome7"
                    ],
                    [
                        "title" => "Sub home 8",
                        "icon" => "icon sub home 8",
                        "url" => "/subhome8"
                    ],
                    [
                        "title" => "Sub home 9",
                        "icon" => "icon sub home 9",
                        "url" => "/subhome9"
                    ],
                    [
                        "title" => "Sub home 10",
                        "icon" => "icon sub home 10",
                        "url" => "/subhome10"
                    ],
                    [
                        "title" => "Sub home 11",
                        "icon" => "icon sub home 11",
                        "url" => "/subhome11"
                    ],
                    [
                        "title" => "Sub home 12",
                        "icon" => "icon sub home 12",
                        "url" => "/subhome12"
                    ]

                ]
            ],
            [
                "title" => "About",
                "icon" => "about",
                "items" => [
                    [
                        "title" => "Sub About",
                        "icon" => "icon about",
                        "url" => "/subabout"
                    ],
                    [
                        "title" => "Sub About 2",
                        "icon" => "icon sub about 2",
                        "items" => [
                            [
                                "title" => "SubItem About 1",
                                "icon" => "icon sub about 3",
                                "url" => "/subabout3",
                                "image" => "image url"
                            ],
                            [
                                "title" => "SubItem About 2",
                                "icon" => "icon sub about 4",
                                "url" => "/subabout4",
                                "image" => "image url"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Contact",
                "icon" => "contact",
                "url" => "/contact"
            ]
        ];

        return view('home', ['menuData' => $menuData]);
    }
}
