<?php

class HiddenItemGame {
    
    private array $grid = [
        ['#', '#', '#', '#', '#', '#', '#', '#'],
        ['#', '.', '.', '.', '.', '.', '.', '#'],
        ['#', '.', '#', '#', '#', '.', '.', '#'],
        ['#', '.', '.', '.', '#', '.', '#', '#'],
        ['#', 'X', '#', '.', '.', '.', '.', '#'],
        ['#', '#', '#', '#', '#', '#', '#', '#'],
    ];

    public function render(): void {

        foreach ($this->grid as $row) {
            echo implode('', $row) . PHP_EOL;
        }
    }
}

$game = new HiddenItemGame();
$game->render();