<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<div class="row">
				<?php $post_id = get_the_ID();
				if($post_id==10){
					$meta = get_post_custom(10);
					// var_dump($meta);
					foreach ($meta as $key => $value) {
						$last = "_edit";
						$pos = strpos($key,$last);
						if($pos === false){?>

						<div class="col-md-4">
							<p><?php echo $key.' : '.$value[0].'%'; ?></p>
						</div>

					<?php }
					}
				}
	
				?>

			</div><!-- row -->
		<?php the_content();?>
		</div>

	</div>
</div>
					