<?php
include("Genera_codice_univoco.php");
$a = new Genera_codice_univoco("import_file");
echo $a->getCodUnivoco();