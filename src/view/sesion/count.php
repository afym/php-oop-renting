<?php session_start(); ?>
<?php include_once '/../template/header.phtml'; ?>

<?php 

$clicks = 0;

if (isset($_SESSION['clicks'])) {
    $clicks = $_SESSION['clicks'];
}

?>

<p>Has hecho <strong><?php echo $clicks ?></strong> clicks</p>
<a href="/oop/src/application/sesion/contador.php">click</a>
<?php include_once '/../template/footer.phtml'; ?>