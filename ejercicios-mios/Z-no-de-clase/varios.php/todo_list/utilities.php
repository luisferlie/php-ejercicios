<?php

const DATAFILE = 'tasks.csv';



// --------------------------------------------------------------------------------------
// FONCTIONS
// --------------------------------------------------------------------------------------

function loadTasks()
{
	/*
	 * se abre el fichero csv en forma de lectura(a+ con posiblidad de añadir) y si no existe se crea vacio
	 * 
	 */
	$file = fopen(DATAFILE, 'a+');


	$tasks = array();

	// Bucle de lectura del  CSV,
	while (true) {
		// una linea
		$taskData = fgetcsv($file);

		// hasta que llega al fin
		if ($taskData == false) {
			break;
		}

		// Añade la tarea a la lista de tareas-array tasks
		array_push($tasks, $taskData);
	}

	// cierre fichero
	fclose($file);

	return $tasks;
}

function saveTask(array $taskData)
{
	/*
	 *se abre el fichero csv en forma de añadir
	 *
	 * añadir significa
	 * - Si el fichero existe se detruye y se escribe dentro al fin del fichero
	 * - si no,se crea y se escribe dentro.
	 */
	$file = fopen(DATAFILE, 'a');

	// escribir una linea en el fichero..cada linea una tarea
	fputcsv($file, $taskData);

	// cierre del CSV de tareas
	fclose($file);
}

function saveTasks(array $tasks)
{
	/*
	 * se abre el fichero csv para registrar todas la tareas en el csv
	
	 * - Si el fichero existe se detrye y se escibe dentro
	 * - si no,se crea y se escribe dentro.
	 */
	$file = fopen(DATAFILE, 'w');

	// Bucle de escritura en CSV (= tarea por tarea).
	foreach ($tasks as $taskData) {
		// escibe una linea por tarea
		fputcsv($file, $taskData);
	}

	// Fermeture du fichier CSV des tâches.
	fclose($file);
}
