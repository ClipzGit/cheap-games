<?php 
if(isset($_POST['viewDeal'])){ 
    $gamename = $_POST['game_name'];
    $rating = $_POST['game_rating'];
    $image = $_POST['game_image'];
    $score = $_POST['game_score'];
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body class="bg-slate-800">

    <!--
    <nav id="navigation-container" class="flex flex-row justify-center bg-slate-700">
        <div id="nav" class="p-2 text-white font-bold font-sans space-x-5 my-5">
            <a class="bg-slate-800 p-2 rounded-xl text-3xl hover:animate-pulse transition-all duration-500">Home</a>
            <a class="bg-slate-800 p-2 rounded-xl text-3xl hover:animate-pulse transition-all duration-500">Home</a>
            <a class="bg-slate-800 p-2 rounded-xl text-3xl hover:animate-pulse transition-all duration-500">Home</a>
            
        </div>
    </nav> -->
    
<section id="main-container" class="flex flex-col justify-center content-center text-center">
    <div id="top-content" class="mt-2">
        <h1 class="text-white text-4xl uppercase font-bold font-sans"><?php echo $gamename; ?></h1>

        <!--<p class="text-white font-extralight lowercase">{replace_this_with_image}</p>-->
    
        <!-- Main Content Area -->

        


        <form method="POST">

<section id="deal-container" class="flex flex-row justify-center content-center text-center">

    <div class="align-middle">
        <div class="inline-flex">
            <div class="w-80 h-80">
                <img class="max-h-80 max-w-80" src="<?php echo $image; ?>" alt="batman">
            </div>
            <div class="text-white">
                <p class="text-size">Lego Batman</p>
                <p>Description</p>
                <p>Review:</p>
                

<div id="price-updater" class="flex flex-row">
      <p>Cheapest Price: <span class="text-yellow-500 font-bold font-mono">??1.00</span></p>
</div>

<div id="btn-blocks" class="flex flex-col space-y-2 text-sm">
    <a href="" class="bg-green-400 text-white p-2 rounded-xl uppercase font-bold"><?php echo $rating; ?></a>
    <a href="" class="bg-red-400 text-white p-2 rounded-xl uppercase font-bold">Meta Critic: <?php echo $score; ?></a>
</div>

              
            </div>
        </div>
    </div>

    <!--<div class="max-w-xs max-h-xs flex flex-row">
        <img src="https://s1.gaming-cdn.com/images/products/1605/orig-fallback-v1/lego-batman-the-videogame-pc-game-steam-cover.jpg?v=1646122221" alt="batman">
        </div>-->

</section>

<div id="table-container" class="flex flex-row justify-center content-center">
    <table class="table-auto bg-slate-700 rounded-md">
        <thead class="bg-slate-800 text-white">
          <tr>
            <th class="p-2">CHEAPEST DEAL</th>
            <th class="p-2">ACTION </th>
          </tr>
        </thead><tbody>
            <tr class="uppercase">
                <td class="p-2 bg-green-400 text-green-red-900 font-bold">{DEAL_GOES_HERE}</td>
                <td class="p-2 bg-orange-400 text-orange-900 font-bold text-center">VISIT</td>
                </tr> </tbody>
                </table>
                </div>


            <!-- Place content here -->
      
    </div>
    </form>

    <!-- End Content -->


    </div>
</section>
</body>
</html>