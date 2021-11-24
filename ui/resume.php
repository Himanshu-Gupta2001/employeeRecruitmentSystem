<?php
if(isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_Loc = $_FILES['file']['tmp_name'];
    $file_store = "C:/wamp/www/employeeRecruitmentSystem/app/uploadedResume/".$file_name;

    if (move_uploaded_file($file_tem_Loc, $file_store)) {
        echo "File uploaded successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Resume</title>
</head>
<style>
   .header{
       color: blue;
       background-color : red;
       font-style : arial;
   }
</style>
<body>
    <form action = "?" method = "POST" enctype = "multipart/form-data">
        <label class="header"> Please upload your resume here before login</label>
        <p><input type = "file" name="file"/></p>
        <p><input type = "submit" name="upload" value="Upload File"></p>
    </form>
    
</body>
</html>

<?php
echo "<a href = login.html> Click Here to login</a>";
?>
