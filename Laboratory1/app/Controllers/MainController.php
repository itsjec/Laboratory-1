<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{

    public function save()
    {
        $ID = $_POST['StudID'];
        $data = [
            'StudID' => $this->request->getPost('StudID'),
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];

        if($ID!= null){
            $main = new MainModel();
            $main->set($data)->where('StudID', $ID)->update();
        }else{
            $main = new MainModel();
            $main->save($data);
        }
        return redirect()->to('/test');
    }

    public function delete($ID)
    {
        $main = new MainModel();
        $main->delete($ID);
        return redirect()->to('/test');
    }

    public function edit($ID)
    {
        $mmodel = new MainModel();
        $data = [
            'main' => $mmodel->findAll(),
            'var' => $mmodel->where('StudID', $ID)->first(),
        ];
        return view('main', $data);
    }    

    public function test()
    {
        $mmodel = new MainModel();
        $data['main'] = $mmodel->findAll();
        //var_dump(data);
        return view('main', $data);
    }

    public function index()
    {
        //
    }
}
