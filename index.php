
<?php
error_reporting(E_ERROR);

$title="Peplre";

$coding_image="";



include_once("comp/heading.php");


$type= $_GET["news"];

?>

	<body>

		<!-- Header  for nav-->
		<?php include("comp/nav.php") ?>

	 
			<div style="min-height:600px;background:none;" class="container">		
			<?php
			if(isset($_GET["news"])){
				switch($_GET["news"]){
					case 1:
					include("comp/activeComp/recentnews.php");
					break;
					case 2:
					include("comp/activeComp/independantAuthors.php");
					break;
					case 3:
					include("comp/activeComp/tayyabsBlog.php");
					break;
					case 4:
					include("comp/activeComp/programming.php");
					break;
					case 5:
					include("comp/activeComp/consulting.php");
					break;
 					
				}
 			}else{
				//show recent news
				include("comp/activeComp/home.php");
			}
			?>

		
			</div>
			<?php 
			include("comp/footer.php")
			?>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
