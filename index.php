<?php 
  declare(strict_types=1);

  interface IProject {
    public function isClient($client);
    public function myProjectManager($projectManager);
    public function yearDeployed($deployed);
    public function builtInVersion($version);
    public function technologyStack($stack);
    public function developers($devs);
  }

  class Portal implements Iproject{
    public $projectName = "Boom.Camp Portal V1.0.0";  

    public function isClient($client = "Undefined Client"):? string{
      return $client;
    }

    public function myProjectManager($projectManager = "Undefined Project Manager"):? string{
      return $projectManager;
    }

    public function yearDeployed($deployed = 1987):? int{
      return $deployed;
    }

    public function builtInVersion($version = "1.0.0"):? string{
      return $version;
    }

    //public function technologyStack(...$stack):? array{
    public function technologyStack($stack = []):? array{       
      return $stack;
    } 

    public function developers($devs = []):? array{
      return $devs;
    }  
  }

  $portal = new Portal;
  $projectName = $portal->projectName;
  $client =  $portal->isClient("Vincent Serra");
  $projectManager = $portal->myProjectManager("Jino Lacson");
  $yearDeployed = $portal->yearDeployed(2020);
  $version = $portal->builtInVersion();
  $languages = $portal->technologyStack(['PHP','Javascript', 'MVC', 'MySQL', 'Wordpress']);
  $developers = $portal->developers(['Jaymard', 'Jeffrey', 'Vanessa', 'Delfin', 'Mark', 'Gino', 'Hamlett', 'Franco', 'Rap']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 3 Day 1: Scalar Type, Return Type Declaration</title>
</head>
<body>
<?php 
  echo "<h4>{$projectName}</h4>";
  echo "<strong>Client: </strong>{$client} <br/>";
  echo "<strong>Project Manager: </strong> {$projectManager} <br/>";
  echo "<strong>Year Deployed: </strong> {$yearDeployed} <br/>";
  echo "<strong>Built-in version: </strong> {$version} <br/>";
  echo "<strong>Technology Stack: </strong><br/>";
  foreach($languages as $index => $language):
    echo "&nbsp; ".++$index.". {$language} <br/>";
  endforeach;
  echo "<strong>Developers: </strong><br/>";
  foreach($developers as $index => $devs):
    echo "&nbsp; ".++$index.". {$devs} <br/>";
  endforeach;
  ?>
</body>
</html>