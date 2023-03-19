<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
if(!empty($_POST['name'])|| $_FILES['image'])
{
$img = $_POST['name'];
$orgname=$_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
//$ext = strtolower(pathinfo($orgname, PATHINFO_EXTENSION));
$ext = 'jpg';

// can upload same image using rand function
$final_image = $img.'.'.$ext;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='https://taghash.co/Atoot-Bandhan-Dealer/$path' height=30% width=30%>";

}
} 
else 
{
echo 'invalid';
}
}
?>