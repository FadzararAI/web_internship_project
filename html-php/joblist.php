<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hatarakitakunai ze.</title>
        <link href="../css/joblist.css" rel="stylesheet">
        <link href="../css/font.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../js/dropdown.js"></script>
        <script src="../js/selectjobpost.js"></script>
        <script src="../js/showjobdetails.js"></script>
        <!-- <script>
            autocomplete(document.getElementById("Position"), Position);
        </script> -->
    </head>
    <body>
        <div class="TopBar">
            <div class="Logo"><img src="../resource/image/Logo.png" style="height: 100%; float: right;"></div>
            <div class="SearchJob"><a href="joblist.html">Cari lowongan</a></div>
            <div class="Profile"><a href="joblist.html">Lihat Profil</a></div>
            <div class="CareerResources"><a href="joblist.html">Sumber Daya Karir</a></div>
            <div class="Company"><a href="joblist.html">Profil Perusahaan</a></div>
            <div class="Language"></div>
            <div class="Login"></div>
        </div>
        <div class="Header">
            <div class="Text">
                <form autocomplete="off" method="GET">
                    <input type="text" id="Position" name="Position" placeholder="Job Position">
                    <input type="text" id="Industry" name="Industry" placeholder="Job Industry">
                    <input type="text" id="Location" name="Location" placeholder="City or Region">
                    <input type="submit" value="Find">
                </form>
            </div>
            <div class="Selection">
                <form action="">
                    <div class="JobTime">
                        <div class="dropdownContainer">
                        <input type="text" class="dropdownInput" placeholder="Semua jenis pekerjaan">
                        <div class="dropdownContent">
                            <label><input type="radio" name="jobTimeOptions" value="fullTime"> Full time</label>
                            <label><input type="radio" name="jobTimeOptions" value="partTime"> Paruh waktu</label>
                            <label><input type="radio" name="jobTimeOptions" value="contract"> Kontrak</label>
                            <label><input type="radio" name="jobTimeOptions" value="casual"> Kasual/Liburan</label>
                        </div>
                        </div>
                    </div>
                    <div class="MinSalary">
                        <div class="dropdownContainer">
                        <input type="text" class="dropdownInput" placeholder="Salary of">
                        <div class="dropdownContent">
                            <label><input type="radio" name="MinSalaryOptions" value="lowest"> Rp 0</label>
                            <label><input type="radio" name="MinSalaryOptions" value="two"> 2 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="four"> 4 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="six"> 6 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="eight"> 8 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="ten"> 10 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="fifteen"> 15 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="twenty"> 20 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="twentyfive"> 25 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="forty"> 40 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="sixty"> 60 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="eighty"> 80 jt</label>
                            <label><input type="radio" name="MinSalaryOptions" value="hundred"> 100 jt</label>
                        </div>
                        </div>
                    </div>
                    <div class="MaxSalary">
                        <div class="dropdownContainer">
                        <input type="text" class="dropdownInput" placeholder="Up to">
                        <div class="dropdownContent">
                            <label><input type="radio" name="MaxSalaryOptions" value="lowest"> Rp 0</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="two"> 2 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="four"> 4 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="six"> 6 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="eight"> 8 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="ten"> 10 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="fifteen"> 15 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="twenty"> 20 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="twentyfive"> 25 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="forty"> 40 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="sixty"> 60 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="eighty"> 80 jt</label>
                            <label><input type="radio" name="MaxSalaryOptions" value="hundred"> 100 jt</label>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="JobContainer">
            <div class="JobListing" id="jobListings">
                <?php
                include '../php/connection.php';

                // Corrected SQL query
                $sql = "SELECT `jp.id`, `jp.position`, `jp.jobdesc`, `jp.address`, `c.name`, `jp.salary_min`, `jp.salary_max`, `jp.industry` FROM jobpost AS jp JOIN company AS c ON jp.`c.id` = c.`c.id`";
                
                if (isset($_GET['Position']) || isset($_GET['Industry']) || isset($_GET['Location'])) {
                    $sql .= " WHERE ";
                }

                // Conditionally add filters based on the input parameters
                $conditions = []; // Array to store individual conditions

                if (isset($_GET['Position'])) {
                    $position = $_GET['Position'];
                    if (!empty($position)) {
                        $conditions[] = "LOWER(jp.`jp.position`) LIKE '%$position%'";
                    }
                }

                if (isset($_GET['Industry'])) {
                    $industry = $_GET['Industry'];
                    if (!empty($industry)) {
                        $conditions[] = "LOWER(jp.`jp.industry`) LIKE '%$industry%'";
                    }
                }

                if (isset($_GET['Location'])) {
                    $location = $_GET['Location'];
                    if (!empty($location)) {
                        $conditions[] = "LOWER(jp.`jp.address`) LIKE '%$location%'";
                    }
                }

                // Join conditions with 'AND' if there are multiple conditions
                if (!empty($conditions)) {
                    $sql .= implode(" AND ", $conditions);
                }
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop through each row and generate job listing cards
                    while ($row = $result->fetch_assoc()) {
                        $jobID = htmlspecialchars($row['jp.id']);
                        $jobPosition = htmlspecialchars($row['jp.position']);
                        $jobCompany = htmlspecialchars($row['c.name']);
                        $jobDescription = htmlspecialchars($row['jp.jobdesc']);
                        $jobAddress = htmlspecialchars($row['jp.address']);
                        $jobSalaryMin = htmlspecialchars($row['jp.salary_min']);
                        $jobSalaryMax = htmlspecialchars($row['jp.salary_max']);
                        $jobIndustry = htmlspecialchars($row['jp.industry']);

                        // Output job listing card HTML with data attributes for JS interaction
                        echo <<<HTML
                        <div class="JobPost" onclick="selectJobPost('$jobID')">
                            <div class="JobPostTop">
                                <h3 class="JobPost-Position">$jobPosition</h3>
                                <p class="JobPost-Company">$jobCompany</p>
                            </div>
                            <div class="JobPostBot">
                                <p class="JobPost-Address">Address: $jobAddress</p>
                                <p class="JobPost-Salary">Salary Range: $$jobSalaryMin-$$jobSalaryMax</p>
                                <p class="JobPost-Industry">Industry: $jobIndustry</p>
                            </div>
                        </div>
                        HTML;
                    }
                } else {
                    echo "<p>No job listings available.</p>";
                }

                $conn->close();
                ?>
            </div>
            <div class="JobDetail" id="jobDetail">
                <?php
                if (isset($_GET['jobID'])) {
                    include '../php/connection.php';
                    $jobID = htmlspecialchars($_GET['jobID']);
                    $sql = "SELECT `jp.position`, `jp.jobdesc`, `jp.address`, `c.name` FROM jobpost AS jp JOIN company AS c ON jp.`c.id` = c.`c.id` WHERE `jp.id` = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $jobID);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo <<<HTML
                        <div class="JobDetail">
                            <h3 class="JobDetail-Position">{$row['jp.position']}</h3>
                            <p class="JobDetail-Company">{$row['c.name']}</p>
                            <p class="JobDetail-Address">Address: {$row['jp.address']}</p>
                            <p class="JobDetail-Description">{$row['jp.jobdesc']}</p>
                        </div>
                        HTML;
                    } else {
                        echo "<p>Job details not available.</p>";
                    }
                    $stmt->close();
                    $conn->close();
                } else {
                    echo "<p>Select a job to see details.</p>";
                }
                ?>
            </div>
        </div>
        <hr/>
        <div class="FootBar"></div>
        <div class="Footer"></div>
    </body>
</html>