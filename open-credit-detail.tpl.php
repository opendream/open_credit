<!--<span class="qtip-link">
	<!--<div class="qtip-header">Tooltip Heading (optional)</div>-->
<!--	<div class="qtip-tooltip">
    <?php print l($link_url, $link_url, array('absolute' => TRUE, 'external' => TRUE));?>
	</div>
	<img class="dreamer" onMouseOver="showblock()" width="20" heigth="20" src="<?php print base_path().$picture_path; ?>"/>
</span>
-->

<!--
<div class="open-credit" onMouseOut="hideblock()">
  <a id="dreamer-link" href="<?php print $link_url; ?>" onMouseOver="showblock()" ">
    <?php print $text_link; ?>
  </a>
   <img class="dreamer" onMouseOver="showblock()" width="20" heigth="20" src="<?php print base_path().$picture_path; ?>"/>
</div>
-->
<a id="dreamer" class="tooltip" href="#">
	<img class="dreamer" onMouseOver="showblock()" width="20" heigth="20" src="<?php print base_path().$picture_path; ?>"/>
</a>
<a id="dreamer-link" href="<?php print $link_url; ?>" style="display: none;">
    <?php print $text_link; ?>
</a>

