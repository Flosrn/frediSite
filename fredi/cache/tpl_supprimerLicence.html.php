<?php $this->_tpl_include('header.html'); ?>
<?php
$id_demandeur = $_SESSION['id_demandeur'];
$idAdherent = $_GET['num'];

supprimerAdherent($idAdherent);

header('location: licence.php');
?>
<?php $this->_tpl_include('footer.html'); ?>