<?php

exec('sh copy-storage.sh');

foreach ($_ENV as $key => $value) {
    echo "$key = $value\n";
}

require __DIR__ . '/../public/index.php';
