<?php
    global $rs_option;
?>
<div class="rs-breadcrumbs">
  <div class="rs-breadcrumbs-inner">
          <div class="breadcrumbs-inner">
            <?php if(function_exists('breadcrumb_trail')) {
                  breadcrumb_trail();
                }
              ?>
          </div>
  </div>
</div>