  <?php
spl_autoload_register('MyAutoloader::Libs');
spl_autoload_register('MyAutoloader::Pages');


class MyAutoloader
{

  public static function Libs($class)
  {
    require_once("libs/smarty/Smarty.class.php");
  }

  public static function Pages($class)
  {
    $filename = 'classes/' . $class . ".php";

    if(!file_exists($filename)){
      return false;
    } else {
      include $filename;
    }
  }

}
?>
