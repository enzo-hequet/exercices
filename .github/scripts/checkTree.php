<?php
$required = ['public', 'public/img', 'public/css', 'public/js', 'src'];
$errors = [];

foreach ($required as $dir) {
    if (!is_dir($dir)) {
        $errors[] = "Directory missing: $dir";
    }
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        fwrite(STDERR, $error . PHP_EOL);
    }
    exit(1);
}
exit(0);