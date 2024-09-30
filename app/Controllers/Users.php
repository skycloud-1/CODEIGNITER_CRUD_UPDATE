<?php

namespace App\Controllers;
use App\Models\UserLists;

class Users extends BaseController
{
    public function userMgt()
    {
        $u=new UserLists();
        $data['usr']=$u->findAll();

        

        return view('users_Mgt', $data);
    }
    public function editUser($id=null){
        $u=new UserLists();
        $data['u']=$u->where('userID', $id)->first();
        return view('edit_user', $data);

    }
    public function practice($id=null){
        $u=new UserLists();
        $data['u']=$u->where('userID', $id)->first();
        return view('practice', $data);

    }

    public function insert(){
       return view('insert');

    }

    public function updateUser(){
        $id=$this->request->getVar('userID');
        $Fname=$this->request->getVar('Fname');
        $Lname=$this->request->getVar('Lname');
        $Mi=$this->request->getVar('Mi');
        $Bdate=$this->request->getVar('Bdate');
        $Gender=$this->request->getVar('Gender');
        $Address=$this->request->getVar('Address');
        $ContactNo=$this->request->getVar('ContactNo');
        $Email=$this->request->getVar('Email');
        $Username=$this->request->getVar('Username');
        $Password=$this->request->getVar('Password');
        $Role=$this->request->getVar('Role');
        $Status = $this->request->getVar('STATUS');
        $i=new UserLists();
       
        $data=[
            'Fname'=>$Fname,
            'Lname'=>$Lname,
            'Mi'=>$Mi,
            'Bdate'=>$Bdate,
            'Gender'=>$Gender,
            'Address'=>$Address,
            'ContactNo'=>$ContactNo,
            'Email'=>$Email,
            'Username'=>$Username,
            'Password'=>$Password,
            'Role'=>$Role,
            'STATUS' => $Status
        ];
           
        
        

            $i->set($data)->where('userID',$id)->update();
            $this->response->redirect(site_url('/user'));
        
    }
    
    public function delete($id = null)
    {
        $u = new UserLists();
        $u->delete(['userID'=> $id]);
        return redirect()->to('/user');
    }

   
}
