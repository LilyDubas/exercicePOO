<?php
/**
 * Class Character
 */

class Character{
  public int $health;
  public int $mana;
  public Stuff $stuff;

  function __construct(){

  }
  function __destruct(){

  }
  function chat(string $charac):string{

}
  }

  class Orc{
  public int $health = 1000;

  function useHammer():bool{

  }
  function useSword():bool{

  }
  }

  class Stuff{
  public string $head;
  public string $body;
  public string $weapon;

  function __construct(){

  }
  function view():string{

  }
  function __destruct(){

  }
  }
?>