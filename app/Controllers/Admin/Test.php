<?php

namespace App\Controllers;

use App\Models\TestModel;
use CodeIgniter\Controller;

class Test extends BaseController
{
    public function __construct()
    {
        $this->testmodel = model(TestModel::class);        
    }

    public function page($data_url = 'none')
    {
        $data = $this->testmodel->getAll();
        $info = array(
            'data_url' => $data_url,
            'data' => $data
        );
        return view('test', $info);
    }
}
