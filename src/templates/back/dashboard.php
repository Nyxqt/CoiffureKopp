<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>

<?php echo date("d/m/Y") ?>


<?php $date = new DateTime();

$formatter = new IntlDateFormatter(
    'fr_FR', 
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    );
echo $formatter -> format($date);?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>