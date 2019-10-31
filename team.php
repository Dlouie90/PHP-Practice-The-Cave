<?php
define("TITLE", "Team | Franklin's Fine Dining");

include('includes/header.php');
?>

<h1 class="text-center">Our Team at The Cave's</h1>
<p>We're small, but large and in charge. The Cave has been here since the beginning of mankind, and we're proud of it! When you get the team together, you never know what can happen. But you can count on one thing: <strong>The best food you've ever had. Ever.</strong></p>
<hr>

<div id="team-members" class="cf d-flex flex-row flex-wrap justify-content-around">


	<?php foreach ($teamMembers as $member) { ?>

		<div class="member card">
			<img class="card-img-top" src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
			<div class="card-body">
				<h2 class="text-center"><?php echo $member["name"]; ?></h2>
				<p class="card-text"><?php echo $member["bio"]; ?></p>
			</div>
		</div>

	<?php } ?>

</div>
<hr>
<?php include('includes/footer.php'); ?>