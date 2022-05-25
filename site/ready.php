<?php namespace ProcessWire;
$wire->addHookBefore('Page::add', function($event) {
bd($event);
  /*$page = $event->объект; 
  $change = $event->аргументы ( 0 );
  if ( $page->template == 'order' && $change == 'order_status' ) {
     // выполнить некоторый код, когда "order_status" изменяется на страницах "order".
  }*/
});
