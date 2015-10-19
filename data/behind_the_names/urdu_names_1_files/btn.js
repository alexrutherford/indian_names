function set_loading() {
	$('#loading').show();
}

function clear_loading() {
	$('#loading').hide();
}

function set_search_autocomplete(selector) {
	$(selector).autocomplete({
		source: "/names/ajax_search_autocomplete.php",
		minLength: 1,
		select: function (event, ui) {
			if (ui.item) {
				if (ui.item.value.charAt(0) != '{') {
					this.value = ui.item.label.replace(/<(?:.|\n)*?>/gm, '');
					window.location.href = "/name/" + ui.item.value;
				} else {
					var p = ui.item.value.indexOf('}');
					if (p > 0) {
						var cmd = ui.item.value.substring(1, p);
						var rest = ui.item.value.substring(p+2);
						//this.value = rest;
						switch (cmd) {
  						case 'find':
							window.location.href = "/names/search.php?terms=" + rest;
     							break;
  						case 'pending':
							window.location.href = "/submit/name/" + rest;
     							break;
  						case 'top':
							window.location.href = "/top/name/" + rest.replace(/ +/g, ',');
     							break;
  						case 'namesake':
							window.location.href = "/namesakes/name/" + rest.replace(/ +/g, ',');
     							break;
  						case 'related':
							window.location.href = "/names/related/" + rest.replace(/ +/g, ',');
     							break;
  						case 'nameday':
							window.location.href = "/namedays/name/" + rest.replace(/ +/g, ',');
     							break;
  						case 'meaning':
							window.location.href = "/names/meaning/" + rest.replace(/ +/g, ',');
     							break;
  						case 'surname':
							window.location.href = "http://surnames.behindthename.com/name/" + rest;
     							break;
  						case 'place':
							window.location.href = "http://places.behindthename.com/name/" + rest;
     							break;
  						case 'given':
							window.location.href = "http://www.behindthename.com/name/" + rest;
     							break;
  						case 'user':
							window.location.href = "/members/search.php?terms=" + encodeURIComponent(rest);
     							break;
  						case 'glossary':
							window.location.href = "/glossary/search.php?terms=" + encodeURIComponent(rest);
     							break;
  						case 'browse':
							window.location.href = rest;
     							break;
						}
					}
				}
			}
			return false;
		},
		focus: function (event, ui) {
			return false;
		},
		open: function () {
        		$(this).data("autocomplete").menu.element.addClass("search-suggestions");
    		}
	}).data( "autocomplete" )._renderItem = function( ul, item )  {
		if (item.value) {
			return $( "<li>" )
				.append( "<a>" + item.label + "</a>" )
				.appendTo( ul );
		} else {
			return $( "<li>" )
				.append( item.label )
				.appendTo( ul );
		}
	};
}

function toggle_div(div_id) {	
	$('#'+div_id).toggle();
}

function show_namedesc(name, span_id) {	
	$.get('/names/ajax_name_desc.php?name='+name, function(data) {
		$('#'+span_id).html(data);
	});
}

function searchsetting(a, setting) {
	$('#searchsettings_menu li span').removeClass('ui-icon ui-icon-check');
	$(a).find('span').addClass('ui-icon ui-icon-check');
	$('#nmd').val(setting);
	$.get('/names/ajax_session.php?key=search&value='+setting);
	return false;
}

function add2pnl(name, remove) {
	var page = 'ajax_add.php';
	if (remove) {
		page = 'ajax_remove.php';
	}
	$.get('/pnl/'+page+'?name='+name, function(data) {
		var res = $.parseJSON(data);
		if ($('.info_message').html()=='') {
			$('.info_message').hide();
			$('.info_message').html(res.msg);
			$('.info_message').slideDown(200);
		} else {
			$('.info_message').html(res.msg);
		}
		if (res.ok=='1') {
			$('.pnlicon').html(res.icon);
			flashicon('.pnlicon img');
			$('#pnlbutton_'+name).html(res.btn);
		}
	});
	return false;
}

function flashicon(selector) {
	$(selector).delay(100).fadeTo(100,0.5).delay(100).fadeTo(100,1).delay(100).fadeTo(100,0.5).delay(100).fadeTo(100,1).delay(100).fadeTo(100,0.5).delay(100).fadeTo(100,1);
}

/* name browser */
function nb_toggle_options(cb, div_id) {	
	$('#nb_dirty').val('yes');
	if (cb.checked) {
		$('#'+div_id).show();
		$('#'+div_id).children().attr('disabled', false);
	} else {
		$('#'+div_id).hide();
	}
}

function nb_submit_form(form) {	
	$('#'+form+' :input[type!="hidden"]').filter(':hidden').attr('disabled', true);
	return true;
}

function nb_toggle_select_number(op_cb, select_id, op_limit, multi_spots) {
	if (op_cb.selectedIndex<op_limit) {
		document.getElementById(select_id).multiple=false;
		document.getElementById(select_id).size=1;
	} else {
		document.getElementById(select_id).multiple=true;
		document.getElementById(select_id).size=multi_spots;
	}
}
function nb_filter_redir(select) {
	window.location = select.options[select.selectedIndex].value;
}
function nb_fix_form() { // body onload to fix the refine form when back button pressed
	if ($('#nb_dirty').val()!='') {
		$('.nb_option').each(function( ) {
			var nm = $(this).attr("name").substring(5);
			nb_toggle_options(this, 'div_'+nm);
		});
	}
}
/* end name browser */

$(function() {
	if (/webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('#viewport').attr('content', 'width=device-width');
	}
});

// set the menus
$(document).ready(function(){	
	$("ul.btnmenu li").click(function() { //When trigger is clicked...
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).find("ul.btnsubmenu").show(); //Drop down the subnav on click
	}).hover(function() { 
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).find("ul.btnsubmenu").show(); //Drop down the subnav on click
		$(this).addClass("btnsubhover"); //On hover over, add class "subhover"
	}, function(){	//On Hover Out
		$(this).parent().find("ul.btnsubmenu").hide(); //When the mouse hovers out of the subnav, move it back up
		$(this).removeClass("btnsubhover"); //On hover out, remove class "subhover"
	});

	$("#memberopts").click(function() { //When trigger is clicked...
		//Following events are applied to the subnav itself (moving subnav up and down)
		$("#membermenu").show(); //Drop down the subnav on click
	}).hover(function() { 
		//Following events are applied to the subnav itself (moving subnav up and down)
		$("#membermenu").show(); //Drop down the subnav on click
		$(this).addClass("btnsubhover"); //On hover over, add class "subhover"
	}, function(){	//On Hover Out
		$("#membermenu").hide(); //When the mouse hovers out of the subnav, move it back up
		$(this).removeClass("btnsubhover"); //On hover out, remove class "subhover"
	});

	$("#searchsettings_menu").menu();
	$("#searchsettings_container").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		if ($("#searchsettings_menu").is(':visible')) {
			$("#searchsettings_menu").delay(200).toggle(0);
		} else {
			$("#searchsettings_menu").toggle();
		}
		$(document).one('click', function(e) {
			if($('#searchsettings_menu').has(e.target).length === 0) {
				$('#searchsettings_menu').hide();
			}
		});
	});
});


if (!String.prototype.trim) {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, ''); 
	};
}

if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function (obj) {
		for (var i=0, j=this.length; i<j; i++) {
			if (this[i]===obj)
				return i;
		}
		return -1;
	};
}
