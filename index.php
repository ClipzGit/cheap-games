<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Cheapest Games Finder</title>
</head>
<body class="bg-slate-800">

<<<<<<< HEAD
<section id="main-container" class="flex flex-col justify-center content-center text-center">
    <div id="top-content" class="mt-2">
        <img src="img/logo.png" class="inline content-center">
        <p class="text-white font-extralight lowercase">Start Scanning for the cheapest games...</p>

        <form method="POST">
            <div id="input-group" class="flex flex-row justify-center">
        <input type="text" id="search" name="game_title" placeholder="Enter Game Title..." class="transition-all hover:animate-none animate-pulse focus:animate-none mt-5 p-3 text-lg bg-slate-700 text-white text-center rounded-tl-full rounded-bl-full">
        <button type="submit" name="SubmitButton" class="uppercase text-white p-4 mt-5 bg-slate-700 rounded-tr-full rounded-br-full transition-all font-bold hover:animate-pulse">Search</button>
    </div>
    </form>


    </div>
</section>

    <section id="game-results" class="mt-5 flex flex-wrap flex-col md:flex-row md:space-x-6 justify-center content-center">

   
    <?php 
    include('./backend/request.php');
    ?>


=======
    <?php 
    include_once('./frontend/header.php');
    ?>

    <section id="game-results" class="mt-5 flex flex-wrap flex-col md:flex-row md:space-x-6 justify-center content-center">

    <?php 
    include('./backend/request.php');
     ?>
>>>>>>> f365370d20a61c2bb454d3435381ef48371ea7b6
    </section>
</body>
</html>