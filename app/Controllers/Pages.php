<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home | Codeigniter 4'];
        return view('pages/home', $data);
    }

    //--------------------------------------------------------------------

    public function about()
    {
        $data = ['title' => 'About | Codeigniter 4'];
        return view('pages/about', $data);
    }

    //--------------------------------------------------------------------

    public function contact()
    {
        $data = [
            'title' => 'Contact | Codeigniter 4',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL. abc No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Apartment',
                    'alamat' => 'JL. abc No. 123',
                    'kota' => 'Bogoe'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
