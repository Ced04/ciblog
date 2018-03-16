
	<div class="container">
		<h2><?= $title ?></h2>
		<?php
			foreach ($posts as $post) {
				$date = date_create($post['created_at']);
				echo "<div class='panel panel-default'>";
					echo "<div class='panel-heading'>";
						echo '<h3>'.$post['slug'].'<small class="pull-right"> Posted at : '.date_format($date, "M d, Y h:i A").'</small></h3>';
					echo "</div>";
					echo "<div class='panel-body'>";
						echo '<h5>'.$post['body'].'</h5>';
					echo "</div>";
					echo "<div class='panel-footer'>";
						echo '<a class="btn btn-default" id="readBtn" href='.site_url("posts/".$post['id']).'>Read More</a>';
					echo "</div>";
				echo "</div>";
			}
		?>
