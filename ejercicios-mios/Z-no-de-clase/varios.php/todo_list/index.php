<?php



include 'utilities.php';



// --------------------------------------------------------------------------------------
// CODE 
// --------------------------------------------------------------------------------------

// Recuperacion de la fecha del dia
$now = date_create();

// Recuperacion de tareas.
$tasks = loadTasks();



// --------------------------------------------------------------------------------------
// TEMPLATE
// --------------------------------------------------------------------------------------


include 'index.phtml';
