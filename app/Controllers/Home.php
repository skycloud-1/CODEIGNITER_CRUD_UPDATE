<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserLists;


class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function homepage(): string
    {
        return view('homepage');
    }
    public function practice(): string
    {
        return view('practice');
    }
    public function unknown($id = null)
    {
        $data['id'] = $id;
        return view("404", $data);
    }
    public function insert(){
        return view('insert');

    }
    public function actionInsert()
    {
        $Fname = $this->request->getVar('Fname');
        $Lname = $this->request->getVar('Lname');
        $Mi = $this->request->getVar('Mi');
        $Bdate = $this->request->getVar('Bdate');
        $Gender = $this->request->getVar('Gender');
        $Address = $this->request->getVar('Address');
        $ContactNo = $this->request->getVar('ContactNo');
        $Email = $this->request->getVar('Email');
        $Username = $this->request->getVar('Username');
        $Password = $this->request->getVar('Password');
        $Role = $this->request->getVar('Role');
        $Status = $this->request->getVar('STATUS');
        
        $user = new UserLists();
        $data = [
            'Fname' => $Fname,
            'Lname' => $Lname,
            'Mi' => $Mi,
            'Bdate' => $Bdate,
            'Gender' => $Gender,
            'Address' => $Address,
            'ContactNo' => $ContactNo,
            'Email' => $Email,
            'Username' => $Username,
            'Password' => $Password,
            'Role' => $Role,
            'STATUS' => $Status
          
        ];
        
        $user->save($data);
        
        return redirect()->to('/user');
    }
    
}
