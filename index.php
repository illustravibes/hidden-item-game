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

    public function findPlayer(): ?array {
    foreach ($this->grid as $rowIndex => $row) {
        foreach ($row as $colIndex => $cell) {
            if ($cell === 'X') {
                return [
                    'row' => $rowIndex,
                    'col' => $colIndex,
                ];
            }
        }
    }

    return [];
}
}

$game = new HiddenItemGame();
$game->render();

$player = $game->findPlayer();

print_r($player);