<?php

    $path = '/dir0/dir1/myfile.php';

    // Return filename
    echo basename($path); // myfile.php

    // Return filename without extension
    echo basneame($path, '.php'); // myfile

    // Return dir name from path
    echo dirname($path); // /dir0/dir1/

    // Checking if file exists
    $file='file1.txt';
    echo file_exists($file); // zwróci 1, bo mamy taki plik

    // Get absolute path
    echo realpath($file); // shows absolute path of a file

    // Checks to see if file
    // różnica pomiędzy file_exists jest taka, że tutaj w is_file nie zwróci nic dla folderu
    // dla file_exists zwróci "1" dla folderu
    echo is_file($file); // zwróci 1

    // Check if is writeable
    echo is_writable($file); // zwróci 1, bo plit tesktowy można nadpisywać

    // Check if is readable
    echo is_readable($file); // zwróci 1

    // Get the file size
    echo filesize($file);

    // Create a directory (folder with name "testing" in our example)
    mkdir('testing');

    // Remove directory but only if there is no file in it
    // Remove directory if empty
    rmdir('testing');

    // Copy file
    echo copy('file1.txt', 'file2.txt');

    // Rename a file
    rename('file2.txt','myfile.txt');

    // Delete file
    unlink('myfile.txt');

    // Write from file to string
    echo file_get_contents($file);

    // Write string to file (repalce old things in file and put the new one)
    // In our case file will have ONLY 'Goodby World'
    echo file_put_contents($file, 'Goodbye World');

    // append string to file
    $current = file_get_contents($file);
    $current = ' Goodbye world';
    echo file_put_contents($file, $current);

    // Open File For Reading (One of many way for reading file)
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;

    // Open File For writing (One of many way for reading file)
    // below You will create file and set a string there with 'John Doe'
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);

    // append to file
    $txt = "Steve Doe\n";
    fclose($handle);



