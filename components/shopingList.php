<?php
function shoppingList(): void{
    global $items;
    echo implode("\n", $items) . "\n";
}
?>