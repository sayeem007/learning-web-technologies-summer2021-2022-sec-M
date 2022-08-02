<?php 
    require_once "DBModel.php";

    function login($username, $password){
        $conn = getConnection();
		$sql = "select * from SupTbl where id='{$id}' and username='{$username}'and supplier_name='{$supplier_name}'and supplier_phone='{$supplier_phone}'and email='{$email}'and dob='{$dob}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function signup($user){
        $conn = getConnection();
		$sql = "insert into SupTbl values('',{$user['id']}', '{$user['username']}', '{$user['supplier_name']}','{$user['supplier_phone']}','{$user['email']}', '{$user['dob']}'";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>