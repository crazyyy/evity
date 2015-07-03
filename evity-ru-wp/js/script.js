function setEqualHeight(columns) {
	var tallestcolumn = 0;
	columns.each(function(){
		currentHeight = jQuery(this).height();
		if(currentHeight > tallestcolumn) {
			tallestcolumn = currentHeight;
		}
	});
	columns.height(tallestcolumn);
}


jQuery(document).ready(function($) {
	
	$('#nav-mobile .mobilebutton').click(function(){
		jQuery('#nav-mobile').toggleClass('mobile-open');
		return false;
	});	
	
	setEqualHeight($(".faq_list .faq_entry"));
	jQuery(window).resize(function(){
		$(".faq_list .faq_entry").each(function(){ $(this).css('height', 'auto')})
		setEqualHeight($(".faq_list .faq_entry"));
	});
	
	var portfolio_jcarousel = $('.portfolio_carousel .jcarousel');
	portfolio_jcarousel
		.on('jcarousel:reload jcarousel:create', function () {
			var width = portfolio_jcarousel.innerWidth();
			portfolio_jcarousel.jcarousel('items').css('width', width + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		});
	$('.portfolio_carousel').find('.jcarousel-control-prev').jcarouselControl({target: '-=1', carousel:portfolio_jcarousel});
	$('.portfolio_carousel').find('.jcarousel-control-next').jcarouselControl({target: '+=1', carousel:portfolio_jcarousel});
	$('.portfolio_carousel').find('.jcarousel-pagination')
		.on('jcarouselpagination:active', 'a', function() {
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function() {
			$(this).removeClass('active');
		})
		.on('click', function(e) {
			e.preventDefault();
		})
		.jcarouselPagination({
			item: function(page) {
				return '<a href="#' + page + '">' + page + '</a>';
			},
			carousel:portfolio_jcarousel
		});
	
	$('.collapse_title').click(function(){
		if ($(document).width()<=580) {
			$(this).next('.collapse_box').slideToggle();
			$(this).closest('.section').toggleClass('collapsed');
			// change bg
			$(this).next('.collapse_box').queue(function () { 
         		if ($(this).closest('.section').attr('id')=='specialize_section') {
					$('#specialize_section').backstretch("images/specialize.jpg");
				} else if ($(this).closest('.section').attr('id')=='how-work_section') {
					$('#how-work_section').backstretch("images/how-work.jpg");
				}
				$(this).dequeue();
      		});
		}
	});
	$('.box_title').click(function(){
		if ($(document).width()<=580) {
			$(this).next('.box_entry').slideToggle();
			$(this).closest('.item').toggleClass('collapsed');
			// change bg
			$(this).next('.box_entry').queue(function () { 
         		if ($(this).closest('.section').attr('id')=='marketing_section') {
					$('#marketing_section').backstretch("images/marketing.jpg");
				}
				$(this).dequeue();
      		});
		}
	});

	
});