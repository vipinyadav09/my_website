<html lang="en"> 

<head> 

    <meta charset="UTF-8"> 

    <title>File Upload Form</title> 

</head> 

<body> 

    <form action="uploadmanager.php" method="post" enctype="multipart/form-data">        

        <label for="fileSelect">Filename:</label><br><br> 

        <input type="file" name="photo" id="fileSelect"><br><br> 

        <input type="submit" name="submit" value="Upload"> 

        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p> 

    </form> 

</body> 

</html> 