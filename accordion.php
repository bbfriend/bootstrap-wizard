<?php
	$config = array(
		"activeIndex" => 1,
		"bodyClass" => "accordion-wiz"
	);

	include("template/head.php");
?>



<!-- Top Block -->
<div id="topBlock" class="jumbotron topBlock-inner">
	<?php bsRows(); ?>
		<h2>Collapse (Accordion) Generator</h2>

		<blockquote>
			<p>Flexible plugin that utilizes a handful of classes for easy toggle behavior.</p>
			<footer><cite><a href='http://getbootstrap.com/javascript/#collapse' target='_blank'>getbootstrap.com</a></cite></footer>
		</blockquote>

		<p class='desc'>Use an accordion to hide and display content panels one at a time; opening one panel closes the others.</p>
	<?php end_bsRows(); ?>
</div>
<!-- /Top Block -->

<!-- Main Content -->
<main>
	<?php bsRows(); ?>
		
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo sem, aliquam quis nisl et, auctor dapibus nibh. Donec interdum mattis mauris, ac tincidunt augue pulvinar aliquet.</h3>

		<!-- "How Many" form -->
		<form action='accordion.php' method='post' onsubmit='accordion.updateSet(); return false;' id='howmany' class='form-inline sep-bottom'>
			<div class='form-group'>
				<label for="howmany-accordions">How many accordion items do you need?</label>
    			<input type="number" class="form-control" id="howmany-accordions" min="1" max="99" step="1" maxlength="2">
			</div>

			<input type='submit' class='btn btn-default' value='Update' />
		</form>
		<!-- /"How Many" form -->

		<!-- Content form -->
		<form action='accordion.php' method='post' onsubmit='accordion.generate(); return false;' id='accordion-content' class='form-horizontal'>
		</form>
		<!-- /Content form -->

		<div id="output" class="sep-top" style="display:none">
			<!-- Code Output -->
			<div id="code-container"></div>

			<!-- Preview -->
			<div id="preview"></div>
		</div>

	<?php end_bsRows(); ?>

</main>



<?php
	include("template/footer.php");
?>