			<aside>
				<div id="courses">
					<h2 class="heading">Рекомендуемые товары</h2>
					<div style="clear: both"><br></div>
				<!-- Курс -->
					

<div class="cycle-slideshow"
    data-cycle-fx=carousel
	data-cycle-carousel-visible=4
    data-cycle-carousel-vertical=true
	
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"	
	data-cycle-slides="div.course"
    >
	 <?php foreach ($sliderProducts as $sliderItem): ?>
							<div class="course">
							<img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="">
							<em style="float: left;"><?php echo $sliderItem['price']; ?> рублей</em><br>
							<a href="/shop/<?php echo $sliderItem['id'];?>"><span style="float: left;"><?php echo $sliderItem['name']; ?></span></a>
						</div>
						<div style="clear: both"><br></div></a>
	<?php endforeach; ?>
</div>
	

 <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
				
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.scrollVert.js"></script>
			</aside>
			<div style="clear: both"><br></div>
			
			
					