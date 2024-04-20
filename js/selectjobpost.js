function selectJobPost(jobID) {
    // Update the URL with the job post ID
    const url = new URL(window.location.href);
    url.searchParams.set('jobID', jobID);
    window.location.href = url.href;
}