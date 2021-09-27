<?php
require_once 'php/auth.php';
require_once 'php/header.inc.php';

function addLinks()
{
  $links = scandir("projects/");                    // creating an array with all items(files and folders) in the choosen folder(path) including the . and ..
  $links = array_splice($links, 2, count($links));  // get rid of the . and ..
  $links = array_values($links);                    // reseting the indexes starting from 0

  foreach ($links as $i => $value) {
    if (file_exists('projects/' . $value . '/info.php')) {
      require_once 'projects/' . $value . '/info.php';
      //echo "index = " . $i . " / value = " . $value . "<br>";
      echo '<a href="/projects/' . $value . '/' . $projData["StartPage"] . '">' . $projData["ProjectName"] . '</a><br>';
    }
  }
}

?>

<div>
    <div>LIVE TEST SERVER<br>/* UNDER */<br>/* CONSTRUCTION */</div>
    <div>
      <p>
      The Opportunity team is constantly working to improve this live test server and is continuously releasing new projects.
Here is an overview of the projects created so far. <br>
        <p><?php addLinks(); ?></p>
      </p>
    </div>
  </div>

<?php require_once 'php/footer.inc.php'; ?>