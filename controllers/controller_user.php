<?php
include_once('connection.php');
include_once('models/model_user.php');

class ControllerUser{

//====================================================================================================
    public function view(){
        $userData = User::consult();
        include_once('views/users/users.php');
    }
//====================================================================================================
public function create(){
    if($_POST){
        print_r($_POST);
        $name=$_POST['name'];
        $email=$_POST['email'];
        $curp=$_POST['curp'];
        $dose=$_POST['dose'];
        User::create($name,$email,$curp,$dose);
        header('Location:./?controller=user&action=view');

    }
    include_once('views/users/create.php');

}
//====================================================================================================
public function edit(){
     
    if($_POST){
        print_r($_POST);
        $id=$_GET['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $curp=$_POST['curp'];
        $dose=$_POST['dose'];
        User::edit($id,$name,$email,$curp,$dose);
        header('Location:./?controller=user&action=view');
    }
    $id=$_GET['id'];
    $user=User::search($id);


    include_once('views/users/edit.php');
}
//====================================================================================================
public function delete(){
    print_r($_GET);
    //Se puede validar si es entero o dato
    $id=$_GET['id'];
    User::delete($id);
    header('Location:./?controller=user&action=view');
}
//====================================================================================================
    

}

?>