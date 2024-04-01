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
        <section class="forms">
    <!-- Table-like Form -->
    <div class="card card_border py-2 mb-4">
        <?php
        // Include database connection script
        include('config/db.php');

        // Check if the date parameter is set in the URL
        if (isset($_GET['date'])) {
            // Retrieve date from URL parameter
            $submitted_date = $_GET['date'];

            // SQL query to fetch total salary for the specified date
            $sql = "SELECT *
                    FROM employee_details
                    INNER JOIN salary_details ON salary_details.employee_id = employee_details.employee_id
                    INNER JOIN total_salary ON total_salary.employee_id = employee_details.employee_id
                    INNER JOIN deduction_details ON deduction_details.employee_id = employee_details.employee_id
                    WHERE date = ?
                   ";

            // Prepare and bind the SQL statement
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $submitted_date);
            $stmt->execute();

            // Get the result of the query
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo '<div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Employee Number</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';

                while ($row = $result->fetch_assoc()) {
                    // Fetch data from the database and assign it to variables
                    $employee = $row['employee_number'];
                    $totalWages = $row['total_salary']; // Total wages for the date
                    $position = $row['position']; // Total wages for the date
                    $department= $row['department'];
                    $full_name = $row['full_name']; 
                    $total_gross= $row['total_gross']; // Total wages for the date
                    $total_deduction = $row['total_deduction']; 
                    $date = $row['date']; 
                    
                    // Output each row of data within the table
                    echo '<tr>
                            <td>' . $date . '</td>
                            <td>' .  $employee . '</td>
                            <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#viewModal' .  $employee . '">
                                    <i class="fa fa-eye"></i> View
                                </button>
                            </td>
                        </tr>';
                }

                echo '</tbody>
                    </table>
                </div>';
            } else {
                echo "No records found.";
            }
        }

        ?>
    </div>
    <!-- // Table-like Form -->

<!-- Modal -->
<div class="modal fade" id="viewModal<?php echo  $employee; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel"><?php echo  $employee; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalContent">
                <label>Full Name:</label>
                <input type="text" class="form-control" value="<?php echo $full_name; ?>" readonly>
                <label>Position:</label>
                <input type="text" class="form-control" value="<?php echo $position; ?>" readonly>
                <label>Department:</label>
                <input type="text" class="form-control" value="<?php echo $department; ?>" readonly>
                <label>Gross:</label>
                <input type="text" class="form-control" value="<?php echo $total_gross; ?>" readonly>
                <label>Deduction:</label>
                <input type="text" class="form-control" value="<?php echo $total_deduction; ?>" readonly>
                <label>Salary:</label>
                <input type="text" class="form-control" value="<?php echo $totalWages; ?>" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->





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