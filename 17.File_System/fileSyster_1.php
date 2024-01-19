
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

    // is_executable()  //File Checker
    //is_link()  // link checker
    // is_readable // File Read kora jai nake check kora hoi
    // is_uploaded_file()  // File Upload kena check kora hoi
    // is_writable()  // Laka jabe kena check kora hoi

    if (is_executable($file)) {
        echo "Yes, it is Exe";
    }else{
        echo "no";
    }





?>