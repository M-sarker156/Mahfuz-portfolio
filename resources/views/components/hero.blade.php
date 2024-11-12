<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <div class="text-center text-xxl-start">
                    <div class="fs-3 fw-light text-muted" id="short_title">Hello, I'm</div>
                    <h6 class="display-2 fw-bolder mb-5"><span class="text-gradient d-inline" id="title">MD. MAHFUZ SARKER</span></h6>
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase" id="keyLine">Competitive Programmer | Full-Stack Developer | CSE Student</div></div>
                    
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/resume')}}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{url('/projects')}}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" id="profileImg" src="assets/mahfuz.png" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- <script>
    getHero();
    async function getHero() {
 
        try {
            let URL="/heroData"
 
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
 
            debugger;
 
            let response = await axios.get(URL);
            document.getElementById('keyLine').innerHTML=response.data['keyLine'];
            document.getElementById('short_title').innerHTML=response.data['short_title'];
            document.getElementById('title').innerHTML=response.data['title'];
            document.getElementById('profileImg').src=response.data['img'];
        }
        catch (e) {
            alert(e);
        }
 
    }  --}}

    




   