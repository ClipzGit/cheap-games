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
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);


  curl_close($ch);
  $data = json_decode($response, true);

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
