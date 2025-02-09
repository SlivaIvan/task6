<?php function logicAction(string $operationNumber): void{
    global $items;

    //  Добавляем товар в список
    if($operationNumber === "1"){
        echo "Введение название товара для добавления в список: \n> ";
        $itemName = userRequest();
        $items[] = $itemName;
    } //  Удаляем товар из списка
    elseif($operationNumber === "2"){
        // Проверить, есть ли товары в списке? Если нет, то сказать об этом и попросить ввести другую операцию
        echo 'Текущий список покупок:' . PHP_EOL;
        echo 'Список покупок: ' . PHP_EOL;
        shoppingList();

        echo 'Введение название товара для удаления из списка:' . PHP_EOL . '> ';
        $itemName = userRequest();

        if (in_array($itemName, $items, true) !== false) {
            while (($key = array_search($itemName, $items, true)) !== false) {
                unset($items[$key]);
            }
        }

    } //  Выводим если нужно сделать отображение списка
    elseif($operationNumber === "3"){
        echo 'Ваш список покупок: ' . PHP_EOL;
            echo implode(PHP_EOL, $items) . PHP_EOL;
            echo 'Всего ' . count($items) . ' позиций. '. PHP_EOL;
            echo 'Нажмите enter для продолжения';
            fgets(STDIN);        
    }
}
?>