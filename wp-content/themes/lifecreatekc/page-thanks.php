<?php
  global $URL_G;
  if($URL_G[0]=="contact"){
    get_template_part( '/../../../template_contact/thanks' );
  
  }else if($URL_G[0]=="inquiry"){
    get_template_part( '/../../../training/thanks' );
  }else
  {
    get_template_part( '/../../../template_entry/thanks' );
  }
  
?>

