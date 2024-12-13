<?php
require '../db/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body class="overflow-hidden">
<nav class=" border-gray-200 bg-green-600 block w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-12" src="../public/img/logo.png" alt="logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Africa Gio</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
        <nav class=" border-gray-200 bg-green-600 block w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-12" src="../public/img/logo.png" alt="logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Africa Gio</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">

<nav class=" border-gray-200 bg-green-600 block w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-12" src="../public/img/logo.png" alt="logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Africa Gio</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">

        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-green-600">
    <li>
        <a href="../index.php" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 md:hover:text-green-700">Home</a>
    </li>
    <li>
        <a href="./views/AjouterPayeVille.php" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 md:hover:text-green-700">Ajouter</a>
    </li>
</ul>

<?php
$id = $_GET['id'];

if ($id) {
    $resulte = mysqli_query($connect, "SELECT * FROM paye WHERE id = '$id'");
    $resulte1 = mysqli_query($connect, "SELECT * FROM ville WHERE id_paye = '$id'");

    $qurey = mysqli_fetch_assoc($resulte);
    $qurey1 = mysqli_fetch_assoc($resulte1);
}
?>



