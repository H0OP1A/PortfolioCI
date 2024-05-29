<?php

namespace App\Controllers;

use App\Models\ModelBiodata;
use App\Models\ModelPendidikan;
use App\Models\ModelPengalaman;
use App\Models\ModelPortfolio;
use App\Models\ModelContact;

class Home extends BaseController
{
    public function index()
    {
        $biodata = new ModelBiodata();
        $data['biodata'] = $biodata->findAll ();
        
        $pengalaman = new ModelPengalaman();
        $data['pengalaman'] = $pengalaman->findAll ();

        $pendidikan = new ModelPendidikan();
        $data['pendidikan'] = $pendidikan->findAll ();

        $portfolio = new ModelPortfolio();
        $data['portfolio'] = $portfolio->findAll ();

        $portfolio = new ModelContact();
        $data['contact'] = $portfolio->findAll ();
       

        return view('index', $data);
    }
}
