<?php
   include "contor.php";
   $xslDoc = new DOMDocument();
   $xslDoc->load("track.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("track.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
?>
