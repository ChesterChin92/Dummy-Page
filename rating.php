<!DOCTYPE>

<html>
<head>
	<title>Pop Up Dialog</title>
	
	<link rel="stylesheet" href="./css/main.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
	<a href="#popUp" id="openPopUp">Open it!</a>
		<!--<aside id="popUp" class="popup">-->
		<section id="popUp" class="popup">
			<div class="popUpContainer">
		    	<header>
		      		<a href="" class="closePopUp">X</a>
		      		<h2>Rate & Feedback</h2>
		    	</header>

		    	<!-- rating star and feedback (form submit)-->
		    	<form id="rateForm" name="rateForm" method="post" action="">
			    	<div id="content1" class="ratecontent">
			    		<div id="ratingDiv" class="rating" style="margin:15px 55px;">
					   		<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
					   		<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
					   		<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
	    					<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
	    					<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
						</div>
												
						<div style="margin:15px 55px;"><!--onkeypress="check_length(this.form)"-->
							<textarea id="feedback" name="feedback" rows="5" cols="50" onkeydown="check_length(this.form)"></textarea>
							<span style="font-size:.8em;"><input size="1" value="50" name="text_num" /> Characters Left</span>
							<!--<span style="font-size:.8em;"><span id="text_num" name="text_num"></span><span> Characters Left</span></span>-->
						</div>

						<div>
							<input type="submit" id="submit" name="submit" value="Submit" style="border-radius:0.6em;;min-width:8em;line-height:normal;display:inline-block;height:4em;background:#444;color:#ffffff;"/>
						</div>
			    	</div>
		    	</form>
		  	</div>
	  		<a href="" class="closePopUpOutSide"></a>
	  	</div>
		<!--</aside>-->

<script language="javascript" type="text/javascript">	
	function check_length(rateForm) //check feedback length
	{
		maxLen = 50; // max number of characters allowed
		if (rateForm.feedback.value.length >= maxLen) {
		// Alert message if maximum limit is reached. 
		// If required Alert can be removed. 
		var msg = "You have reached your maximum limit of characters allowed";
		alert(msg);
		// Reached the Maximum length so trim the textarea
			rateForm.feedback.value = rateForm.feedback.value.substring(0, maxLen);
		 }
		else{ // Maximum length not reached so update the value of my_text counter
			//document.getElementById("text_num").innerHTML = maxLen - rateForm.feedback.value.length;
			rateForm.text_num.value = maxLen - rateForm.feedback.value.length;
		}
	}
</script>
</body>
</html>