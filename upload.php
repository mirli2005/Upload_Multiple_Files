<?php

date_default_timezone_set("Asia/Baku");

if (!empty($_FILES["fayl"]["name"][0])) {
    $Tipler = ["image/png", "image/jpg"];
    $Files = $_FILES["fayl"];
    foreach ($Files["name"] as $Yer => $file_name) {
        $File_tmp = $Files["tmp_name"][$Yer];
        $File_size = $Files["size"][$Yer];
        $File_error = $Files["error"][$Yer];
        $File_type = $Files["type"][$Yer];

        if ($File_error === 0) {
            if (in_array($File_, $Tipler)) {
                if ($File_size <= 1000) {
                    $File_destination = "file/" . date("d-m-Y-H-i-s-") . rand(1000, 9999) . "-" . $file_name;
                    if (move_uploaded_file($File_tmp, $File_destination)) {
                        echo "Uğurlu!";
                    }
                } else {
                    echo "nope";
                }
            } else {
                echo "nope";
            }
        } else {
            echo "nope";
        }
    }
}
