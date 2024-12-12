<?php
require './db/database.php';

$query = 'SELECT * FROM paye INNER JOIN continent ON paye.id_continent = continent.id_continent';
$result = mysqli_query($connect, $query);

if (!$result) {
    die('Erreur dans la requête : ' . mysqli_error($connect));
}
?>
<?php
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    if (!empty($id)) {
        $qury = mysqli_query($connect, "DELETE FROM `paye` WHERE id=$id ");
    } else {
        echo 'erurre';
    }
}
?>
