<?php
//if form is submitted and submit button is true
if(isset($_POST['submit'])){
    //create an array with extenstion names
$allowedExt = array('png', 'jpg' , 'gif');
//checks the input name with upload
    if(!empty($_FILES['upload']['name'])){
        //print_r($_FILES); shows the object of file
        $fileName =$_FILES['upload']['name']; //collects file name, size and temporary location
        $fileSize =$_FILES['upload']['size']; //from the submitted file with upload name
        $fileTmp =$_FILES['upload']['tmp_name'];
        $targetDir = "uploads/${fileName}"; //creates target directory/with file name


        //get file ext
        $file_ext = explode('.', $fileName); //explode creates array from string, separating string with first arg
        $file_ext = strtolower(end($file_ext));//collects created array, converts letters to lowercase, points to end of array


        //Validate file
        if(in_array($file_ext, $allowedExt)){
            if($fileSize <= 100000){
                move_uploaded_file($fileTmp, $targetDir);
                //moves uploaded file to target directory
                echo '<h2 style="color:green;">File Submitted</h2>';
            }else{
                $errmsg = '<h2 style="color:red;">file to large</h2>';
            }
        }else{
            $errmsg = '<h2 style="color:red;">not a correct file</h2>';
        }

    }else{
        $errmsg = '<h2 style="color:red;">please choose a file</h2>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>File Upload</h1>

<?php
//if error occurs show variable else null
echo $errmsg ?? null;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    Select image:
    <input type="file" name="upload">
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>


