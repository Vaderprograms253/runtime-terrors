<div class="d-block table-responsive-xl" id="facility-table">
    <table class="table table-striped table-bordered align-middle" id="<?php echo $tableID; ?>">
        <!-- Table header -->
        <thead>
        <tr>
            <th colspan="8" id="health-management-information"> Health Information Management</th>
        </tr>
        <tr>
            <th scope="col" colspan="2" id="facility">Facility</th>
            <th scope="col" colspan="2" id="medical-records">Medical Records</th>
            <th scope="col" colspan="4" id="film-library">Film Library</th>
        </tr>
        <tr>
            <!-- Facility -->
            <th scope="col" class="flex-xl-column min-w-12rem">Organization</th>
            <th>Location</th>

            <!-- Medical Records -->
            <th scope="col" class="min-w-8rem">Direct Line</th>
            <th scope="col" class="min-w-8rem">Fax</th>

            <!-- Film Library -->
            <th scope="col" class="min-w-8rem">Direct Line</th>
            <th scope="col" class="min-w-8rem">Fax</th>
            <th scope="col" id="push-image-col">Push Image?</th>
            <th scope="col" class="min-w-4rem">Image Type</th>
        </tr>
        </thead>


        <!-- Table body -->
        <tbody id="facility-table-body">

        <?php
            $sql = "SELECT * FROM facilities";
            // $result stores data in an array
            $result = @mysqli_query($cnxn, $sql);

            if($result) {
                foreach ($result as $row) {
                    $facility_id = $row['facility_id'];
                    $organization = $row['organization'];
                    $location = $row['location'];
                    $med_phone = $row['med_phone'];
                    $med_fax = $row['med_fax'];
                    $film_phone = $row['film_phone'];
                    $film_fax = $row['film_fax'];
                    $push_image = $row['push_image'];
                    $image_type = $row['image_type'];

                echo "<tr>
                        <td>$organization</td>
                        <td>$location</td>
                        <td>$med_phone</td>
                        <td>$med_fax</td>
                        <td>$film_phone</td>
                        <td>$film_fax</td>
                        <td>$push_image</td>
                        <td>$image_type</td>
                     </tr>";
                }
            }



        ?>

        <tr>
            <td>Allenmore Hospital and Medical Center</td>
            <td>Tacoma, WA</td>             <!-- Location (City, State) -->
            <td>253.333.2419</td>           <!-- Medical Records Fax -->
            <td>253.403.2302</td>           <!-- Medical Records Direct Line -->
            <td>253.403.1574</td>           <!-- Film Library Direct Line -->
            <td>206.292.6375</td>           <!-- Film Library Fax -->
            <td>Yes</td>                    <!-- Push Images? -->
            <td>CT</td>                     <!-- Image Type -->
        </tr>
        <tr>
            <td>Center for Diagnostic Imaging (CDI)</td>
            <td>Renton, WA</td>             <!-- Location (City, State) -->
            <td>N/A</td>                    <!-- Medical Records Direct Line -->
            <td>N/A</td>                    <!-- Medical Records Fax -->
            <td>206.524.5599</td>           <!-- Film Library Direct Line -->
            <td>425.251.4307</td>           <!-- Film Library Fax -->
            <td>Yes</td>                    <!-- Push Images? -->
            <td>DEXA, CT, XR</td>           <!-- Image Type -->
        </tr>
        <tr>
            <td>Children's Hospital & Regional Medical Center</td>
            <td>Renton, WA</td>             <!-- Location (City, State) -->
            <td>(206) 987-2173</td>         <!-- Medical Records Direct Line -->
            <td>(206) 985-3252</td>         <!-- Medical Records Fax -->
            <td>(206) 987-2731</td>         <!-- Film Library Direct Line -->
            <td>(206) 987-2093</td>         <!-- Film Library Fax -->
            <td>Yes</td>                    <!-- Push Images? -->
            <td>DEXA, CT, XR</td>           <!-- Image Type -->
        </tr>
        <tr>
            <td>Enumclaw Regional Hospital</td>
            <td>Enumclaw, WA</td>           <!-- Location (City, State) -->
            <td>253.792.2400</td>           <!-- Medical Records Direct Line -->
            <td>253.779.6245</td>           <!-- Medical Records Fax -->
            <td>253.426.4281</td>           <!-- Film Library Direct Line -->
            <td>253.426.6881</td>           <!-- Film Library Fax -->
            <td>Yes</td>                    <!-- Push Images? -->
            <td>DEXA, PATH, MG, MRI</td>    <!-- Image Type -->
        </tr>
        <tr>
            <td>Kindred Hospital Seattle</td>
            <td>Seattle, WA</td>            <!-- Location (City, State) -->
            <td>206.922.6950</td>           <!-- Medical Records Direct Line -->
            <td>855.392.3637</td>           <!-- Medical Records Fax -->
            <td>206.922.6580</td>           <!-- Film Library Direct Line -->
            <td>(855) 392-3637</td>         <!-- Film Library Fax -->
            <td>No*</td>                    <!-- Push Images? -->
            <td>MRI, US, XR</td>
        </tr>
        </tbody>
    </table>
</div> <!-- Table Div -->