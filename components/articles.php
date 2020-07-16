
		<div   class="wrapper">
			<div id="main-content">
				<div id="main-content article">
					<div id="guts" class="contactus">
						<div class="articlebutttons">
							<a href="#">ALL</a>
							<a href="#">Business</a>
							<a href="#">Technology</a>
							<a href="#">Economy</a>
							<a href="#">Health</a>
							<a href="#">Others</a>
						</div>

						<div class="articleslideshow">
							<img class="mySlides" src="./images/image2.png">
							<img class="mySlides" src="./images/image3.png">
							<img class="mySlides" src="./images/image4.png">
							<img class="mySlides" src="./images/youtubeicon.webp">
						</div>

						<div class="articlearticles">
							<div class="articlecategory"><h3> Heading1</h3><div>ABC</div></div>
							<div class="articlecategory"><h3>Heading2</h3><div>ABC</div></div>
							<div class="articlecategory"><h3>Heading3</h3><div>ABC</div></div>
							<div class="articlecategory"><h3>Heading4</h3><div>ABC</div></div>
						</div>
				    </div>
				</div>
			</div>               
		</div>

<script type="text/javascript">
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</html>