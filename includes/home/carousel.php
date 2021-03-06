<!-- Carousel
================================================== -->
<div id="Carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
        <li data-target="#Carousel" data-slide-to="1"></li>
        <li data-target="#Carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/slide1.png" alt="Slide 1">

            <div class="container">
                <div class="carousel-caption">
                    <img class="carousel-imgresponsive" src="img/textlogo.png" alt="textlogo">
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide2.png" alt="Slide 2">

            <div class="container">
                <div class="carousel-caption" style="margin-bottom: 50px;">
                    <img class="carousel-imgresponsive" src="img/textdownload.png" alt="Download Game text">
                    <p></p>
                    <p><a class="btn btn-lg btn-success" href="/includes/Downloads/Super_Spaceship_Adventure-0.10.2-BETA.jar" role="button"><span
                                class="glyphicon glyphicon-download-alt"></span></a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide1.png" alt="Slide 3">

            <div class="container">
                <div class="carousel-caption">
                    <img class="carousel-imgresponsive" src="img/top-player.png" alt="Top Player">
                    <p>
                                       
                 <?php
	
					include "includes/sqllogin.php";
 
					$result = mysqli_query($con,"SELECT `PlayerName`, `Distance` FROM `Top Player` ORDER BY `Distance` DESC LIMIT 1");
		
					//Build Result String

					
					
					// Insert a new row in the table for each person returned
					while($row = mysqli_fetch_array($result))
					{
					
						echo $row['PlayerName'];
						echo " - ";
						echo $row['Distance'];
						echo " Metres";
						
					}
					// Used for debugging purposes. All fine at the moment!!
					// echo "Query: " . $result . "<br />";
					mysqli_close($con);
					?>
					
				</p>


                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#Carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#Carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- /.carousel -->