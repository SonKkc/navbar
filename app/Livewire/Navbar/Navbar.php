<?php

namespace App\Livewire\Navbar;

use Livewire\Component;

class Navbar extends Component
{
    public $menuData;

    public function mount()
    {
        $this->menuData = [

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
    }


    public function render()
    {
        return view('livewire.navbar.navbar');
    }
}
