<?php
// adasdasdasd
class person
{
  protected $fname;

  public function __construct($fname)
  {
    $this->fname = $fname;
  }

  public function getFname()
  {
    return $this->fname;
  }
}
