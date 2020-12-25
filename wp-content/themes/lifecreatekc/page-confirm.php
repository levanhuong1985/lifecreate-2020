<?php
  global $URL_G;
 
  if($URL_G[0]=="contact"){
    get_template_part( '/../../../template_contact/confirm' );
  }else if($URL_G[0]=="inquiry"){
    get_template_part( '/../../../training/confirm' );
  }
  else
  {
    get_template_part( '/../../../template_entry/confirm' );
  }
  
?>