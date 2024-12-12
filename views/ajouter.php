<?php
require '../db/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden">
    <nav class=" border-gray-200 bg-green-600 block w-screen">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="w-12" src="../public/img/logo.png" alt="logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Africa Gio</span>
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-green-600">
                    <li>
                        <a href="../index.php" class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 md:hover:text-orange-700">Home</a>
                    </li>
                    <li>
                        <a href="./views/AjouterPayeVille.php" class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 md:hover:text-orange-700">Ajouter</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 md:hover:text-orange-700">Payes</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 md:hover:text-orange-700">Ville</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_POST['ajouter'])) {
        echo 'vdjvdfvjdsj';

        $namePaye = $_POST['payes'];
        $imagepath = $_POST['image'];
        $langage = $_POST['Lang'];
        $Bestfood = $_POST['food'];
        $contient = $_POST['continent'];
        $population = $_POST['popilation'];
        if (!empty($namePaye) && !empty($langage) && !empty($Bestfood) && !empty($contient) && !empty($population)) {

            $qury = mysqli_query($connect, "INSERT INTO paye(name, image ,langue, food, population) VALUES ('$namePaye','$imagepath','$langage', '$Bestfood','$population')");
            if ($qury) {
    ?>
                <div class="w-[100vw] h-24 flex justify-center absolute">
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                    </div>
                <?php
            }
        } else {
                ?>
                <div class="w-screen h-auto flex justify-end absolute">
                    <div class="p-4 mr-8 decoration-slice text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-[30vw] mt-5 " role="alert">
                        <span class="font-medium">pas de donne en postion</span>
                    </div>
                </div>

        <?php
        }
    }
        ?>
        <div class="flex w-screen justify-around h-screen items-center">
            <div class="w-[40vw] h-[80vh]  bg-[url('../public/img/AFRICA-ajout.png')] bg-no-repeat object-cover">

            </div>
            <form method="post" class="w-[40vw] mb-16 h-[80vh]  bg-no-repeat bg-center object-cover bg-opacity-90 p-10 rounded-lg shadow-sm shadow-black ">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="payes" id="payes" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " required />
                    <label for="payes" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name payes</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="url" name="image" id="image" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                    <label for="image" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">image Ville</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="Lang" id="Lang" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                    <label for="Lang" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Longage</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="food" id="food" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " required />
                    <label for="food" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Best Food</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <select name="continent" class="w-full h-9 rounded-xl bg-inherit text-black text-lg border-solid border-2 border-white" name="Continent" id="Continent">
                        <option value="select">Select continent</option>
                        <option value="Africa">Africa</option>
                    </select>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="popilation" id="popilation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-white appearance-none dark:text-black d  focus:outline-none focus:ring-0 focus:borde-white peer" placeholder=" " required />
                    <label for="popilation" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">popilation</label>
                </div>
                <input type="submit" name="ajouter" value="submit" class="text-black bg-green-600 hover:bg-green-400 shadow-sm shadow-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center text-xl">
            </form>
        </div>
        <div class="flex w-screen justify-around h-screen items-center">
           
                <?php

                if (isset($_POST['AjouterVille'])) {
                    $nameVille = $_POST['ville'];
                    $image = $_POST['img'];
                    $Description = $_POST['Description'];
                    $population = $_POST['population'];
                    $paye = $_POST['paye'];
                    $choix = $_POST['choix'];
                    if (!empty($nameVille) && !empty($image) && !empty($Description) && !empty($population) && !empty($choix) && !empty($paye)) {
                        $qury = mysqli_query($connect, "INSERT INTO ville(name, image ,description, population, choix ,id_paye ) VALUES ('$nameVille','$image','$Description', '$population','$paye','$paye')");
                    } else {
                        echo 'erurre';
                    }
                }
                ?>

                <form method="post" class="w-[40vw] mb-16 h-[85vh]  bg-no-repeat bg-center object-cover bg-opacity-90 p-10 rounded-lg shadow-sm shadow-black">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="ville" id="ville" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="ville" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Ville</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="url" name="img" id="img" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="img" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">image Ville</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="Description" id="Description" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="description" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="population" id="population" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="population" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">population</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <select class="w-full h-9 rounded-xl bg-inherit text-black text-lg border-solid border-2 border-white" name="paye" id="Continent">
                            <option>Select paye</option>
                            <option value="1">MORROCO</option>
                            <option value="2">mali</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full  group">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <!-- Option Capital -->
                            <div class="relative z-0 w-full  group flex items-center text-lg gap-4">
                                <input type="radio" name="choix" value="Capital" id="capital" required />
                                <label for="capital" class="text-black ">Capital</label>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="popilation" id="popilation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:black-white d  focus:outline-none focus:ring-0 focus:borde-white peer" placeholder=" " required />
                        <label for="popilation" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">popilation</label>
                    </div>
                    <button type="submit" name="AjouterVille" class="text-white bg-green-600 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center text-xl">Submit</button>
                </form>
                <div class="w-[40vw] h-[80vh] mb-24  bg-no-repeat object-cover">
                <img class="w-full h-full  rounded-full" src="../public/img/image.png" alt="">
            </div>

            </div>
            
        </div>

</body>

</html>