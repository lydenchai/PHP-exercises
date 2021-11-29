<?php
    function db() {
        return new mysqli('localhost', 'root', '', 'pnc_event_management_db');
    } 
    
    function getAllEvents() {
        return db()->query("SELECT * FROM events ORDER BY event_id DESC");
    }
    function createEvent($value) {
        $title = $value['title'];
        $description = $value['description'];
        $start_date = $value['start_date'];
        $end_date = $value['end_date'];
        $category = $value['categorySeleted'];
        $img_Name = $_FILES['image']['name'];
        $img_Size = $_FILES['image']['size'];
        $img_Type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $dir_fold = "../userProcess/images/";
        move_uploaded_file($tmp_name, $dir_fold.$img_Name);
        return db()->query("INSERT INTO events(title,start_date,end_date,description,user_id,cat_id,image) VALUES('$title','$start_date','$end_date','$description',1,'$category','$img_Name');");
        // header("Location: https://localhost/copy/?page=event");
    }
    // function createEvent($value) {
    //     if(isset($_POST['createEvent'])){
    //         $title = $value['title'];
    //         $start_date = $value['start_date'];
    //         $end_date = $value['end_date'];
    //         $description = $value['description'];
    //         $category = $value['categorySeleted'];
    //         $output_dir = "../userProcess/images/";/* Path for file upload */
    //         $RandomNum   = time();
    //         $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
    //         $ImageType      = $_FILES['image']['type'][0];
    //         $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    //         $ImageExt       = str_replace('.','',$ImageExt);
    //         $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    //         $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    //         $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	// if (!file_exists($output_dir))
	// {
	// 	@mkdir($output_dir, 0777);
	// }               
	// move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
	
    //     db()->query("INSERT INTO events(title,start_date,end_date,description,user_id,cat_id,image) VALUES('$title','$start_date','$end_date','$description',1,'$category','$NewImageName');");
    //     header("Location: index.php?page=event");
    //     }
    // }

    function getOneEvent($id) {
        return db()->query("SELECT * FROM events WHERE event_id = $id");
    }

    function deleteEvent($id) {
        return db()->query("DELETE FROM events WHERE event_id = $id");
    }

    function updateEvent($value) {
        if(isset($_POST['updateEvent'])){
            $title = $value['title'];
            $start_date = $value['start_date'];
            $end_date = $value['end_date'];
            $description = $value['description'];
            $event_id = $value['event_id'];
            $category = $value['categorySeleted'];
        return db()->query("UPDATE events SET title='$title', start_date='$start_date',end_date='$end_date',description='$description',cat_id='$category',user_id=1 WHERE event_id = $event_id");
        }
    }    
        // $output_dir = "images/";/* Path for file upload */
        // $RandomNum   = time();
        // $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
        // $ImageType      = $_FILES['image']['type'][0];
    
        // $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        // $ImageExt       = str_replace('.','',$ImageExt);
        // $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        // $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        // $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	// if (!file_exists($output_dir))
	// {
	// 	@mkdir($output_dir, 0777);
	// }               
	// move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
          // db()->query("UPDATE events SET title='$title', start_date='$start_date',end_date='$end_date',description='$description',cat_id='$category',user_id=1,image=$NewImageName WHERE event_id = $event_id");

    //     header("Location: index.php?page=event");
    // }
    // Create User
    function addUser($value) {
        $username = $value['username'];
        $password = $value['pass'];
        $cf_password = $value['cfpassword'];
        $email = $value['email'];
        $isValidEmail = true;
        $allUser = selectAllUser();
        foreach($allUser as $user) {
            if($email == $user['email'] or $password != $cf_password) {
                $isValidEmail = false;
            }
        }
        if($isValidEmail) {
            return db()->query("INSERT INTO users (username, email, password, role) VALUES ('$username','$email', '$password','$role')");
        } else {
            return $isValidEmail;
        }
       
    }

    // GET ALL USER 
    function selectAllUser() {
        return db()->query("SELECT * FROM users");
    }

    function login($value){
        $admin = $value['username'];
        $email = $value['email'];
        $password = $value['password'];
        $login = false;
        $getUser = db()->query("SELECT * FROM users");
        foreach ($getUser as $user){
            if ($user["email"] == $email and $user["password"] == $password){
                $login = true;
            }
        } return $login;
    }

?>
