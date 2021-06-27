var input = document.getElementById("msg");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("anchorchat").click();
  }
});
function submitChat(){
	if(form1.chatname.value == '' || form1.msg.value == '' ) {
		alert("Message not typed");
	}
	else {
		form1.chatname.readyState = true,
		form1.chatname.style.border = 'none';

		var uname = encodeURIComponent(form1.chatname.value);
		var msg = encodeURIComponent(form1.msg.value);
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById("chatlogs").innerHTML = xmlhttp.responseText;  
			}
		}
		xmlhttp.open('GET','add.php?uname='+uname+'&msg='+msg,true);
		xmlhttp.send();
		$("#msg").val("");
	}
}
$(document).ready(function(e) {
	$.ajaxSetup({cache:false});

	setInterval(function() {
		$('#chatlogs').load('logs.php');
	},2000);
});
function delete_prod(sr_no) {
	if(confirm("Are you sure you want to delete your post ?")) {
		jQuery.ajax ({
			url : 'delete_entry.php',
			type : 'post',
			data : 'sr_no='+sr_no,
			success : function (result) {
				jQuery('#card_'+sr_no).hide(300);                   
			}
		});
	}
}
function contact(email, uname, id) {
	jQuery.ajax ({
		url : 'btw.php',
		type : 'post',
		data : {"email": email, "uname": uname, "id": id},
		success : function (result) {
			jQuery('#myForm').show(300);                   
		}
	});        
}
var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("searchbar").click();
  }
});
var mybutton = document.getElementById("scrollbtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    	mybutton.style.display = "block";
  	} else {
    	mybutton.style.display = "none";
  	}
}
function topFunction() {
	document.body.scrollTop = 0;
  	document.documentElement.scrollTop = 0;
}
$(document).ready(function(){
	$("a").on('click', function(event) {        // Add smooth scrolling to all links
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
				window.location.hash = hash;
			});
		}
	});
});
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("carousel");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);          // Change every 4 seconds
}
function openreview() {
    jQuery('#review-form').show(300);
}
const stars = document.querySelectorAll('.star');
const output = document.querySelector('.output');
for (x=0; x<stars.length; x++) {
    stars[x].starvalue = (x+1);
    ["click", "mouseover", "mouseout"].forEach(function(e) {
        stars[x].addEventListener(e, showRating);
    });
}
function showRating(e) {
    let type = e.type;
    let starvalue = this.starvalue;
    if(type === 'click') {
        if(starvalue >= 1) {
            output.value = starvalue;
        }
    }
	stars.forEach(function(elem, ind) {
        if(type === 'click') {
            if(ind < starvalue) {
                elem.classList.add("orange");
            }
            else {
                elem.classList.remove("orange");
            }
        }
        if(type === 'mouseover') {
            if(ind < starvalue) {
                elem.classList.add("yellow");
            }
            else {
                elem.classList.remove("yellow");
            }
        }
        if(type === 'mouseout') {
            if(ind < starvalue) {
                elem.classList.remove("yellow");
            }
		}               
    });
}
function openchats(email, uname, id, tablename) {
	jQuery.ajax ({
		url : 'modal.php',
		type : 'post',
		data : {"email": email, "uname": uname, "id": id, "tablename": tablename},
		success : function (result) {
			jQuery('#myForm').show(300);                   
		}
	});        
}
function hello(id) {
	var modal = document.getElementById("myModal_"+id);
	var chat = document.getElementById("myForm");
	var btn = document.getElementById("vc_"+id);
	var chatspan = document.getElementsByClassName("chatclose")[0];
	var span = document.getElementsByClassName("modalclose_"+id)[0];
	btn.onclick = function() {
		modal.style.display = "block";
	}
	span.onclick = function() {
		modal.style.display = "none";   
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	chatspan.onclick = function() {
		chat.style.display = "none";   
	}
	addEventListener("keyup", function(event) {
		if (event.keyCode === 27) {
			  event.preventDefault();
			  span.click(function() {
				modal.style.display = "none";
			});
		}
	});
}	
function closeChat() {
	jQuery('#myForm').hide(300);           
}
addEventListener("keyup", function(event) {
	if (event.keyCode === 27) {
		event.preventDefault();
		document.getElementById("cancelbtn").click(function() {
			jQuery('#myForm').hide(300);
		});
	}
  });