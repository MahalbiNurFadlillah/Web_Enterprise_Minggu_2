<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contohcontroller extends Controller
{
    public function TampilContoh()
    {
        $data = [
            'totalproducts'=> 310,
            'salesToday' => 100,
            'totalRevenue' => 'Rp 50,000,000',
            'registeredUsers' => 350
        ];
        return view('tes',$data);
    }
}
