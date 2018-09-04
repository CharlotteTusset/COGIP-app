<?php
require "controllers/partials/partial.control.php";
sessionCheck();
require "views/partials/head.view.php";
if (isset($_POST['delete3'])) {
  delete("personnes", "idpersonnes");
}
require "models/clients.model.php";
require "views/clients.view.php";
 ?>
