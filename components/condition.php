<?php
    function condition(): bool{
        global $operationNumber, $operations;
        return !array_key_exists($operationNumber, $operations);
    }
?>