<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Workshops</title>
		<script src="js/workshop_table.js"></script>
		<?php include 'head.php' ?>
	</head>

	<body>
        <?php include("header.php"); ?>

        <style>
            #workshops {
                background: #FF9800;
            }
        </style>

 <!--  -->
		<!-- HEADER / SPLASH -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-lg-4 ">
					<h1 class=" title">Workshops</h1>
                    <br>
				</div>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="row">
                <div class="col-lg-4 ">

                </div>
			</div>
		</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <table class="table">
                <thead>
                  <tr class="active">
                    <th>Workshop</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Cost ($)</th>
		    <th>Enrollment (max 100)</th>
		    <th>Sign Up</th>
		    <th>Leave the Class</th>
                  </tr>
                </thead>
                <tbody>
                <?php include("workshops-table.php"); ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
    <script src="js/contactScript.js"></script>

		<?php include 'footer.php' ?>
    </body>
</html>
