<?php

ini_set('max_execution_time', 6);

$startTime = (int)microtime(true);
$duration = 5;

$redis = new Redis();

try {
    $redis->connect('redis', 6379);

    if ($redis->get('lock')) {
        echo "Программа уже запущена.\n";
        return;
    }

    $redis->set('lock', 'lock', ['ex' => 6]);

    echo "Скрипт начал выполнение...\n";

    while ($startTime + $duration >= (int)microtime(true)) {
        echo '';
    }

    echo "Скрипт завершил выполнение.\n";

} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}

