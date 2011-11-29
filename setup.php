<?
WaxEvent::add("cms.use_format_set", function(){
  $controller = WaxEvent::data();
  if($controller->use_format == "xml") header("Content-Type: application/xml");
});
?>