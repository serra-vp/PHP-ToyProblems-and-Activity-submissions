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
  echo "<h4>{$portal->projectName}</h4>";
  echo "<strong>Client: </strong>{$portal->isClient("Vincent Serra")} <br/>";
  echo "<strong>Project Manager: </strong> {$portal->myProjectManager("Jino Lacson")} <br/>";
  echo "<strong>Year Deployed: </strong> {$portal->yearDeployed(2020)} <br/>";
  echo "<strong>Built-in version: </strong> {$portal->builtInVersion()} <br/>";
  echo "<strong>Technology Stack: </strong><br/>";
  foreach($portal->technologyStack(['PHP','Javascript', 'MVC', 'MySQL', 'Wordpress']) as $index => $language):
    echo "&nbsp; ".++$index.". {$language} <br/>";
  endforeach;
  echo "<strong>Developers: </strong><br/>";
  //foreach($portal->developers('Jaymard', 'Jeffrey', 'Vanessa', 'Delfin', 'Mark', 'Gino', 'Hamlett', 'Franco', 'Rap') as $index => $devs):
  foreach($portal->developers(['Jaymard', 'Jeffrey', 'Vanessa', 'Delfin', 'Mark', 'Gino', 'Hamlett', 'Franco', 'Rap']) as $index => $devs):
    echo "&nbsp; ".++$index.". {$devs} <br/>";
  endforeach;

  ?>
</body>
</html>