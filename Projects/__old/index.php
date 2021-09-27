<?php 
session_start(); 
unset($_SESSION);
session_destroy();
/*
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/

include_once '/DB.php';


# FUNKTIONIERT NOCH NICHT, KEINE VERBINDUNG ZUR DATENBANK (MÖGLICHERWEISE EXISTIERT DIE DATENBANK NOCH GAR NICHT!!!)
# DATEN VON CHRIS HOLEN WENN NÖTIG NOCHT MIT DEM .sql FILE DIE DATENBANK AUF DEM LIVESERVER ERSTELLEN

//Get Total Questions
$query  = $connection->query("SELECT * from questions");

$query = "SELECT * FROM questions";
//Get Results
$results = $connection->query($query) or die ($connection→error.__LINE__);
$total = $results->fetchAll(PDO::FETCH_ASSOC);
include_once '/include/header.php';
// echo "<pre>";
//     var_dump($total);
// echo "</pre>";

?>

<div class="container">
    <h2>Learning PHP</h2>
    <p>This is a multiple choice quiz to test your knowledge</p>
    <ul>
         
        <li><strong>Number of Questions:</strong><?php echo count($total)?></li>
        <li><strong>Type:</strong>Multiple Choice</li>
        <li><strong>Estimated Time:</strong>20</a>
    </ul>
    <a href="question.php?n=1" class="start">Start Quiz</a>
</div> 
<?php

include_once '/include/footer.php';

?>