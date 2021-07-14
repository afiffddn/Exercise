<?php
if(isset($_GET['a']))
{
  $a=$_GET['a'];
  switch($a)
{
  case 1:
  include 'new_user.php';
  break;

  case 2:
  include 'user_report.php';
  break;

  case 3:
  include 'new_book.php';
  break;

  case 4:
  include 'book_report.php';
  break;

  case 5:
  include 'contact.php';
  break;

   }
}
else
{
  include 'admin_home.php';
}
?>