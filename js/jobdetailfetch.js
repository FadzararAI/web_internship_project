// script.js

function showJobDetail(jobId) {
    // AJAX request to fetch job details based on jobId
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("jobDetail").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "get_job_details.php?id=" + jobId, true);
    xhr.send();
}
// script.js

function showJobDetail(jobId) {
    // AJAX request to fetch job details based on jobId
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("jobDetail").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "get_job_details.php?id=" + jobId, true);
    xhr.send();
}
