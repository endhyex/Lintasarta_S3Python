<!-- #UPLOAD LOKAL# -->
<?php

$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

$dirUpload1 = "file/";

$file1 = move_uploaded_file($namaSementara, $dirUpload1.$namaFile);

if ($file1) {
    echo "Upload berhasil<br/>";
    echo "Link: <a href='".$dirUpload1.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload gagal";
}
?>