<?php

class template
{
  private $i=-1;
  public function have_post()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM post');
    $sql->execute();
    $row = $sql->rowCount();
    return $this->i<--$row;

  }

  public function the_post()
  {
    $this->i++;
  }

  public function post_title()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM post');
    $sql->execute();
    $fetch=$sql->fetchAll();
    return $fetch[$this->i]['title'];
  }

  public function post_content()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC');
    $sql->execute();
    $fetch=$sql->fetchAll();
    return $fetch[$this->i]['content'];

  }
}
