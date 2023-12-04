<?php
session_start();

function printBoard($board)
{
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            print $board[$i][$j] . ' ';
        }
        print '<br>';
    }
}

function checkWin($board)
{
    // Check rows and columns for a win
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
            return $board[$i][0];
        }
        if ($board[$i][0] == $board[$i][2] && $board[$i][1] == $board[$i][0]) {
            return $board[$i][0];
        }
    }

    // Check diagonals for a win
    if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        return $board[0][0];
    }
    if ($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        return $board[0][2];
    }

    return null;
}

if (isset($_POST['cell'])) {
    $board = $_SESSION['board'];
    $player = $_SESSION['player'];
    $cell = $_POST['cell'];

    // Check if cell is empty
    if ($board[$cell[0]][$cell[1]] == '') {
        // Place player's move in cell
        $board[$cell[0]][$cell[1]] = $player;

        // Switch player
        $_SESSION['player'] = ($player == 'X') ? 'O' : 'X';

        // Check for a win
        $winner = checkWin($board);
        if ($winner != null) {
            // Display winner message
            print 'Player ' . $winner . ' wins!<br>';
        } else {
            // Check if the board is full (a tie)
            $tie = true;
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    if ($board[$i][$j] == '') {
                        $tie = false;
                        break 2;
                    }
                }
            }
            if ($tie) {
                // Display tie message
                print 'It\'s a tie!<br>';
            }
        }

        // Save updated board
        $_SESSION['board'] = $board;
    }
}

// Initialize game if not already started
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array(
        array('', '', ''),
        array('', '', ''),
        array('', '', '')
    );
    $_SESSION['player'] = 'X';
}

printBoard($_SESSION['board']);

print '<form method="post" action="">';
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        print '<input type="submit" name="cell" value="' . $i . ',' . $j . '">';
    }
    print '<br>';
}
print '</form>';
