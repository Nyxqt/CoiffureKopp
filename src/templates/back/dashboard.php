<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>

<?php echo date("d/m/Y") ?>


<?php 
//$date = new DateTime();

// $formatter = new IntlDateFormatter(
//     'fr_FR', 
//     IntlDateFormatter::FULL,
//     IntlDateFormatter::NONE,
//     'Europe/Paris',
//     IntlDateFormatter::GREGORIAN,
//     );
// echo $formatter -> format($date);

// Formatteur de date complet avec pattern défini
$fmt = new IntlDateFormatter(
    'fr-FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    'dd/MM/yyyy HH:mm'
);
echo $fmt->format(time()); //time() renvoie le timestamp courant

echo '<br><br><br>';

$date = new DateTime(); // new DateTime() crée un nouvel objet date avec la date et l'heure courante
echo $date->format('H:m'); // on peut directement indiquer le formattage souhaité, mais il n'y a pas de gestion des fuseaux horaires.


echo '<br><br><br>';

// Formatteur de date complet qui renvoie la date sous forme "lundi 12 décembre 2022"
$formatter = new IntlDateFormatter(
    'fr_FR', 
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    );
echo $formatter -> format($date);

echo '<br><br><br>';

$datechr=new DateTime("12-12-2022");

echo $formatter -> format($datechr);
?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>