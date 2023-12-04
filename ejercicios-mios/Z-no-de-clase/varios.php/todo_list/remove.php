<?php


include 'utilities.php';



// --------------------------------------------------------------------------------------
// FUNCIONES
// --------------------------------------------------------------------------------------

function removeTasks(array $allTasks, array $indexes)
{
    // crea un array vacio de tareas
    $tasks = array();

    // RECORRE LA LISTA

    foreach ($allTasks as $index => $taskData) {
        /*
         * Est-ce que l'indice de la tâche se trouve dans la liste des indices
         * de tâches qu'on ne doit pas conserver ?
         */
        if (in_array($index, $indexes) == false) {
            // Non, on conserve donc la tâche en la copiant dans notre nouveau tableau.
            array_push($tasks, $taskData);
        }
    }

    /*
	Le code ci-dessus peut s'écrire avec une boucle for.
	for($index = 0; $index < count($allTasks); $index++)
	{
        if(in_array($index, $indexes) == false)
        {
            array_push($tasks, $allTasks[$index]);
        }
    }
*/

    return $tasks;
}



// --------------------------------------------------------------------------------------
// CODE PRINCIPAL
// --------------------------------------------------------------------------------------

// SI EXITE LA VARIABLE INDEXES EN POST HAY QUE ELIMINAR (ARRAY ES QUE HAYQUE ELIMINAR LAS QUE TENGAN UN INDICES EN EL ARRAY INDEXES) !


if (array_key_exists('indexes', $_POST) == true) {
    // CARGAMOS TODAS LAS TAREAS
    $allTasks = loadTasks();

    /*
     * DEFINIMOS LA TAREAS QUE NO TIENEN INDICES EN$POST[INDEXES] Y LAS GUARDAMOS COMO TASKS
     */
    $tasks = removeTasks($allTasks, $_POST['indexes']);

    // Sauvegarde de la nouvelle liste de tâches (les tâches qui n'ont pas été cochées).
    saveTasks($tasks);
}

/*
 * Redirection vers la page d'accueil.
 *
 * Il est impératif de rediriger en HTTP GET après l'envoi d'un formulaire en HTTP POST.
 * Cela s'appelle le Post-Redirect-Get ou PRG - Lire la page Wikipédia à ce sujet.
 */
header('Location: index.php');
exit();
