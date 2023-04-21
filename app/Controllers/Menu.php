<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Controller;


class Menu extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['menu'] = $model->getMenu();
        return view('menu/index', $data);
    }
    public function create()
    {
        helper('form');
        $data = [];
        $model = new MenuModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama_menu' => 'required',
                'controller' => 'required',
            ];

            if ($this->validate($rules)) {
                $menu = [
                    'nama_menu' => $this->request->getVar('nama_menu'),
                    'controller' => $this->request->getVar('controller'),
                ];
                $model->insert($menu);
                return redirect()->to('/menu');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('/menu/create', $data);
    }
    public function edit($id)
    {
        helper('form');
        $model = new MenuModel();
        $data['menu'] = $model->getMenu($id);
        return view('/menu/edit', $data);
    }
    public function update($id)
    {
        $model = new MenuModel();
        $menu = [
            'nama_menu' => $this->request->getVar('nama_menu'),
            'controller' => $this->request->getVar('controller'),
        ];
        $model->update($id, $menu);
        return redirect()->to('/menu');
    }

    public function delete($id)
    {
        $model = new MenuModel();
        $model->delete($id);
        return redirect()->to('/menu');
    }
    public function view($id)
    {
        $model = new MenuModel();
        $data['menu'] = $model->getMenu($id);
        return view('/menu/view', $data);
    }
}
