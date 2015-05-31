var bh_starranks = ["Unsatisfactory","Room For Improvement","Satisfactory","Good","Excellent"];

function billhowe_ty() {
	window.location = bh_tyurl;
}

function bh_checkpop() {
	if(jQuery.cookie("bhEmergency")) return false;
	
	jQuery('body').append('<a href="#" id="pfade"></a><div id="ppop"><a href="#" id="px"></a></div>');
	jQuery('#pfade').height(jQuery('body').height());
	jQuery('#ppop').show();
	jQuery('#pfade').fadeTo(400, 0.8);
	
	jQuery('#pfade, #px').click(function() {
		jQuery('#pfade, #ppop').remove();
		return false;
	});
	jQuery.cookie("bhEmergency",true, {expires: 1, path: '/' });
}

$(document).ready(function(){
	$('form').attr('autocomplete',"off");
});

$(document).ready(function(){
	if($('body').hasClass('home')) {
//		$('img.banner[src*="howe-healthy-homepage"]').attr('usemap','#heartMap');
		var pgr = '<ul id="pgr">';
		var bc = $('.banner img').size();
		for( i=0; i<bc; i++ ) {
			pgr += '<li><a href="#"></a></li>';
		}
		pgr += '</ul>';
		$('.hcol1').prepend(pgr);
		$('.banner').cycle({
			fx: 'fade',
			timeout: 4500,
			pager: '#pgr', 
			pagerAnchorBuilder: function(idx, slide) {
				// return selector string for existing anchor 
				return '#pgr li:eq(' + idx + ') a';
			}
		});
	} else {
		if ( $('.banner').size() > 0 ) {
			$('.banner').cycle({
				fx: 'fade',
				timeout: 4500
			});
		}
	}
	$('.leftmenu .col2 .inner ul>li>div>ul>li>a').click(function() {
		if($(this).attr('href') == '#'){
			$(this).next().toggle('fast');
			$(this).parent().toggleClass('current-menu-parent');
			return false;
		}else{
			return true;
		}
	});
	if($('.sub-menu #s').val() != ''){
		$('#searchform label').hide();
	}
	$('.sub-menu #s').focus(function(){
		if($(this).val() == ''){
			$('#searchform label').hide();
		}
	}).blur(function(){
		if($(this).val() == ''){
			$('#searchform label').show();
		}
	});
	if ( $('body').hasClass('hvac') == false ) {
	$().piroBox_ext({
		piro_speed : 300,
		bg_alpha : 0.5,
		piro_scroll : true, //pirobox always positioned at the center of the page,
		slideShow : true, // true == slideshow on, false == slideshow off
		slideSpeed : 3, //slideshow
		close_all : '.piro_close,.piro_overlay' // add class .piro_overlay(with comma)if you want overlay click close piroBox
    });
	}
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
	
	var bhd = new Date();
	var bhtime = bhd.getHours();
	var bhday = bhd.getDay();
	if ( ( ( bhday == 0 ) || ( bhday == 6 ) ) || ( ( bhtime < 7 ) || ( bhtime > 17 ) ) ) { // all day on Sat & Sunday, before 7am + after 5pm weekdays
		setTimeout(bh_checkpop, 7000);
	}
});
