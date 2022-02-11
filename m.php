    $f = fopen("file.txt","a");
    fwrite($f,$_POST['user']);
    fwrite($f,$_POST['email']);
    fwrite($f,$_POST['message']);
    fclose();









