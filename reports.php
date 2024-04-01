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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="reports.php">Payroll Report</li></a>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <?php
// Include database connection script
include('config/db.php');

// SQL query to fetch data and calculate total wages by date
$sql = "SELECT date, SUM(total_salary) AS total_wages
        FROM employee_details
        INNER JOIN salary_details ON salary_details.employee_id = employee_details.employee_id
        INNER JOIN total_salary ON total_salary.employee_id = employee_details.employee_id
        INNER JOIN deduction_details ON deduction_details.employee_id = employee_details.employee_id
        GROUP BY date";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the table structure outside the loop
    echo '<section class="forms">
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total Wages</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

    while ($row = $result->fetch_assoc()) {
        // Fetch data from the database and assign it to variables
        $date = $row['date'];
        $totalWages = $row['total_wages']; // Total wages for the date
        
        // Output each row of data within the table
        echo '<tr>
                <td>' . $date . '</td>
                <td>' . $totalWages . '</td>
                <td><a href="wages.php?date=' . $date . '">View</a></td>
              </tr>';
    }

    // Close the table structure
    echo '</tbody>
          </table>
        </div>
      </div>
    </section>';
} else {
    echo "No records found.";
}
?>




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