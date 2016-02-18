<!DOCTYPE>

<html>
<head>
    <title>Forum</title>
    <?php
    include  'php_function/swedb_conn.php';
    ?>
    <link rel="stylesheet" href="./css/main.css">
    <link href="home.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
</head>

<body>


<div class="nav">
    <ul id="navbar">
        <li id="1" class='active'><a onclick="status('1',['2','3']);" href='#'><span>Home</span></a></li>
        <li id="3"><a onclick="status('3',['1','2']);" href='#'><span>Events</span></a></li>
        <li id="2"><a onclick="status('2',['1','3']);" href='#'><span>Forum</span></a></li>
        <li id="4"><a onclick="status('3',['1','2']);" href='#'><span>Login</span></a></li>
        <li id="5"><a onclick="status('3',['1','2']);" href='#'><span>Sign Up</span></a></li>
    </ul>
</div>


<div class="wrapper">
    <!-- simple demo , later on will replace with php query data-->
    <!--		<span style="float:left;width:100%;height:100%;"><img style="float:left;width:100%;height:100%;>;"  src="./rock_image.jpg" /></span>-->
    <!-- show event details -->
    <div style="width: 400px;height:300px;display: inline-table">
        <span style="float:left;width:100%;height:100%;"><img style="float:left;width:100%;height:100%;>;"
                                                              src="./rock_image.jpg"/></span>
        <span style="float:left;width:100%;">Swee Yinn Rock concert</span>
        <span style="float:left;width:100%;">Date: 4 - Jun - 2016</span>
        <span style="float:left;width:100%;">Venue: Esplanade</span>
    </div>
    <hr style="color:#919499;width:100%;"/>

    <?php
    $check = 2;

    for ($i = 0; $i <= 10; $i++) {
        echo '<div style="height:120px;width:100%;">';
        echo '<span style="float:left;width:15%;height:18%;font-size:.8em;"><img style="width:50px;height:50px;align:center;" src="./user.png" /><br/>
					<span>Kee Swee Yinn</span><br/>
					<span>22-Jan-2016 1.45pm</span>
					<div id="ratingDiv" class="rating" style="">';

        //check star in this post and set star, comment after this
        for ($j = 5; $j > 0; $j--) {
            if ($j <= $check) {
                echo '<input type="radio" id="star' . $j . '" name="rating" value="' . $j . '" checked="checked"/><label for="star' . $j . '" title="Rocks!" style="color: #f70;text-shadow: 1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0, 0, 0, .5);"/>' . $j . ' stars</label>';
            } else {
                echo '<input type="radio" id="star' . $j . '" name="rating" value="' . $j . '" /><label for="star' . $j . '" title="Rocks!">' . $j . ' stars</label>';
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
        <input type="submit" id="submit" name="submit" value="Submit"
               style="margin:10px;border-radius:0.6em;min-width:8em;line-height:normal;display:inline-block;height:3em;background:#444;color:#ffffff;position:absolute;"/>
    </div>
</div>

<script language="javascript" type="text/javascript">

</script>
</body>
</html>