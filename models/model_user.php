<?php

class User{
    public $id;
    public $name;
    public $email;
    public $curp;
    public $dose;
    public $created_at;
    //====================================================================================================
    public function __construct($id,$name,$email,$curp,$dose,$created_at){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->curp=$curp;
        $this->dose=$dose;
        $this->created_at=$created_at;
    }
    //====================================================================================================
    public static function consult(){
        $listUser=[];
        $connectionBD=BD::createConnection();
        $sql=$connectionBD->query("SELECT * FROM users");

        foreach($sql->fetchAll() as $user){
            $listUser[] = new User($user['id'],$user['name'],$user['email'],$user['curp'],$user['dose'],$user['created_at']);
        }
        return $listUser;

    }
    //====================================================================================================
    public static function create($name,$email,$curp,$dose){
        $connectionBD=BD::createConnection();

        $sql= $connectionBD->prepare("INSERT INTO users(name,email,curp,dose) VALUES(?,?,?,?)");
        $sql->execute(array($name,$email,$curp,$dose));
    }
    //====================================================================================================
    public static function edit($id,$name,$email,$curp,$dose){
        $connectionBD=BD::createConnection();
        $sql= $connectionBD->prepare("UPDATE users SET name=?, email=?, curp=?, dose=? WHERE id=?");
        $sql->execute(array($name,$email,$curp,$dose,$id));
    }
    //====================================================================================================
    public static function search($id){
        $connectionBD=BD::createConnection();

        $sql= $connectionBD->prepare("SELECT * FROM users WHERE id=?");
        $sql->execute(array($id));
        $user=$sql->fetch();
        return new User($user['id'],$user['name'],$user['email'],$user['curp'],$user['dose'],$user['created_at']);
    }
    //====================================================================================================
    public static function delete($id){
        $connectionBD=BD::createConnection();
        $sql= $connectionBD->prepare("DELETE FROM users WHERE id=?");
        $sql->execute(array($id));
    }
    //=====================================================================================================
}

?>