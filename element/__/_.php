<?php
// DON'T TOUCH
//----------------
$LeftOff => 'WordPress Post Meta Data Tutorial';
$video_time => '1:00';
// DO NOT ADD Above --^ (except changing variable)


/*
 This file corresponds to and serves as notes for the video series: Wordpress Theme Development
*/


/*
  12/20/2016
*/
build local then upload theme once fresh install has been completed.

<iframe width="853" height="480" src="https://www.youtube.com/embed/AShql_Ap1Yo?showinfo=0" frameborder="0" allowfullscreen></iframe>

<img class="alignnone " src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/545663/profile/profile-512_2.jpg" width="130" height="130">


/*
  12/26/2016
*/
style.css: fixed layout with nav not aligning to bottom-border lines 43 and 55

12/27/2016
13:28 - WordPress Navigation Menus
Creating page.php

?>


<!--
  ## Conditional Logic: Pages ##
*/
<?php if (is_page('portfolio')) { ?> // page-id
   - Thank you for viewing our work
<?php } ?>

// you can also use this to display different menus on specific pages



// need to edit comment template like this:
<!-- column-container -->
<div class="column-container clearfix">

</div><!-- /column-container -->


<!--
  01/04/2016
  WordPress Post Meta Data
-->

https://youtu.be/3fgEgzPx7QM?t=330

<!--
  01/07/2017
-->
<?php
  /*
    excerpt()
  */

  // outputs excerpt of full post
  the_excerpt();
?>

<!-- Separation for Read More through WordPress Text editor -->
<code>
  <!--more-->
</code>

<?php
  // Please note:
?>
