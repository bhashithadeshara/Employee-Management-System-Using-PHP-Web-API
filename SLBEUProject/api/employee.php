<?php
echo $method;
if($method=='GET'){
    if($id){
            $data=DB::query("SELECT * FROM $tableName WHERE id=:id",[':id'=>$id]);
            if(!empty($data)){
                echo   json_encode(($data[0]));
            }else{
                echo json_encode(['message'=>'Currently there are no posts in DB']);
            }
    }else{
        $data=DB::query("SELECT * FROM $tableName " );
        echo json_encode($data);
    }
}
elseif($method=='POST'){
    echo "Hello";
     $_POST = json_decode( file_get_contents("php://input"),true);
    if(!empty($_POST)){
        extract($_POST);       
       
        echo  "':name'=>$name,
        ':email'=>$email,
        ':national_id'=>$name,
        ':address'=>$address,
        ':proffession'=>$name,
        ':qualification'=>$qualification,
        ':location'=>$location,                
        ':password'=>$password,               
        ':confirm_password'=>$confirm_password ";

        if(!empty($email)&& !empty($name)){
            DB::query("INSERT INTO $tableName (name,email,national_id,address,proffession,qualification,location,password,confirm_password) 
            VALUES(:name,:email,:national_id,:address,:proffession,:qualification,:location,:password,:confirm_password)",[
                ':name'=>$name,
                ':email'=>$email,
                ':national_id'=>$name,
                ':address'=>$address,
                ':proffession'=>$name,
                ':qualification'=>$qualification,
                ':location'=>$location,                
                ':password'=>$password,               
                ':confirm_password'=>$confirm_password 
            ]);

            $data=DB::query("SELECT * FROM $tableName ORDER BY email DESC LIMIT 1");
            echo json_encode(["message"=>"POST to the database Successfully.","success"=>true,"post"=>$data[0]]);
        }else{
            json_encode(["message"=>"Please fill the all filds","success"=>false]);
        }
    }



//  elseif($id){
//     $item=DB::query("SELECT id FROM $tableName WHERE id=:id",[":id"=>$id]);
//         if(!empty($item)){
//              echo $id;
//             if($method=='PUT'){
//                 extract(json_decode( file_get_contents("php://input"),true));
//                   echo $first_name;
//                   echo $last_name;

//                     DB::query("UPDATE $tableName  SET first_name=:first_name,last_name=:last_name WHERE id=:id ",[
//                         ':id'=>$id,
//                         ':first_name'=>$first_name,
//                         ':last_name'=>$last_name
                        
//                     ]);
                    
//                     $data=DB::query("SELECT * FROM $tableName ORDER BY id DESC LIMIT 1");
//                     echo json_encode(["message"=>"POST to the database Successfully.","success"=>true,"post"=>$data[0]]);
                
//             }elseif($method=='DELETE'){
//                 DB::query("DELETE FROM  $tableName  WHERE id=:id LIMIT 1",[
//                    ':id' => $id
//                 ]);
    
//                 $data=DB::query("SELECT * FROM $tableName ORDER BY id DESC LIMIT 1");
//                 echo json_encode(["message"=>"POST to the database Successfully.","success"=>true,"post"=>$data[0]]);

//             }


//         }else{
//             json_encode(["message"=>"NO RECORD FOUND FOR THIS ID ","success"=>false]);
//         }
  }

?>