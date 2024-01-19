
<?php 

    $file = 'hello.txt';

    //echo readfile($file); // File Read Kora
    //mkdir('assect');   // New Folder Creater
    //rmdir('assect');  // Folder Delete
    //echo filetype ('assect'); // File Type Checker
    //echo realpath($file);

    
    if (file_exists($file)) {
        // echo readfile($file);
        //copy($file, 'copyfole.php');
        //rename('copyfole.php','rename.php');
        //unlink('rename.php'); => Delete
    }else{
        echo "File Not Found";
    }






?>