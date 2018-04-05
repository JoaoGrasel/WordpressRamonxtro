<?php /*Template Name: Page of Heisenberg */ 


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		    <figure>
			<div align="center">
		        	<video class="video" preload="metadata" >
		        	    	<source src="/wordpress/wp-content/uploads/2018/04/Breaking-Bad-Entire-Series-in-1-Minute.mp4" type="video/mp4">
		       		</video>
			</div>
		    </figure>

		        <div class="video-menu" align="center">
		            <img id="play" src="/wordpress/wp-content/uploads/2018/04/media-play.svg" class="icons item" width="36px">
		            <img id="pause" src="/wordpress/wp-content/uploads/2018/04/media-pause.svg" class="icons item" width="36px">
		            <img id="stop" src="/wordpress/wp-content/uploads/2018/04/media-stop.svg" class="icons item" width="36px">
		        </div>


		    <script>
			window.onload = function() {
			    document.getElementsByTagName('video')[0].onclick = function(){
				var video = document.getElementsByTagName('video')[0];
				if(video.paused)
				    video.play();
				else
				    video.pause();
			    }
			    
			    document.getElementById("pause").onclick = function() {
				document.getElementsByTagName('video')[0].pause();
			    };

			    document.getElementById("play").onclick = function() {
				document.getElementsByTagName('video')[0].play();
			    };


			    document.getElementById("stop").onclick = function() {
				document.getElementsByTagName('video')[0].currentTime=0;
				document.getElementsByTagName('video')[0].pause();
			    };

			};
		    </script>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
