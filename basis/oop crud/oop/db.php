<?php
 class Database{
    public $con;

    public function connect(){
        $this->con = mysqli_connect("localhost","root","","users");
        if(!$this->con){
            die("refuse");
        }
    }
    public function create($n,$a,$ad){
        $sql = "insert into student values(NULL,'$n',$a,'$ad');";
        $q = mysqli_query($this->con,$sql);
        if($q){
            return "true";
        }
        else{
            return "false";
        }
    }
    public function show(){
        $sql = "select * from student";
        $q = mysqli_query($this->con,$sql);
        return $q;
    }
    public function edit($n,$a,$ad,$id){
        $sql = "update student set name='$n',age=$a,address='$ad' where id=$id ";
        $q= mysqli_query($this->con,$sql);
        if($q){
            return "true";
        }
        else{
            return "false";
        }
    }
    public function delete($id){
        $sql = "delete from student where id=$id";
        $q = mysqli_query($this->con,$sql);
        if($q){
            return "true";
        }
        else{
            return "false";
        }
    }
 }
 $obj = new Database();
 $obj->connect()
?>