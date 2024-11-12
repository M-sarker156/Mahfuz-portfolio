<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    <a target="_blank" class="btn btn-primary px-4 py-3" id="CVDownloadLink" href="">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <div id="experience-list"></div>
            </section>
        </div>
    </div>
</div>

<script>
    // Fetch resume download link
    getResumeLink();
    async function getResumeLink() {
        try {
            let URL = "/resumeLink";
            // Removed unnecessary loading-div as it's not in the HTML
            let response = await axios.get(URL);
            let link = response.data['downloadLink'];
            document.getElementById('CVDownloadLink').setAttribute('href', link);
        } catch (e) {
            console.error("Error fetching resume link:", e);
            alert('Failed to load resume download link');
        }
    }

    // Fetch experience data and update the experience list
    getExpList();
    async function getExpList() {
        try {
            let URL = "/experiencesData";
            let response = await axios.get(URL);
            let experienceHTML = ''; // Accumulate HTML string here
            
            response.data.forEach((item) => {
                experienceHTML += `
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>${item['details']}</div></div>
                            </div>
                        </div>
                    </div>
                `;
            });

            document.getElementById('experience-list').innerHTML = experienceHTML; // Update DOM once
        } catch (e) {
            console.error("Error fetching experiences:", e);
            alert('Failed to load experiences');
        }
    }
</script>
