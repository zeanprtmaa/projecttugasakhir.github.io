<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$penggunaan = $_POST['penggunaan'] ?? '';
$saran = $_POST['saran'] ?? '';
$rating = $_POST['rating'] ?? '';

$formData = [
    'Nama' => $name,
    'Email' => $email,
    'Telepon' => $phone,
    'Seberapa mudah penggunaan website' => $penggunaan,
    'Saran untuk meningkatkan pengalaman pengguna' => $saran,
    'Peringkat website (1-5)' => $rating
];

$data = "";
foreach ($formData as $key => $value) {
    $data .= "$key: $value\n";
}
$data .= "\n";

$file = '../data/survey.txt';

$fp = fopen($file, 'a');

if ($fp) {
    fwrite($fp, $data);
    fclose($fp);
    echo "Terimakasih telah mengirim survey";
} else {
    echo "Gagal mengirim survey";
}
