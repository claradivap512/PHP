<?php
$model = new Film();
$data_film = $model->dataFilm();
?>


<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2><strong>NOW PLAYING</strong></h2>
			</div>
		</div>
        <?php
            foreach ($data_film as $film) {
        ?>
		<div class="row">
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/poster/<?= $film ['poster'] ?>" alt="product-img" />
                        <div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><?= $film ['judul'] ?></h4>
						<button class="btn btn-main btn-small btn-round-full" style="font-size:15px; padding: 8px 15px;"><?= $film ['rating_usia'] ?></button>
					</div>
				</div>
			</div>
			
            <div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
                    <img class="img-responsive" src="images/poster/<?= $film ['poster'] ?>" alt="product-img" />
                        <div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><?= $film ['judul'] ?></h4>
						<button class="btn btn-main btn-small btn-round-full" style="font-size:15px; padding: 8px 15px;"><?= $film ['rating_usia'] ?></button>
					</div>
				</div>
			</div>
            
            <div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
                    <img class="img-responsive" src="images/poster/<?= $film ['poster'] ?>" alt="product-img" />
                        <div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><?= $film ['judul'] ?></h4>
						<button class="btn btn-main btn-small btn-round-full" style="font-size:15px; padding: 8px 15px;"><?= $film ['rating_usia'] ?></button>
					</div>
				</div>
			</div>

		</div>
        <?php
            }
        ?>
	</div>
</section>