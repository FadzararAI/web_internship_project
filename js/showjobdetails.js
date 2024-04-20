var jobPosts = document.querySelectorAll('.JobPost');
    jobPosts.forEach(function(post) {
        post.addEventListener('click', function() {
            var jobId = this.getAttribute('data-job-id');
            var jobPosition = this.getAttribute('data-job-position');
            var jobCompany = this.getAttribute('data-job-company');
            var jobDescription = this.getAttribute('data-job-description');
            var jobAddress = this.getAttribute('data-job-address');

            // Update the job detail container with the information
            var detailContainer = document.getElementById('jobDetailContainer');
            detailContainer.querySelector('.JobDetail-Position').textContent = jobPosition;
            detailContainer.querySelector('.JobDetail-Company').textContent = jobCompany;
            detailContainer.querySelector('.JobDetail-Address').textContent = "Address: " + jobAddress;
            detailContainer.querySelector('.JobDetail-Description').textContent = jobDescription;
        });
    });