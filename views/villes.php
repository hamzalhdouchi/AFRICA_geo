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
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-green-600">
                    <li>
                        <a href="../index.php" class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 md:hover:text-green-700">Home</a>
                    </li>
                    <li>
                        <a href="./views/AjouterPayeVille.php" class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 md:hover:text-green-700">Ajouter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $id = $_GET['id'];

    if ($id) {
        $resulte = mysqli_query($connect, "SELECT * FROM paye WHERE id = '$id'");
        $resulte1 = mysqli_query($connect, "SELECT * FROM ville WHERE id_paye = '$id'");

        $qurey = mysqli_fetch_assoc($resulte);
        $qurey1 = mysqli_fetch_assoc($resulte1);
    }
   ?>
    <?php
    if (isset($_GET['modifecation'])) {
        $idd = $_GET['idd'];

        if (!empty($idd)) {
            $result = mysqli_query($connect, "SELECT * FROM `ville` WHERE id=$idd ");
            $quryVille = mysqli_fetch_assoc($result);
            
        } else {
            echo 'erurre';
        }
    }
    if (isset($_POST['modifer'])) {
        
        $id =  $quryVille['id_paye']; 



        $nameVille = $_POST['Ville'];
        $image = $_POST['image'];
        $Description = $_POST['description'];
        $population = $_POST['Population'];
        // var_dump($nameVille,$image,$Description,$population);
        if (!empty($nameVille) && !empty($image) && !empty($Description) && !empty($population)) {
            
                
                $qury = mysqli_query($connect, "UPDATE ville SET 
                name = '$nameVille',
                image = '$image',
                description = '$Description',
                population = '$population'
                WHERE id = '$id'");
?>
                   
<div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800 absolute w-[50vw] top-20 z-50 rounded-lg "  role="alert">
<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
</svg>
<div class="ms-3 text-sm font-medium">
    L'modifecation de ville succès. .
</div>
<button type="button"  onclick="closeAlert()" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
    <span class="sr-only">Dismiss</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
    </svg>
</button>
</div>
<?php
        }else{
            ?>
                <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        entre les donne correct.
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

    <?php
        }
    }
    ?>



    <div class="w-screen h-screen absolute   bg-black bg-opacity-40 flex justify-center ">
        <div class="w-[85vw] h-[70vh] buttom-0 ">
            <div class="relative">
                <div
                    class="block rounded-lg  text-white shadow-secondary-1 dark:bg-surface-dark">
                    <img
                        class="rounded-lg w-[85vw] h-[80vh] mt-6"
                        src=" <?= $qurey['image']; ?>"
                        alt="" />

                    <!-- cards -->
                    <div class="absolute top-0 p-6">
                        <div class="flex justify-around flex-wrap gap-x-16 gap-y-52 w-[80w] h-[70vh] overflow-y-scroll no-scrollbar">

                        <?php
                 if (isset($_POST['supprimer'])) {
                    $id = $_POST['id'];
                    if (!empty($id)) {
                        $qury = mysqli_query($connect, "DELETE FROM `ville` WHERE id=$id ");
                           ?>
                <div id="alert-border-3" class="flex items-center p-4 mb-4  text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800 absolute w-[50vw] top-0 rounded-lg  left-0"  role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ms-3 text-sm font-medium">
                    supprimer de ville succès. .
                </div>
                <button type="button"  onclick="closeAlert()" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <?php
                    } else {
                        echo 'erurre';
                    }
                }
                ?>
                            <?php if (!empty($qurey1)) : 
                            ?>

                                <?php foreach($resulte1 as $row) {
                                    ?>
                                    <div class="h-[40vh] w-[24vw]">
                                        <div class="max-w-sm bg-black border bg-opacity-55 border-gray-200 rounded-lg shadow">
                                            <div class="w-[24vw] h-[20vh]  rounded-lg bg-no-repeat object-fill">
                                                <a href="./views/villes.php?id=<?= $row['ID']; ?>">
                                                    <img class="rounded-t-lg w-full h-full " src="<?= $row['image']; ?>" alt="Image de <?= $row['name']; ?>">
                                                </a>
                                            </div>
                                            <div class="p-5 w-12">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100 dark:text-white">
                                                    <?= $row['name']; ?>
                                                </h5>
                                                <div class="flex gap-2">
                                                    <h5 class="text-white font-extrabold font-sans">Discription:</h5>
                                                    <p class="mb-3 font-mono font-bold text-white "><?= $row['description']; ?></p>
                                                </div>
                                                <div class="flex gap-2">
                                                    <h5 class="text-white font-extrabold font-sans">population:</h5>
                                                    <p class="mb-3 font-mono font-bold text-white"><?= $row['population']; ?></p>
                                                </div>
                                                <div class="flex gap-2">
                                                    <h5 class="text-white font-extrabold font-sans">Capitale:</h5>
                                                    <p class="mb-3 font-mono font-bold text-white"><?=$row['choix']; ?></p>
                                                </div>
                                                <div class="flex gap-2 w-full justify-around">
                                                    <form action="#" method="get">
                                                    <input type="hidden" value="<?= $qurey['id']; ?>" name="id">
                                                        <input type="hidden" value="<?= $row['ID']; ?>" name="idd">
                                                        <button type="submit" name="modifecation" onclick="modification()" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-black bg-white rounded-lg">modifier</button>
                                                    </form>
                                                    <form action="" method="post">
                                                        <input type="hidden" name="id" value="<?= $row['ID'] ?>">
                                                        <button type="submit" name="supprimer" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-black bg-white rounded-lg">
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php else : ?>
                                
                <div id="alert-border-2" class=" w-[30vw] h-12 flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 rounded-lg" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                    Il n'y a pas de ville dans ce pays
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        
                    </button>
                </div> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="relative w-screen h-screen flex justify-center items-center bg-black  bg-opacity-55 hidden" id="modification">
    <form method="post"  class=" relative w-[40vw] mb-28 h-[80vh] bg-white bg-opacity-90 p-10 rounded-xl  shadow-lg">
        <div class="w-full flex justify-end">
            <button class="w-8 h-8 rounded-full font-bold bg-red-300 " onclick="modification()">
                X
            </button>
        </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" value="<?= $quryVille['name']; ?>" name="Ville" id="ville"
                    class="block py-3 px-2 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                    placeholder=" " required />
                <label for="ville"
                    class="absolute text-lg text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-0 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:scale-75 peer-focus:-translate-y-6">
                    Name Ville
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="url" value="<?= $quryVille['image']; ?>" name="image" id="img"
                    class="block py-3 px-2 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                    placeholder=" " required />
                <label for="img"
                    class="absolute text-lg text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-0 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:scale-75 peer-focus:-translate-y-6">
                    Image Ville
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" value="<?= $quryVille['description']; ?>" name="description" id="Description"
                    class="block py-3 px-2 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                    placeholder=" " required />
                <label for="Description"
                    class="absolute text-lg text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-0 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:scale-75 peer-focus:-translate-y-6">
                    Description
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" value="<?= $quryVille['population']; ?>" name="Population" id="population"
                    class="block py-3 px-2 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                    placeholder=" " required />
                <label for="population"
                    class="absolute text-lg text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-0 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:scale-75 peer-focus:-translate-y-6">
                    Population
                </label>
            </div>
            <div class="relative grid md:grid-cols-2 gap-4">
                <div class="flex items-center gap-3">
                    <input type="radio" name="Choix" value="Capital" id="capital" 
                        class="text-green-500 focus:ring-green-400 focus:ring-2">
                    <label for="capital" class="text-black">Capital</label>
                </div>
                <div class="flex items-center gap-3">
                    <input type="radio" name="choix" value="Autre" id="autre" 
                        class="text-green-ring-green-400-500 focus:ring-green-400 focus:ring-2">
                    <label for="autre" class="text-black">Autre</label>
                </div>
            </div>
            <button type="submit" name="modifer"
                class="relative mt-5 w-full py-3 px-6 bg-green-ring bg-green-400 hover:bg-green-ring-green-400 text-black font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-green-300 text-xl transition">
                Submit
            </button>
        </form>
    </div>

                    <script src="../public/js/script.js"></script>
</body>

</html>