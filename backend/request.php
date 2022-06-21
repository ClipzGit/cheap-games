<<<<<<< HEAD
<?php 
if(isset($_POST['SubmitButton'])){ 

    echo '
    <table class="table-auto bg-slate-700 rounded-lg">
    <thead class="bg-slate-800 text-white">
      <tr>
        <th class="p-2">NAME</th>
        <th class="p-2">LOWEST PRICE</th>
        <th class="p-2">REVIEWS</th>
        <th class="p-2">ACTION</th>
      </tr>
    </thead><tbody>';
  //check if form was submitted
  $game_title = $_POST['game_title'];
  $ch = curl_init("https://www.cheapshark.com/api/1.0/deals?title={$game_title}");
=======

<?php 
if(isset($_POST['SubmitButton'])){ 
  //check if form was submitted
  $game_title = $_POST['game_title'];
  $ch = curl_init("https://www.cheapshark.com/api/1.0/games?title={$game_title}");
>>>>>>> f365370d20a61c2bb454d3435381ef48371ea7b6
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);


  curl_close($ch);
  $data = json_decode($response, true);

<<<<<<< HEAD
  $items = array();
  foreach ($data as $game) {

   
    $game_name = $game['title'];
    $game_price = $game['salePrice'];
	  $game_id = $game['gameID'];
    $score = $game['metacriticScore'];
    $image = $game['thumb'];
    $rating = $game['steamRatingText'];
    
echo ' 
<tr class="uppercase">
<form method="POST" id="'.$game_id.'" action="././project.php">
<td class="p-2 bg-red-400 text-red-900 font-bold"><input name="game_name" value="'.$game_name.'" type="text"></td>
<td class="p-2 bg-green-400 text-green-900 font-bold">£'.$game_price.'</td>
<td class="p-2 bg-green-400 text-green-900 font-bold">'.$score.'</td>
<input type="hidden" name="game_image" value="'.$image.'">
<input type="hidden" name="game_rating" value="'.$rating.'">
<input type="hidden" name="game_score" value="'.$score.'">

<td class="p-2 bg-orange-400 text-orange-900 font-bold text-center"> <button type="submit" name="viewDeal" class="uppercase text-orange-900 p-2 bg-orange-500 rounded-tr-full rounded-br-full transition-all font-bold hover:animate-pulse">VIEW</button></td>
</form>
</tr>';
  }  
echo '        </tbody>
</table> ';
  } 
           ?>
=======
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
>>>>>>> f365370d20a61c2bb454d3435381ef48371ea7b6
