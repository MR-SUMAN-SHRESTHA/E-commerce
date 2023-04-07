<?php
    include('connection.php');
    if(isset($_POST['submit']))
        {
        $item_name= $_POST['item_name'];
        $item_price=$_POST['item_price'];
        if(!empty($_FILES["image"]["name"])) 
        { 
    // Get file info 
    $fileName = basename($_FILES["image"]["name"]);         
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 

        if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$fileName)){
        // $image = $_FILES['image']['tmp_name']; 
        // $imgContent = addslashes(file_get_contents($image)); 
        
        // Insert content into database 
        $insert = "INSERT into item (item_name,item_price,item_image) VALUES ('$item_name','$item_price','$fileName')"; 
            
        if(mysqli_query($connection,$insert)){ 
            echo "Data inserted successfully";
        }else{ 
            echo "Failed to upload image";
        }
        }  
    }else{ 
        echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload."; 
    } 
}else{ 
    echo "Please select an image file to upload."; 
} 
    }
