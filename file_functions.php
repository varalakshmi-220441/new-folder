<?php
//File Read/Write;
$file=fopen("data.txt","w");
fwrite($file,"Hey!...😀
              varalakshmi
              em chestunnav?...
");
fclose($file);

$file=fopen("data.txt","r");
echo fread($file,filesize("data.txt"));
fclose($file);

echo "<br><br>";
echo file_get_contents("data.txt");
echo "<br><br>";
echo file_put_contents("data.txt","File_functions lab chestunna");
echo "<br><br>";
print_r(file("data.txt"));
//File information
echo "<br><br>";
$files=file_exists("data.txt")."<br>";
echo "File exists:$files";
$files=filesize("data.txt")."<br>";
echo "File size:$files";
$files=filetype("data.txt")."<br>";
echo "filetype:$files";
$files=fileatime("data.txt")."<br>";
echo "Last Accessed:$files";
$files=date("d-m-Y H:i",filemtime("data.txt"))."<br>";
echo "Last Modified:$files";
$files=filectime("data.txt")."<br>";
echo "Inode changed :$files";
$files=fileperms("data.txt")."<br>";
echo "File permissions:$files";
$files=fileowner("data.txt")."<br>";
echo "file Owner:$files";
$files=filegroup("data.txt")."<br>";
echo "file group:$files";
$files=fileinode("data.txt")."<br>";
echo "inode number:$files";
//File and Folder Management
copy("data.txt","sample1.txt");
echo "File copied"."<br>";
rename("sample1.txt","sample2.txt");
echo "File name is renamed"."<br>";
unlink("sample2.txt");
echo "File deleted"."<br>";
mkdir("new_folder");
echo "New folder is created"."<br>";
rmdir("new_folder");
echo "Created folder is removed"."<br>";
$isfile=is_file("data.txt");
echo "is file:$isfile"."<br>";
$isdir=is_dir("sample.txt");
echo "is dir:$isdir";
//Directory Handling
echo "<br><br>";
$files=(scandir("."));
print_r($files);

$dir=opendir(".");
echo "Directory opened";
while(($file=readdir($dir))!=false){
    echo "$file"."<br>";
}
closedir($dir);
echo getcwd();
//File Locking
echo "<br><br>";
$file=fopen("lock.txt","w");
if(flock($file,LOCK_EX)){
    fwrite($file,"file is locked and written");
    echo "File locked successfully";
    flock($file,LOCK_UN);
}
fclose($file);

?>
