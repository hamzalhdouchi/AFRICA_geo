
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Gio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-x-hidden">
<nav class="border-gray-200 bg-green-600 block w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-12" src="../public/img/logo.png" alt="logo">
            <span class="self-center text-2xl font-semibold text-white">Africa Gio</span>
        </a>
        <ul class="flex space-x-8">
            <li><a href="../index.php" class="text-white hover:text-orange-700">Home</a></li>
            <li><a href="./forms.html" class="text-white hover:text-orange-700">Ajouter</a></li>
            <li><a href="#" class="text-white hover:text-orange-700">Pays</a></li>
            <li><a href="#" class="text-white hover:text-orange-700">Ville</a></li>
        </ul>
    </div>
</nav><form action="processPays.php" method="post">
    <label for="payes">Nom du Pays</label>
    <input type="text" name="payes" id="payes" required>

    <label for="image">Image</label>
    <input type="url" name="image" id="image">

    <label for="Lang">Langue</label>
    <input type="text" name="Lang" id="Lang">

    <label for="food">Meilleure Cuisine</label>
    <input type="text" name="food" id="food" required>

    <label for="continent">Continent</label>
    <select name="continent" id="continent">
        <option value="Africa">Afrique</option>
        <option value="Europe">Europe</option>
    </select>

    <label for="popilation">Population</label>
    <input type="number" name="popilation" id="popilation" required>

    <button type="submit" name="ajouter">Ajouter</button>
</form>

