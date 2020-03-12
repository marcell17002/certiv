<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certification;

class CertifInputController extends Controller
{
    public function input(Request $data){
        $certif = new Certification;

        $certif->certif_name = $data->certif_name;
        $certif->company = $data->company;
        $certif->desc = $data->desc;
        $certif->desc_detail = $data->desc_detail;
        $certif->pic = 1;
        $certif->url = $data->url;

        $certif->save();

        return redirect('/9798');
    }
}
