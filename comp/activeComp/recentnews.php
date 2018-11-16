<?php

$recent="https://socialstation.info/newsv2/recent";
			$data=  file_get_contents($recent);
			$data_r= json_decode($data,true);
			$recent_news_data= $data_r["data"];

			// foreach($recent_news_data as $n){
			//  	echo $n["Title"];
			// }

?>

	<!-- section -->
    <div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Recent Posts</h2>
						</div>
					</div>


                    <?php foreach($recent_news_data as $n):?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $n["UrlToImage"] ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html"><?php echo $n["Source"] ?></a>
									<span class="post-date"><?php echo $n["CrawlDate"]?></span>
								</div>
								<h3 class="post-title"><a target="_blank" href="<?php echo $n["Url"] ?>"><?php echo $n["Title"] ?></a></h3>
							</div>
						</div>
					</div>
                    <!-- /post -->
        <?php endforeach;?>
                    

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->