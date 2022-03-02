<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/table-styles.css">
    <!-- Jquery -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <title><?php echo $pageTitle;?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/MediConnectLogo-blue.png">
</head>
<body class="mb-5">

<!--  ====================   HEADER   ====================  -->
    <!-- Top of Header -->
    <div class="header_top justify-content-between max-w-1300">
        <!-- Website Logo -->
        <div class="py-1">
            <img class="webLogo" src="images/MediConnectLogo-blue.png" alt="MediConnect Logo">
        </div>
        <?php
        if ($pageType == "indexPage") {
            echo '
                       <!-- Login Button -->
                       <div class="loginBtnDiv float-right sticky-top">
                           <button type="button" id="requestChangesBtn" class="btn searchBarBtn">Suggest an Edit</button>
                           <button id="loginBtn" class="loginButtons" data-toggle="modal" data-target="#loginPanel">Login</button>
                       </div>';
        } else if ($pageType == "loggedinPage") {
            echo'  <!-- Sign Out Button -->
                          <!-- Change between "Login" and "Sign Out" -->
                       <div class="loginBtnDiv float-right">
                           <a id="signOutBtn" class="loginButtons" href="index.php">Sign Out</a>
                       </div>';
        }
        ?>
    </div><!-- End of Header_top -->

    <!-- Bottom of Header (Search Bar) -->
    <div class="header_btm p-2 sticky-top" id="search-bar">
        <div class="row mx-auto max-w-1300">
            <!-- Search input/button -->
            <div class="col-6">
                <input type="text" id="searchByName" placeholder="Search...">
            </div>
            <?php
            if($pageType == "indexPage"){
                echo '<div class="col-4"></div>
                      <div class="col-4">';

                if (isset($_POST["formName"]) && $_POST["formName"] === "request-summary") {
                    // Send Email to the admin
                    $adminEmailAddress = "lindsay.patrick@student.greenriver.edu";
                    $fromName = "MediConnect";
                    $fromEmail = "request@mediconnect.com";
                    include ("includes/sendEmail.php");
                }

                echo'</div>';
            } else if($pageType == "loggedinPage") {
                echo '<!--New entry popup -->
                              <div class="col-3 align-middle">
                                  <button id="addEntryBtn" type="button" class="btn searchBarBtn" data-toggle="modal" data-target="#newEntry">Add new Entry</button>
                              </div>
                  
                              <!-- Edit Entry Button -->
                              <div class="col-3 align-middle">
                                  <button type="button" id="toggleEditBtn" class="btn searchBarBtn">Enable Editing</button>
                              </div>';
            }
            ?>
        </div>
        <!-- End of Row -->
    </div>
    <!-- END of Search Bar -->
    <!-- Generate Printable Page (Opens in new tab) -->
    <div class="position-fixed bottom-right-0 m-4">
        <a id="printBtn" onclick="print()" target="_blank"><img src="images/printer-icon.png" alt="Printer Icon"></a>
    </div>
