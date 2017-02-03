<!DOCTYPE html>
<html>
	<head>
		<title>Masonry block test</title>
		<script src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js"></script>
		<style>
			.grid {
				max-width: 1500px;
				margin: 0 auto;
				width: 100%;
			}
			
			.grid-item {
				max-width: 500px;
				min-width: 200px;
				margin: 0;
				width: 100%;
			}
			
			.grid-item img {
				width: 100%;
				height: auto;
			}
			
			@media screen and (max-width: 1500px){
				.grid-item {
					width: 33.33%;
				}
			}
			
			@media screen and (max-width: 1000px){
				.grid-item {
					width: 50%;
				}
			}
			
			@media screen and (max-width: 500px){
				.grid-item {
					width: 100%;
				}
			}
		</style>
	</head>
	<body>
		<div class="grid">
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(2, 5); ?>00/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
			<div class="grid-item">
				<img src="http://lorempixel.com/500/<?php echo rand(200, 500); ?>/" />
			</div>
		</div>
		<script>
			var elem = document.querySelector('.grid');
			var msnry = new Masonry( elem, {
			  // options
			  itemSelector: '.grid-item',
			});
		</script>
	</body>
</html>