<script>
      function initMap() {
        var uluru = {lat: 44.787197, lng: 20.457273};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map

        });
      }
   </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhcPgR8c2yH9WaQpAQe8bdliSGXuOvW04&callback=initMap">
    </script> 

<main id="contact">
	
<h1 class="contactheader"> As Soon As Possible</h1>
<br><br><br>
<section class="grid-m-12 contact grid-t-6  ">
<article class="contactphone">
	<p><i class="fa fa-2x fa-home" aria-hidden="true"></i><span>MyShop</span></p>
</article>
<article class="contactphone">
	<p><i class="fa fa-2x fa-phone" aria-hidden="true"></i><span>&nbsp;&nbsp;000 000 0000</span></p>
</article>
<article class="contactadress">
	<p><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;Street of streets 2017</span></p>

</article>

  <article class="contactmail">
	<p><i class="fa fa-2x fa-envelope" aria-hidden="true"></i><span> &nbsp;&nbsp; contact<i class="fa fa-envelope-o" aria-hidden="true"></i>contact.com : NOT VALID!</span></p>
</article>
</section>

<section id="map" class="grid-t-6 grid-m-12"></section>

<section class="anketa">
<section id="poll">
<h3 class="anketaheder">Do you like our pages?</h3>
<form class="anketica"><label for="vote">Yes:</label>

<input type="radio" name="vote" class="vote" value="0" onclick="getVote(this.value)">
<br><label for="vote">No:</label>
<input type="radio" name="vote" class="vote" value="1" onclick="getVote(this.value)">
</form>
</section>

	<article class="thankyou">Thank you. BEST REGARDS!</article>


</section>

</main>
<section id="chat">

<section class="chatdata">
<h3>PUBLIC CHAT, WRITE TO JOIN ;)</h3>
   </section>

  </section>
<section id="contactme">
	<form action="" method="POST" id="sendmsg">
<table>
	<tbody>
		<tr><td><input type="text" name="namee" placeholder="Your Name"></tr>
		<tr></td><td><label for="tbteharea">Message </label> <i class="fa fa-2x fa-hand-o-down" aria-hidden="true"></i>
</td></tr>
		<tr><td> <textarea rows="4" cols="40" name="tbteharea"> </textarea> </td></tr>
		<tr><td><input type="submit" value="send"></td></tr>
	</tbody>
</table>
	</form>
</section>
<script>
	

 $("#sendmsg").submit(function(event){
event.preventDefault();
$.ajax({
	url: 'app/config/chat.php',
	method:'post',
	data: $('form').serialize(),/*Uzimanje svih podataka iz forme*/
	dataType: "text",
	success: function(result){
		$(".chatdata").html(result)
	}

}); /*kraj ajaxa*/

})/*end of #form-new*/
</script>

