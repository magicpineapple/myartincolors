<?php

require __DIR__ . '/autoload.php';

$page = new Page('Home');
$page->addScript('index');

$page->template->renderTop();
?>

<section class="section">
	<div class="container">
		<div id="art-gallery" class="gallery">

			<?php
			$files = scandir('images/art');
			foreach ($files as $file) {
				//do your work here
				echo($file);
			}
			?>

		</div>
	</div>
</section>

<?php

$page->template->renderBottom();
