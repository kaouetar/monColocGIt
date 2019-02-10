@section('footer')
<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader
<div id="preloader">
  <div class="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
/Preloader -->

<!-- jQuery Plugins -->
<script src="/tools/jquery/jquery-3.2.1.min.js"></script>
<script src="/tools/bootstrap/js/popper.js"></script>
<script src="/tools/select2/select2.min.js"></script>

<script type="/text/javascript" src="/js/jquery.min.js"></script>
<script type="/text/javascript" src="/js/bootstrap.min.js"></script>
<script type="/text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="/text/javascript" src="/js/jquery.magnific-popup.js"></script>
<script type="/text/javascript" src="/js/main.js"></script>
<script src="/tools/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);

    $(window).on('resize', function(){
      ps.update();
    })
  });


</script>

<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="col-md-12">

        <!-- footer logo -->

        <!-- /footer logo -->

        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li>Suivez-nous</li>
          <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
        <!-- /footer follow -->

        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>Copyright © RentIK 2019. All Rights Reserved.</p>


        </div>
        <!-- /footer copyright -->

      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</footer>
<!-- /Footer -->
