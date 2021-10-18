<?php
   header("Content-type: text/html; charset=utf-8");
   echo "<b>Summe</b> der gesendeten Daten aus PHP-Datei: "
      . (doubleval($_POST["zahl1"]) + doubleval($_POST["zahl2"]));
?>