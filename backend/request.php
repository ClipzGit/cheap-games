
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