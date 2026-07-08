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


    public function showPlayer(): void {
        $player = $this->findPlayer();

        if (!$player) {
            echo "\n";
            echo "Player location not found";
            echo PHP_EOL;
            return;
        }

        echo "\n";
        echo "Player location: " . $player['row'] . ", " . $player['col'];
        echo PHP_EOL;
    }
}

$game = new HiddenItemGame();
$game->render();

$player = $game->showPlayer();