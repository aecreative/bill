var bh_starranks = ["Unsatisfactory","Room For Improvement","Satisfactory","Good","Excellent"];

jQuery(function($) {
  $('#respond').removeAttr('id').find('#reply-title, .comment-notes, .form-allowed-tags').remove();
  console.log('ch2');
  $('#comment').addClass('wpcf7-form-control wpcf7-textarea');
  console.log('ch3');
  $('#commentform input:submit').addClass('wpcf7-form-control wpcf7-submit qbutton alignright');
  console.log('ch4');
  $('#commentform').addClass('wpcf7-form cf7_custom_style_2').find('input:text').addClass('wpcf7-form-control wpcf7-text');
  console.log('ch5');
  $('#commentform').show();
  console.log('ch6');
  
  if($('#rating').size() > 0) {
		ss = $('<span class="stars" />');
		for(i=1;i<6;i++) {
			ss.append('<a href="#'+i+'" class="on">'+i+'</a>');
		}
		ss.append('<span class="rtxt">'+bh_starranks[4]+'</span>');
		ss.children('a').each(function(i) {
			$(this).bind('mouseover', function() {
				$(this).add($(this).prevAll()).addClass('on');
				$(this).nextAll().removeClass('on');
				$('#rating').val($(this).html());
				$(this).siblings('.rtxt').html(bh_starranks[i]);
				return false;
			});
		});
		$('#rating').hide().after(ss);
	}
});