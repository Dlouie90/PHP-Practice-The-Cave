<?php
define("TITLE", "Team | Franklin's Fine Dining");

include('includes/header.php');
?>

<div id="team-members" class="cf">

	<h1>Our Team at The Cave's</h1>
	<p>We're small, but large and in charge. The Cave has been here since the beginning of mankind, and we're proud of it! When you get the team together, you never know what can happen. But you can count on one thing: <strong>The best food you've ever had. Ever.</strong></p>
	<hr>
	<?php foreach ($teamMembers as $member) { ?>

		<div class="member">
			<img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
			<h2><?php echo $member["name"]; ?></h2>
			<p><?php echo $member["bio"]; ?></p>
		</div>

	<?php } ?>

</div>
<hr>
<?php include('includes/footer.php'); ?>