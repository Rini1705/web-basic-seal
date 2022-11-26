<?php

if (isset ($_GET['p'])) {

    if ($_GET['p'] == 'tampil') {

    echo $_POST['nama'];
    echo "<br/>";
    echo $_POST['password'];

} else if ($_GET['p'] == "pesan") {
    echo "I love you" .$_POST['nama'];
    echo "<br/>";
    echo "password nya affahh .." .$_POST['password'];

} else if ( $_GET['p'] == "aman") {

    if (!empty( $_POST['nama'])) {
        echo $_POST['nama'];
    } else {
        echo "namanya mana?";
    }

    echo "<br/>";

    if (!empty( $_POST['password'])) {
    echo $_POST ['password'];
    } else {
        echo "passwordnya masih kosong kaya hatiku";
    }

} else if ($_GET['p'] == "gambar") {
    $size = getimagesize($_FILES['berkas']['tmp_name']);
    $image = "data:" .$size['mime'].";base64".
            base64_encode(file_get_contents($_FILES['berkas']['tmp_name']));

    echo "<image src='".$image."' width='720'>";
}


} else {
    echo "janji gk selingkuh..";
}
