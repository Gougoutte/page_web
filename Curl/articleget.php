<?php

require 'configuration/curlconf2.php';

$get_data = callAPI1('GET', 'localhost:3000/article', false);
$response = json_decode($get_data, true);

if ($response["message"] == "Récupération des articles réussi") {
    $nbr = count($response["articles"]);
    
    for($i = 0; $i<$nbr; $i++) {
        $noma = $response["articles"][$i]["Nom"];
        $prix = $response["articles"][$i]["Prix"];
        $description = $response["articles"][$i]["Description"];
        $categorie = $response["articles"][$i]["Categorie"];
		$urla = $response["articles"][$i]["URL"];

echo '
	<div class="col-lg-2 col-xs-12 col-md-4 p-2 bloc my-2">
		<article class="card">
			<img src="'.$urla.'" class="objet">
			<div class="card-body">
				<h5>'.$noma.'</h5>
				<p>'.$description.'</p>
				<form action="./addPanier.php" method="POST">
				<input hidden  type="text" name="article" value="'. $noma .'" >
				quantité:
				<input type="number" min="1" name="quantite" id="quantite" >
				<button  class="btn btn-primary">Ajouter au panier</button>
				</form>
				<p>'.$prix.' €</p>
			</div>
		</article>
	</div>

	<div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2"> </div>
';
    }
} else {
	echo $response["message"];
}

?>
