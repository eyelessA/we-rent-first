<?php

set_time_limit(6);

$redis = new Redis();

try {
    $redis->connect('redis', 6379);

    if ($redis->get('lock')) {
        echo "Код уже идет.\n";
        return;
    }

    $redis->set('lock', 'lock', ['ex' => 5]);

    echo "Скрипт начал выполнение...\n";
    sleep(5);
    echo "Скрипт завершил выполнение.\n";

} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}

