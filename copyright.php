<?php 
session_start();
include ("functions/db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BU IPMD</title>
  <!--Favicon image-->
  <link rel="icon" href="favicon.ico" type="image/ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="components/css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="components/css/mdb.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->


  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="components/css/getmdl-select.min.css">
  <link rel="stylesheet" href="components/css/material.css"">
  <link href="components/css/style.css" rel="stylesheet">
   <link href="components/css/pagination_css.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
  </style>



  <script type="text/javascript">
    $('.collapse').collapse()

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
      })

    $("form").on('submit', function(){
       $('modalViewForm.modal').show();
    })
  </script>
</head>

<body style="background-color: #eee;">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <strong><img src="favicon.ico" style="height: 30px;width: 30px; margin-top: -4px;"> BU IPMD </strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">AUDIT Section</a>
                  <a class="dropdown-item" href="#">ACOIP Section</a>
                  <a class="dropdown-item" href="#">PUMS Section</a>
              </div>
          </li>
        <!-- Dropdown -->
          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services<span class="sr-only">(current)</span></a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="copyright.php">Copyright/ISP</a>
                  <a class="dropdown-item" href="utilitymodel.php">Utility Model</a>
                  <a class="dropdown-item" href="industrialdesign.php">Industrial Design</a>
                  <a class="dropdown-item" href="invention.php">Invention</a>
                  <a class="dropdown-item" href="trademark.php">Trademark</a>
              </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="contact.php" target="">Contact</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <?php
                  if (isset($_SESSION['user_name'])) {
                      echo "<b>Hi,&nbsp;</b>";
                      echo $_SESSION['user_name'];
                  }
                  else{
                      echo '<i class="fa fa-user-circle"></i>';
                  }
                 
                ?>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                      if (!isset($_SESSION['user_name'])) {
                          echo "<a href='login.php' class='dropdown-item'>Login</a>";
                      }
                      else{
                          echo "<a href='includes/logout.php' data-confirm='Are you sure to delete this item?'  class='dropdown-item'>Logout</a>";
                      }
                    ?>
                </div>
            </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <!--Main layout-->
  <main >
    <div class="container">
      <br><br>
      <!--Section: Main features & Quick Start-->
      <section>
        <br><br>
        <center>
        <h1 class="h1 orange-text text-center mb-3">COPYRIGHT</h1>    
          <p class="black-text lead col-8">"Copyright is a branch of Intellectual property which pertains to the rights given to creators or authors for their literary and artistic works. The doman of works includes writings, music, fine art (photography, paintings or sculptures) and technology-based works (computer software programs, websites, and electronic databases). Copyright protects the expression of thoughts or ideas, not the thoughts or ideas themseleves."<small> - Intellectual Property Office of the Philippines (IPOPHIL)</small></p>
        </center>
        <!--Grid row-->
        <!-- Collapse buttons -->
        <div>
          <center>
            <button class="btn btn-rounded btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span>VIEW DATABASE</span>
            </button>
            <?php 

            if(isset($_SESSION['user_name'])){
            echo'<button class="btn btn-rounded btn-danger" data-toggle="modal" data-target="#modalAddForm" type="button">
                <span><i class="fa fa-plus-circle"></i>  ADD RECORD</span>
            </button>';}
            else{
              
            }
            ?>
          </center>
        </div>
        <!-- / Collapse buttons -->
        <!--Modal Add Form-->
          <div class="modal fade" id="modalAddForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg cascading-modal modal-notify modal-danger" role="document">
                <form action="copyright.php" method="post" enctype="multipart/form-data" class="mod">
                  <div class="modal-content">
                      <div class="modal-header text-center">
                          <h4 class="modal-title white-text w-100 font-weight-bold"> COPYRIGHT ADD FORM</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body mx-3">
                        <div class="row">

                          <div class="col">
                            <div class="md-form">
                                <input type="text" id="copyrights_reg_no" name ="copyrights_reg_no" class="form-control validate">
                                <label for="copyrights_reg_no">Reg. Number</label>
                            </div>
                          </div>

                          <div class="col">
                            <div class="md-form">
                                <input type="text" id="copyrights_title" name="copyrights_title" class="form-control md-textarea validate">
                                <label for="copyrights_title">Title</label>
                            </div>
                          </div>

                        </div>

                          <div class="row">
                            <div class="col">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                                  <input type="text" value="" class="mdl-textfield__input" id="category_id" required onkeypress="return false;">
                                  <input type="hidden" value="" name="category_id">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  <label for="category_id" class="mdl-textfield__label">Research Category</label>
                                  <ul for="category_id" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <?php
                                       $get_category = "SELECT * FROM categories";
                                       $run_category = mysqli_query($connect, $get_category);

                                       while ($row_category=mysqli_fetch_array($run_category)) {
                                             $cat_id = $row_category["category_id"];
                                             $cat = $row_category["category_name"];
                                             ?>
                                             <li class="mdl-menu__item" data-val="<?php echo $cat_id;?>"><?php echo $cat;?> </li>
                                             <?php
                                       }
                                   ?>
                                  </ul>
                              </div>
                            </div>

                            <div class="col">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                                  <input type="text" value="" class="mdl-textfield__input" id="class_id" required onkeypress="return false;">
                                  <input type="hidden" value="" name="class_id">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  <label for="class_id" class="mdl-textfield__label">Class</label>
                                  <ul for="class_id" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <?php
                                       $get_class = "SELECT * FROM classes";
                                       $run_class = mysqli_query($connect, $get_class);

                                       while ($row_class=mysqli_fetch_array($run_class)) {
                                             $clas_id = $row_class["class_id"];
                                             $clas = $row_class["class_name"];
                                             ?>
                                             <li class="mdl-menu__item" data-val="<?php echo $clas_id;?>"><?php echo $clas;?> </li>
                                             <?php
                                       }
                                   ?>
                                  </ul>
                              </div>
                            </div>

                            <div class="col">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                                <input type="text" value="" class="mdl-textfield__input" id="agency_id" required onkeypress="return false;">
                                <input type="hidden" value="" name="agency_id">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                <label for="agency_id" class="mdl-textfield__label">Agency</label>
                                <ul for="agency_id" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                    <?php
                                     $get_agency = "SELECT * FROM agencies";
                                     $run_agency = mysqli_query($connect, $get_agency);

                                     while ($row_agency=mysqli_fetch_array($run_agency)) {
                                       $age_id = $row_agency["agency_id"];
                                       $age = $row_agency["agency_name"];
                                       ?>
                                       <li class="mdl-menu__item" data-val="<?php echo $age_id;?>"><?php echo $age;?> </li>
                                       <?php 
                                     }
                                 ?>
                                </ul>
                              </div>
                            </div>

                            <div class="col">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" style="width: 100%;">
                                  <input type="text" value="" class="mdl-textfield__input" id="filestatus_id" required onkeypress="return false;">
                                  <input type="hidden" value="" name="filestatus_id">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  <label for="filestatus_id" class="mdl-textfield__label">Status</label>
                                  <ul for="filestatus_id" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <?php
                                       $get_status = "SELECT * FROM filestatus";
                                       $run_status = mysqli_query($connect, $get_status);

                                       while ($row_status=mysqli_fetch_array($run_status)) {
                                             $stat_id = $row_status["filestatus_id"];
                                             $stat = $row_status["filestatus_name"];
                                             ?>
                                             <li class="mdl-menu__item" data-val="<?php echo $stat_id;?>"><?php echo $stat;?> </li>
                                             <?php
                                       }
                                      ?>
                                  </ul>
                              </div>
                            </div>

                          </div>

                          <div class="row">

                            <div class="col">
                              <div class="md-form">
                                  <textarea type="text" id="copyrights_authors" name="copyrights_authors" class="form-control md-textarea validate"></textarea>
                                  <label for="copyrights_authors">Author(s)</label>
                              </div>
                            </div>

                            <div class="col">
                              <div class="md-form">
                                  <textarea type="text" id="copyrights_owner" name="copyrights_owner" class="form-control md-textarea validate"></textarea>
                                  <label for="copyrights_owner">Owner(s)</label>
                              </div>
                            </div>


                          </div>


                          <div class="row">

                            <div class="col">
                              <div class="md-form">
                                  <label for="copyrights_received_date" disabled>Received Date:</label><br>
                                  <input type="date" id="copyrights_received_date" name="copyrights_received_date" class="form-control validate">    
                              </div>
                            </div>

                            <div class="col">  
                              <div class="md-form">
                                  <label for="copyrights_reg_date" disabled>Registration Date:</label><br>
                                  <input type="date" id="copyrights_reg_date" name="copyrights_reg_date" class="form-control validate">    
                              </div>
                            </div>

                            <div class="col">   
                              <div class="md-form">
                                  <label for="copyrights_year" disabled>Issue on (Year):</label><br>
                                  <input type="number" id="copyrights_year" name="copyrights_year" maxlength="4" class="form-control validate" aria-describedby="um_year_helper" value="2018">    
                              </div>
                            </div>

                          </div>


                          <div class="row">

                            <div class="col">
                              <div class="md-form">
                                  <label for="copyrights_issue_date" disabled>Issue Date:</label><br>
                                  <input type="date" id="copyrights_issue_date" name="copyrights_issue_date" class="form-control validate">    
                              </div>
                            </div>

                            <div class="col">  
                              <div class="md-form">
                                  <label for="copyrights_submitted_date" disabled>Submitted Date:</label><br>
                                  <input type="date" id="copyrights_submitted_date" name="copyrights_submitted_date" class="form-control validate">    
                              </div>
                            </div>

                            <div class="col">   
                              <div class="md-form">
                                  <label for="copyrights_created_date" disabled>Created Date:</label><br>
                                  <input type="date" id="copyrights_created_date" name="copyrights_created_date" class="form-control validate">    
                              </div>
                            </div>

                          </div>

                          <div class="row">

                            <div class="col">
                              <div class="md-form">
                                  <input type="text" id="copyrights_project_duration" name="copyrights_project_duration" class="form-control md-textarea validate">
                                  <label for="copyrights_project_duration">Project Duration</label>
                              </div>
                            </div>

                            <div class="col">
                              <div class="md-form">
                                  <input type="text" id="copyrights_fee" name ="copyrights_fee" class="form-control validate">
                                  <label for="copyrights_fee">Fee</label>
                              </div>
                            </div>

                         </div>

                         <div class="md-form">
                                  <input type="text" id="copyrights_address" name ="copyrights_address" class="form-control validate">
                                  <label for="copyrights_address">Address</label>
                         </div>

                            
                            
                          </div>
                          <div class="modal-footer d-flex justify-content-center">
                          <button class="btn btn-danger btn-block" name="insert_post" type="submit">SUBMIT</button>
                      </div>
                      </div> 
                  </div>
                </form>
              </div>
          </div>
        <!--/Modal Add Form-->
        <!-- Collapsible element -->
        <div class="collapse" id="collapseExample">
          <hr>
          <div>
            <!--Table-->     
            <div class="form-group">
              <h6>Select Number of Rows</h6>
              <select name="state" id="maxRows" class="form-control" style="width:150px;">
                  <option value="5000">Show All</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="75">75</option>
                  <option value="100">100</option>
              </select>
            </div>
            <table id="mytable" class="table table-hover table-bordered table-responsive-md table-striped">
                <thead class="orange white-text">
                  <tr>
                    <th class="th-sm text-center">
                        Year 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center">Reg. No. 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center" style="width: 20%;">
                        Title 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center" style="width: 5%">
                        Agency 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center" style="width: 10%">
                        Category 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center">
                        Issued 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center">
                        Submitted 
                        <i class="fa fa-sort"></i>
                    </th>
                    <th class="th-sm text-center">
                        Status 
                        <i class="fa fa-sort"></i>
                    </th>
                    
                    
                    <?php 
                    if(isset($_SESSION['user_name'])){
                      echo'
                      <th class="th-sm text-center" style="width: 10%;">Remarks (latest)</th>
                      <th class="th-sm text-center" style="width: 13%;">Actions</th>';
                    }
                    else{
                      echo'<th class="th-sm text-center" style="width:8%;">View Record</th>';
                    }
                    ?>
                  </tr>
                </thead>
            <tbody>

              <?php
                   $fetch_cus = mysqli_query($connect, "SELECT * FROM copyrights ORDER BY copyrights_year DESC")
                    or die("Error: Could not fetch rows!".mysqli_error($connect));

                   while($row = mysqli_fetch_array($fetch_cus))
                   {
                    $copyrights_id = $row['copyrights_id'];
                    $agen_que = "SELECT * FROM agencies WHERE agency_id=".$row['agency_id']."";
                    if($agen_res = mysqli_query($connect, $agen_que)){
                                        $agen_row = mysqli_fetch_array($agen_res );
                                        $age=$agen_row['agency_name'];}
                      else{
                        $age="NO AGENCY YET";
                      }

                    $clas_que = "SELECT * FROM classes WHERE class_id=".$row['class_id']."";
                    if($clas_res = mysqli_query($connect, $clas_que)){
                                        $clas_row = mysqli_fetch_array($clas_res );
                                        $clas=$clas_row['class_name'];}
                      else{
                          $clas="NO CLASS YET";
                      }

                    $catn_que = "SELECT * FROM categories WHERE category_id=".$row['category_id']."";
                    if($catn_res = mysqli_query($connect, $catn_que)){
                                        $catn_row = mysqli_fetch_array($catn_res );
                                        $cat=$catn_row['category_name'];}
                      else{
                          $cat="NO CATEFORY YET";
                      }


                    $statn_que = "SELECT * FROM filestatus WHERE filestatus_id=".$row['filestatus_id']."";
                    if($statn_res = mysqli_query($connect, $statn_que)){
                        $statn_row = mysqli_fetch_array($statn_res );
                        $status=$statn_row['filestatus_name'];
                    }
                    else{
                        $status="NO STATUS YET";
                      }


                    echo'<tr>

                    <td class="text-center">'. $row['copyrights_year'].'</td>
                    <td class="text-center">'.$row['copyrights_reg_no'].'</td>
                    <td class="text-center">'. $row['copyrights_title'].'</td>
                    <td class="text-center">'.$age.'</td>
                    <td class="text-center">'.$cat.'</td>
                    <td class="text-center">';
                    if(($row['copyrights_issue_date']=="")||($row['copyrights_issue_date']=="0000-00-00")){
                      echo "NOT YET ISSUED";
                    }
                    else{
                      echo $row['copyrights_issue_date'];
                    }
                    echo'</td> 
                    <td class="text-center">';
                    if(($row['copyrights_submitted_date']=="")||($row['copyrights_submitted_date']=="0000-00-00")){
                      echo "NOT YET PUBLISHED";
                    }
                    else{
                      echo $row['copyrights_submitted_date'];
                    }
                    echo'</td>
                    <td class="text-center">'.$status.'</td>'
                    ; 

                    ?> 
                    <?php 
                      if(isset($_SESSION['user_name'])){
                        $rem_query = "SELECT max(copyrights_remarks_id) AS max_value FROM copyrights_remarks WHERE copyrights_id=$copyrights_id";
                            $fetch_que =mysqli_query($connect,$rem_query);
                            $row = mysqli_fetch_assoc($fetch_que);
                            $rem_id=$row["max_value"];
  
                            $rem_query2 = "SELECT copy_remarks_time,copy_remarks_desc FROM copyrights_remarks WHERE copyrights_remarks_id=$rem_id";
                            if($fetch_res = mysqli_query($connect, $rem_query2)){
                            $rem_row = mysqli_fetch_assoc($fetch_res);
                              echo'
                              
                              <td class="text-center">';
                              if(($rem_row['copy_remarks_time'])==""){
                              
                              }
  
                              else{
                                echo'<p><small class="green-text">'.$rem_row['copy_remarks_time'].'</small><small><br>'.$rem_row['copy_remarks_desc'].'</small></p>
                              </td>';
                              }
                            }
                          

                        else{
                          echo '<td class="text-center">
                          NO REMARKS YET</td>';
                        }
                      }
                      ?>

                      <!--MODAL GOES HERE-->

                      <?php
                      if(!isset($_SESSION['user_name'])){
                        echo '<td class="text-center"><a name="copyview" href="functions/copyrights/view.php?copyrights_id='.$copyrights_id.'" target="_blank">
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored" type="button" data-placement="top" title="View">
                          <i class="material-icons">remove_red_eye</i>
                        </button>
                        </button></a></td>';
                      }
                      else{
                        echo'
                        <td class="text-center">
                          <a name="copyedit" href="functions/copyrights/edit.php?copyrights_id='.$copyrights_id.'" target="_blank">
                          <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored" type="button" data-placement="top" title="Edit">
                            <i class="material-icons">edit</i>
                          </button></a>
                      
                          <a name="copyview" href="functions/copyrights/view.php?copyrights_id='.$copyrights_id.'" target="_blank">
                          <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored" type="button" data-placement="top" title="View">
                            <i class="material-icons">remove_red_eye</i>
                          </button>
                          </button></a>
                      
                          <a name ="copydelete" class="delete" data-confirm="Are you sure to delete this item?" href="functions/copyrights/delete.php?copyrights_id='.$copyrights_id.'">
                          <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored" type="button" data-placement="top" title="Delete">
                            <i class="material-icons">delete</i>
                          </button></a>
                          <a name ="remarkview" href="functions/copyrights/remarks.php?copyrights_id='.$copyrights_id.'" target="_blank">
                          <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored" type="button" data-placement="top" title="View/Add Remarks" data-toggle="modal" data-target="#modalViewForm">
                            <i class="material-icons">add_comment</i>
                          </button></a>
                          </td>';
                          } 
                      }
                      
                        
                      ?>   
            </tr>

        
            </tbody>
          </table>
                    <!--Table-->    
        <div class="pagination">
          <center><nav>
                <ul class="pagination"></ul>
            </nav></center>
        </div>
          </div>
        </div>
        <!-- / Collapsible element -->
      <!--/Grid row-->

    <script src="components/js/jquery.min.js"></script>
    <script src="components/js/bootstrap2.min.js"></script>

      </section>
      <!--Section: Main features & Quick Start-->


      <!--Section: More-->
      <section>

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <br><br><br><br>
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!-- Social icons -->
    <div class="col" style="height: 30px;"></div>
    <div class="pb-4">
      <center><p>Connect with us through <br>any of the links below</p></center>
      <a href="https://www.facebook.com/buipmd" title="BUIPMD FACEBOOK" target="_self">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="contact.php" title="(052) 742-1909" target="_self">
        <i class="fa fa-phone mr-3"></i>
      </a>

      <a href="contact.php" title="0928-756-9576" target="_self">
        <i class="fa fa-send mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      <strong>BU IPMD © 2018 </strong>
    </div>
    <!--/.Copyright-->
  </footer>
  <!--/Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="components/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="components/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="components/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="components/js/mdb.min.js"></script>
      <!-- Initializations -->
    <script type="text/javascript" src="components/js/getmdl-select.min.js"></script>
    <!-- Initializations -->

   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->
<script>
    var table = '#mytable'
    $('#maxRows').on('change', function(){
        $('.pagination').html('')
        var trnum = 0
        var maxRows = parseInt($(this).val())
        var totalRows = $(table+' tbody tr').length
        $(table+' tr:gt(0)').each(function(){
            trnum++
            if(trnum > maxRows){
                $(this).hide()
            }
            if(trnum <= maxRows){
                $(this).show()
            }
        })
        if(totalRows > maxRows){
            var pagenum = Math.ceil(totalRows/maxRows)
            for(var i=1;i<=pagenum;){
                $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
            }
        }
        $('.pagination li:first-child').addClass('active')
        $('.pagination li').on('click',function(){
            var pageNum = $(this).attr('data-page')
            var trIndex = 0;
            $('.pagination li').removeClass('active')
            $(this).addClass('active')
            $(table+' tr:gt(0)').each(function(){
                trIndex++
                if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    $(this).hide()
                } else{
                    $(this).show()
                }
            })
        })
    })
   /* $(function(){
        $('table tr:eq(0)').prepend('<th>ID</th>')
        var id = 0;
        $('table tr:gt(0)').each(function(){
            id++
            $(this).prepend('<td>'+id+'</td>')
        })
    })*/
    </script>
   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->   <!-- PAGINATION -->




  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
      deleteLinks[i].addEventListener('click', function(event) {
          event.preventDefault();

          var choice = confirm(this.getAttribute('data-confirm'));

          if (choice) {
            window.location.href = this.getAttribute('href');
          }
      });
    }
  </script>
