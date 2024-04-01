<?php 
include('include/navbar.php');
?>
<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sales</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
    <!-- Table-like Form -->
    <div class="card card_border py-2 mb-4">
        
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Number of Sale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                           Ryzen 5 Processor 5600g
                        </td>
                        <td>
                            50
                        </td>
                    </tr>
                    <!-- You can add more rows here if needed -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- // Table-like Form -->

    <!-- Other Forms... -->

</section>


       
<div class="row">
    <div class="col-md-4">
        <!-- Table-like Form 1 -->
        <section class="forms">
            <div class="card card_border py-2 mb-4">               
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Weekly Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ryzen 5 Processor 5600g</td>
                                <td>10000</td>
                            </tr>
                            <!-- You can add more rows here if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- // Table-like Form 1 -->
    </div>
    <div class="col-md-4">
        <!-- Table-like Form 2 -->
        <section class="forms">
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Monthly Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ryzen 5 Processor 5600g</td>
                                <td>40000</td>
                            </tr>
                            <!-- You can add more rows here if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- // Table-like Form 2 -->
    </div>
    <div class="col-md-4">
        <!-- Table-like Form 3 -->
        <section class="forms">
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Yearly Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ryzen 5 Processor 5600g</td>
                                <td>480000</td>
                            </tr>
                            <!-- You can add more rows here if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- // Table-like Form 3 -->
    </div>
</div>


        <!-- //forms -->
    </div>
    <!-- //content -->

</div>
<!-- main content end-->
</section>

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>


</body>

</html>