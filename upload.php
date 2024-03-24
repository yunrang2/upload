<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// 이미지 파일인지 확인
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "이 파일은 이미지 파일입니다. - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "이 파일은 이미지 파일이 아닙니다.";
        $uploadOk = 0;
    }
}

// 파일이 이미 존재하는지 확인
if (file_exists($target_file)) {
    echo "이미 존재하는 파일입니다.";
    $uploadOk = 0;
}

// 파일 크기 제한
if ($_FILES["image"]["size"] > 500000) {
    echo "파일이 너무 큽니다. 500KB 이하로 업로드하세요.";
    $uploadOk = 0;
}

// 특정 파일 형식 허용
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "JPG, JPEG, PNG, GIF 형식만 허용됩니다.";
    $uploadOk = 0;
}

// 업로드 오류 확인
if ($uploadOk == 0) {
    echo "파일 업로드에 실패했습니다.";
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "파일 ". basename( $_FILES["image"]["name"]). " 이(가) 업로드 되었습니다.";
    } else {
        echo "파일 업로드 중 오류가 발생했습니다.";
    }
}
?>