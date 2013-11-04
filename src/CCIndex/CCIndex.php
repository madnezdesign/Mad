<?php
/**
 * Standard controller layout.
 * 
 * @package MadCore
 */
class CCIndex implements IController 
{
  /**
  * Implementing interface IController. All controllers must have an index action.
  */
  public function Index() 
  {  
    global $mad;
    $mad->data['title'] = "The Index Controller";
    $mad->data['main'] = "<h1>The Index Controller</h1>";
  }
}