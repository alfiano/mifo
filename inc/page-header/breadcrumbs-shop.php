<div class="rs-breadcrumbs  porfolio-details">
  <div class="rs-breadcrumbs-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="breadcrumbs-inner">
              <h1 class="page-title">
                <?php woocommerce_page_title();?>
              </h1> 
              <?php if(function_exists('breadcrumb_trail')) {
              breadcrumb_trail();
            }?>                 
            </div>
          </div>
        </div>
      </div>
  </div>
</div>