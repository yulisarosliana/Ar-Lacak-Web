<?php
    /* file_upload.php
     untuk upload foto dari native ke server
    */
    // Where the file is going to be placed
    $target_path = "../ar-lacak/images/laka/";
 
    /* Add the original filename to our target path.
    Result is "uploads/filename.extension" */
    echo "uploading started";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
 
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
    " has been uploaded";
    chmod ("../ar-lacak/images/laka/".basename( $_FILES['uploadedfile']['name']), 0644);
    } else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploadedfile']['name']);
    echo "target_path: " .$target_path;
    }
    ?>