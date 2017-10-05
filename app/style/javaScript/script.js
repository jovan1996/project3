function provera() {
    var wrong=new Array();
  var x=document.formica;
  /*MAIL*/
  var mail=x.username.value;
  var reMail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!mail.match(reMail)){
    alert("wrong mail")
    wrong.push("greskaa"); }

  /*END OF MAIL*/
    /*password */
  var password=x.password.value.trim();
  var repassword=/[A-Za-z]{2,19}/;
  if(!password.match(repassword)){
       alert("wrong password");
  wrong.push("gresslaa");
}

  if(wrong.length==0){
  return true;
  }
  else{
    return false;
      }
}
$(document).ready(function() {

	/*NAVIGACIJA TOGGLE*/
	$('nav').on('click', '.DDN', function(){
		$('.toggleDDN').toggle(800);
		});

  /*menu*/

 $( "#toggle-nav" ).click(function(event) {
 $(".adminmenu").toggle('800');
 $(".menu").toggle('800');

});

 /*AJAX ANKETA */
 $('.vote').click(function () {
	$('#poll').fadeOut(5000);
	$('.thankyou').fadeIn(4000); });

});

function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}

function update(id){
  // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "updatetobase.php";
    //alert(id);
    var br= id
    br=toString(br)
    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("formupdate").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("formupdate").innerHTML = "processing...";
}
