<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
  <h3><a href="upload.html">upload.html</a></h3>
<?php
ini_set("display_errors", "1");
$uploaddir = 'C:\BitNami\wampstack-7.3.6-1\apache2\htdocs\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);
print "</pre>";
?>
<img src="./<?=$_FILES['userfile']['name']?>" width="400px"/>
</body>
</html>
