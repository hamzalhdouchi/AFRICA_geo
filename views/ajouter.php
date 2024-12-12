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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Gio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-x-hidden relative">
    <div>
    <nav class="border-gray-200 bg-green-600 block w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-12" src="./public/img/logo.png" alt="logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Africa Gio</span>
        </a>
        <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-green-600">
                <li><a href="./index.php" class="block py-2 px-3 text-white hover:text-green-900">Home</a></li>
                <li><a href="./views/ajouter.php" class="block py-2 px-3 text-white hover:text-green-900">Ajouter</a></li>
                <li><a href="./views/payes.php" class="block py-2 px-3 text-white hover:text-green-900">Payes</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-green-900">Ville</a></li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="bg-[url('./public/img/africa.png')] bg-cover bg-center w-[70vw] h-[70vh] rounded-xl flex justify-center items-center mb-10">
            <div class="text-[7vw] font-semibold text-center">
                <h1 class="text-white">Welcome To</h1>
                <h1 class="text-green-900">AFRICA</h1>
            </div>
        </div>
    </div>
</section>
<section class="flex flex-col items-center">
    <div class="w-screen h-20 flex justify-center items-center font-bold text-[32px]">
        <h1>Pays</h1>
    </div>
    <div class="w-[90vw] flex flex-wrap gap-16 justify-center">
    <?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="max-w-sm bg-green-800 border border-gray-200 rounded-lg shadow w-[23vw]">
        <div class="w-[22,8vw] h-[29vh] rounded-lg bg-no-repeat object-fill">
            <a href="./views/villes.php?id=<?= $row['id']; ?>">
                <img class="rounded-t-lg w-full h-full" src="<?= $row['image']; ?>" alt="Image de <?= $row['name']; ?>">
            </a>
        </div>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100 dark:text-white"><?= $row['name']; ?></h5>
            <div class="flex gap-2">
                <h5 class="text-white font-extrabold font-sans">Population :</h5>
                <p class="mb-3 text-white font-mono font-bold"><?= $row['population']; ?></p>
            </div>
            <div class="flex gap-2">
                <h5 class="text-white font-extrabold font-sans">Langue :</h5>
                <p class="mb-3 font-mono font-bold text-white"><?= $row['id']; ?></p>
            </div>
            <div class="flex gap-2">
                <h5 class="text-white font-extrabold font-sans">Continent :</h5>
                <p class="mb-3 font-mono font-bold text-white"><?= $row['name_continent']; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
<div class="flex gap-2 w-full justify-around">
    <form action="#" method="get">
        <input type="hidden" value="<?= $row['id']; ?>" name="idd">
        <button type="submit" name="modifecation" onclick="modification()" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-green-600 bg-white rounded-lg">modifier</button>
    </form>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <button type="submit" name="supprimer" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-green-600 bg-white rounded-lg">
            Supprimer
        </button>
    </form>
</div>
<div class="w-screen h-screen absolute z-20 bg-opacity-50 hidden bg-black flex justify-center items-center" id="modification">
    <form method="post" action="./index.php" class="w-[40vw] mb-28 h-[80vh] bg-white bg-no-repeat bg-center bg-cover p-10 rounded-xl shadow-lg">
        <input type="hidden" value="<?= $qurypaye['id'] ?>" name="id_paye" />
        <!-- Ajout des champs pour modification -->
    </form>
</div>

