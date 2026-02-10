<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
<h2>Upload File</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" name="upload" value="Upload">
</form>
<?php
if (isset($_POST['upload']) && isset($_FILES['file'])) {
    if ($_FILES['file']['error'] == 0) {
        $fileName = basename($_FILES['file']['name']);
        $tempName = $_FILES['file']['tmp_name'];
        $uploadDir = __DIR__ . "/uploads";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $destination = $uploadDir . "/" . $fileName;

        if (move_uploaded_file($tempName, $destination)) {
            echo "<p style='color:green;'>File Uploaded Successfully</p>";
            echo "<a href='download.php?file=$fileName'>Download File</a>";
        } else {
            echo "<p style='color:red;'>File Upload Failed</p>";
        }
    }
}
?>

</body>
</html>