</body>

</html>

<?php 
if (isset($_POST['insert_post'])) {
  //getting the text data from the fields
  $copyrights_reg_no = $_POST['copyrights_reg_no'];
  $copyrights_title = $_POST['copyrights_title'];
  $category_id = $_POST['category_id'];
  $class_id = $_POST['class_id'];
  $agency_id = $_POST['agency_id'];
  $filestatus_id = $_POST['filestatus_id'];
  $copyrights_authors = $_POST['copyrights_authors'];
  $copyrights_owner = $_POST['copyrights_owner'];
  $copyrights_received_date = $_POST['copyrights_received_date'];
  $copyrights_reg_date = $_POST['copyrights_reg_date'];
  $copyrights_year = $_POST['copyrights_year'];
  $copyrights_issue_date = $_POST['copyrights_issue_date'];
  $copyrights_submitted_date = $_POST['copyrights_submitted_date'];
  $copyrights_created_date = $_POST['copyrights_created_date'];
  $copyrights_project_duration = $_POST['copyrights_project_duration'];
  $copyrights_fee = $_POST['copyrights_fee'];
  $copyrights_address = $_POST['copyrights_address'];
  

  //getting the image from the field
  //$industrial_sketch = $_FILES['industrial_sketch']['name'];
  //$industrial_image_tmp = $_FILES['industrial_sketch']['tmp_name'];

  //move_uploaded_file($industrial_image_tmp, "components/img/$industrial_sketch");
  //getting the image from the field ends here


  //$industrial_comment = $_POST['industrial_comment'];


  $insert_copyrights = "insert into copyrights (copyrights_reg_no,copyrights_title,category_id,class_id,agency_id,filestatus_id,copyrights_authors,copyrights_owner,copyrights_received_date,copyrights_reg_date,copyrights_year,copyrights_issue_date,copyrights_submitted_date,copyrights_created_date,copyrights_project_duration,copyrights_fee,copyrights_address)
  
  values('$copyrights_reg_no','$copyrights_title','$category_id','$class_id','$agency_id','$filestatus_id','$copyrights_authors','$copyrights_owner','$copyrights_received_date','$copyrights_reg_date','$copyrights_year','$copyrights_issue_date','$copyrights_submitted_date','$copyrights_created_date','$copyrights_project_duration','$copyrights_fee','$copyrights_address')";

   $insert_copy = mysqli_query($connect, $insert_copyrights);

   if ($insert_copy) {
    echo "<script>alert('Copyright added!')</script>";
    echo "<script>window.open('copyright.php?','_self')</script>";
   }
}

//LOGIN
if (isset($_POST['login'])) {
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];

    $user_acct = "select * from users where user_name='$user_name' AND user_pass='$user_pass'";
    $run_user = mysqli_query($connect, $user_acct);
    $check_user = mysqli_num_rows($run_user);
    
    if ($check_user==0) {
      
      $_SESSION['user_email'] = $user_email;
      echo "<script>alert('You logged in successfully!')</script>";
      //echo "<script>window.open('utilitymodel.php?','_self')</script>";
      $_SESSION['user_name'] = $user_name;
    }else{
      
      echo "<script>alert('Incorrect Username or Password. Please try again.')</script>";
    }
}

?>


