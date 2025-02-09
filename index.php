<?php
declare(strict_types=1);

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];

$items = [];
$operationNumber;

include('components/logicAction.php');
include('components/shopingList.php');
include('components/primaryOutput.php');
include('components/userRequest.php');
include('components/condition.php');


do {
    system('cls');
//    system('clear'); // windows
    do {
        primaryOutput();
    } while (condition());

    echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;

    switch ($operationNumber) {
        case OPERATION_ADD:
            logicAction($operationNumber);
            break;

        case OPERATION_DELETE:
            logicAction($operationNumber);
            break;

        case OPERATION_PRINT:
            logicAction($operationNumber);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
?>