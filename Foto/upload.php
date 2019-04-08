<?php
$target_dir = "zdjecia/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Typ pliku - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Plik nie jest obrazem.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Istnieje już taki sam plik.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Plik jest za duży.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Plik nie ma odpowiedniego formatu (jpg/png/jpeg/gif).";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Plik nie został wgrany.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>Foto <b>". basename( $_FILES["fileToUpload"]["name"]). "</b> został wgrany.<br><br>
		Link: <b>http://strzyzowpelczara.pl/Foto/zdjecia/". basename( $_FILES["fileToUpload"]["name"])."</b>";
    } else {
        echo "Błąd przy wgrywaniu.";
    }
}
?>