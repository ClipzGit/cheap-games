<?php
if(isset($_POST['SubmitButton'])){ 
  //check if form was submitted
  $game_title = $_POST['game_title'];
  $ch = curl_init("https://www.cheapshark.com/api/1.0/games?title={$game_title}");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);


  curl_close($ch);
  $data = json_decode($response, true);


}    
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Cheapest Games Finder</title>
</head>
<body class="bg-slate-800">

    <section id="main-container" class="flex flex-col justify-center content-center text-center">
        <div id="top-content" class="mt-2">
            <h1 class="text-white text-6xl font-sans font-bold">Cheap Games</h1>

            <form method="POST">
            <input type="text" id="search" name="game_title" placeholder="Enter Game Title..." class="transition-all hover:animate-pulse focus:animate-pulse mt-5 w-1/5 p-4 text-lg bg-slate-700 text-white text-center rounded-full">
            <button type="submit" name="SubmitButton" class="uppercase text-white p-4 mt-5 bg-slate-700 rounded-xl transition-all font-bold hover:animate-pulse">View</button>
            </form>


        </div>
    </section>


    <section id="game-results" class="mt-5 flex flex-wrap flex-col md:flex-row md:space-x-6 justify-center content-center">

    <?php 
if(isset($_POST['SubmitButton'])){ 
  //check if form was submitted
  $game_title = $_POST['game_title'];
  $ch = curl_init("https://www.cheapshark.com/api/1.0/games?title={$game_title}");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);


  curl_close($ch);
  $data = json_decode($response, true);

  foreach ($data as $game) {
    
echo ' 
<div id="card-body" class="flex flex-col mb-4 items-center p-6 space-y-6 rounded-3xl bg-slate-600 border-4 border-slate-400 shadow-md shadow-black dark:shadow-sm dark:shadow-gray-400 md:w-1/4">
   <h5 class="text-2xl font-bold text-white uppercase font-sans">'.$game['external'].'</h5>

   <div id="thumbnail" class="">
     <img src="'.$game['thumb'].'" width="120" height="45" alt="">
   </div>
   <p class="text-md text-white font-light">
     Lowest Price: <span class="text-green-500 uppercase font-bold">'.$game['cheapest'].'</span>
   </p>
   <a href="" class="uppercase text-white p-4 mt-5 bg-slate-700 rounded-xl transition-all font-bold hover:animate-pulse">View</a>
</div>';
  }  

  } 
           ?>
    </section>
</body>
</html>