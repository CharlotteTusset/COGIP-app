<?php
  require "controllers/partials/partial.control.php";
  require "views/partials/head.view.php";

  switch ($_GET['page']) {
    case 'detailfacture':
      require "controllers/detailfacture.control.php";
      break;
    case 'detailsociete':
      require "controllers/detailsociete.control.php";
      break;
    case 'detailcontact':
      require "controllers/detailcontact.control.php";
      break;
    case 'societe':
      require "controllers/societe.control.php";
      break;
    case 'factures':
      require "controllers/factures.control.php";
      break;
    case 'annuaire':
      require "controllers/annuaire.control.php";
      break;
    case 'clients':
      require "controllers/clients.control.php";
      break;
    case 'fournisseurs':
      require "controllers/fournisseurs.control.php";
      break;
    default:
      require "controllers/dashboard.control.php";
      break;
  }
 ?>
