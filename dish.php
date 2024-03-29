<?php

define("TITLE", "Menu | Franklin's Fine Dining");

include('includes/header.php');

function strip_bad_chars($input)
{
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
	return $output;
}
if (isset($_GET['item'])) {
	$menuItem = strip_bad_chars($_GET['item']);
	$dish = $menuItems[$menuItem];
}
function suggestedTip($price, $tip)
{
	$totalTip = $price * $tip;
	$values = preg_split("/\./", strval($totalTip));

	echo $values[0] . "." . checkDecimal($values[1]);
}

function checkDecimal($num)
{
	if (strlen($num) > 2) {
		return substr($num, 0, 1);
	} elseif (strlen($num) == 2) {
		return $num;
	} elseif (strlen($num) == 1) {
		return $num . "0";
	} else {
		return "00";
	}
}

?>
<hr>
<div id="dish">
	<h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
	<img class="mb-5" src="img/food/<?php echo $dish["img"]; ?>.jpg" alt="<?php echo $dish["title"]; ?>">
	<p><?php echo $dish["blurb"]; ?></p>
	<br>
	<p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
	<p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
</div>
<hr>
<a href="menu.php" class="btn btn-secondary text-light">&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>