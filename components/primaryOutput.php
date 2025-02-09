<?php
function primaryOutput(): void{
    global $items, $operations, $operationNumber;

    if (count($items)) {
        echo 'Ваш список покупок: ' . PHP_EOL;
        shoppingList();
    } else {
        echo 'Ваш список покупок пуст.' . PHP_EOL;
    }


    echo 'Выберите операцию для выполнения: ' . PHP_EOL;
    // Проверить, есть ли товары в списке? Если нет, то не отображать пункт про удаление товаров
    echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
    $operationNumber = userRequest();

    if (condition()) {
        system('cls');

        echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
    }
}
?>