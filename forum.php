<!DOCTYPE>

<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" href="./css/main.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
		.wrapper{
			width:95%;
			padding: 3em 0 3em 0;
			position: relative;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<!-- simple demo , later on will replace with php query data-->

		<!-- show event details -->
		<div style="width:100%;height:80px;">
			<span style="float:left;width:10%;height:15%;"><img src="./add3.png" /></span>
			<span style="float:left;width:100%;">Swee Yinn Rock concert</span>
			<span style="float:left;width:100%;">Date: 4 - Jun - 2016</span>
			<span style="float:left;width:100%;">Venue: Esplanade</span>
		</div>
		<hr style="color:#919499;width:100%;"/>		

		<?php
			$check =2;
			for($i=0; $i<=10; $i++)
			{
				echo '<div style="height:120px;width:100%;">';
				echo '<span style="float:left;width:15%;height:18%;font-size:.8em;"><img style="width:50px;height:50px;align:center;" src="./user.png" /><br/>
					<span>Kee Swee Yinn</span><br/>
					<span>22-Jan-2016 1.45pm</span>
					<div id="ratingDiv" class="rating" style="">';

					//check star in this post and set star, comment after this
						for($j=5;$j>0;$j--)
						{						
							if($j<=$check)
							{
								echo '<input type="radio" id="star'.$j.'" name="rating" value="'.$j.'" checked="checked"/><label for="star'.$j.'" title="Rocks!" style="color: #f70;text-shadow: 1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0, 0, 0, .5);"/>'.$j.' stars</label>';
							}
							else
							{
								echo '<input type="radio" id="star'.$j.'" name="rating" value="'.$j.'" /><label for="star'.$j.'" title="Rocks!">'.$j.' stars</label>';
							}							
						}					   		
						echo '</div>
					</span>';

				echo '<span style="float:left;width:70%;">Enjoy the concert very much. Hope for more</span>';		
				echo '</div>';
				echo '<hr style="color:#919499;width:100%;"/>';
			}
		?>

		<!-- user add comment -->
		<div style="width:100%;height:70px;">
			<span style="font-weight:bold;margin:10px;line-height:2em;">Comment: </span>
			<textarea id="feedback" name="feedback" rows="4" cols="150"></textarea>
			<input type="submit" id="submit" name="submit" value="Submit" style="margin:10px;border-radius:0.6em;min-width:8em;line-height:normal;display:inline-block;height:3em;background:#444;color:#ffffff;position:absolute;"/>
		</div>
	</div>

<script language="javascript" type="text/javascript">	
	
</script>
</body>
</html>