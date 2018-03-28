<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PokéBattle</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
	<?php
session_start();
	spl_autoload_register(function ($class_name) {
		include $class_name . '.php';
	});

//print_r('<pre>'. new Pikachu('Pika') . '</pre>');
//print_r('<pre>'. new Charmeleon('Char') . '</pre>');

	$pika = new Pikachu('Pika');
	$char = new Charmeleon('Char');

	$pokemons = ['Pika' => $pika, 'Char' => $char];

	$selectedPokemon = reset($pokemons);

	print_r($pika->name .' HP '. $pika->health .'<br>');
	print_r($char->name .' HP '. $pika->health .'<br><br>');

	$pika->doAttack('Electric Ring', $char);

	print_r('<br>' . $pika->name .' HP '. $pika->health .'<br>');
	print_r($char->name .' HP '. $char->health .'<br><br>');

	$char->doAttack('Flare', $pika);

	print_r('<br>' . $pika->name .' HP '. $pika->health .'<br>');
	print_r($char->name .' HP '. $char->health .'<br><br>');
	?>
	<div id="scores">
		<?php
			$attackPost = isset($_POST['attack']) ? $_POST['attack'] : null;
			$opponentPost = isset($_POST['opponent']) ? $_POST['opponent'] : null;
			if ($attackPost != null && $opponentPost != null) {
				$selectedPokemon->doAttack($attackPost, $pokemons[$opponentPost]);
				print_r('<br>' . $pika->name .' HP '. $pika->health .'<br>');
				print_r($char->name .' HP '. $char->health .'<br><br>');
				$currentPokemonIndex = array_search($selectedPokemon, $pokemons);

				if ($currentPokemonIndex > count($pokemons)) {
					$selectedPokemon = reset($pokemons);
				}
				else {
					$selectedPokemon = $pokemons[$opponentPost];
				}
			}
		?>
		<h3><?= $selectedPokemon->name ?></h3>
	<form>
		<label for="attacks-dropdown">Attacks: </label>
		<select id="attacks-dropdown" name="attack">
			<?php foreach($selectedPokemon->attacks as $attack) {?>
			<option value="<?= $attack->name ?>"><?= $attack->name ?></option>
			<?php } ?>
		</select>
		<br>
		<label for="opponent">Opponent pokemon: </label>
		<select id="opponent" name="opponent">
			<?php foreach($pokemons as $pokemon) {
			if ($selectedPokemon->name != $pokemon->name) { ?>
				<option value="<?= $pokemon->name ?>"><?= $pokemon->name ?></option>
			<?php }} ?>
		</select>
		<input type="submit" value="Attack">
	</form>
	</div>

	
</body>
</html>

