<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#212529;">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login2.html">Login</a></li>
                    <!-- Masthead <li class="nav-item"><a class="nav-link" href="https://172.21.20.115/subjectrightrequest/datasubjectrequestform?key=FGhGHEEv6o6UXUBA68UWtA%3d%3d">DSR</a></li>-->

                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <!-- Services-->
    <section class="page-section" id="services" style="padding-top: 200px;">
        <div class="intro-section" id="home-section">
            <div class="slide-1" style="background-image: url('images/hero.jpg')" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4"> <!-- class="col-lg-6 mb-4" -->
                                    <h1 data-aos="fade-up" data-aos-delay="100">Request Preference Consent</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Provide consent management of business is
                                        simple
                                        Manage, record consent requests And easily create consent forms for your customers or users to
                                        comply with the PDPA.</p>
                                    <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p> -->

                                </div>

                                <!-- form -->
                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500"> <!--col-lg-5 ml-auto -->

                                    <?php if($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                                        <?php var_dump($_POST)?>
                                    <?php else: ?>
                                    <form action="" method="post" class="form-box">

                                        <h3 class="h4 text-black mb-4">From Preference Consent</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti officiis id nam quaerat
                                            explicabo optio vol</p>

                                        <div id="purpose_option"></div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="submit">
                                        </div>
                                    </form>
                                    <?php endif; ?>

                                    <!-- <iframe src="https://172.21.20.115/admin/PreferenceConsentFormView?key=HRFckZ09CBZFQHlpJa2upA%3d%3d&token_key=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2aWNlX2lkIjoiMTIiLCJkc19pZCI6IjUxIiwiZW1haWwiOiJraGF0YXd1dEBuZXRrYXN5c3RlbS5jb20ifQ.a6geMfxgV1oNpxTc9QUMNcLwAnLy4VqrQXtfGBnyBv4" width="550px" height="700px" styles="border:none; overflow-x: hidden; overflow-y: hidden; display: block;" >
                       </iframe>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none me-3" href="#!">Terms of Use</a>
                    <a class="link-dark text-decoration-none " href="https://172.21.20.115/subjectrightrequest/datasubjectrequestform?key=%2fX81Ke37EH458iCPuqIOAw%3d%3d">PDPA
                        Right Request</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



    <script>
        fetch("ds.json")
            .then(function(response) {
                console.log(response.json);
                return response.json();

            })
            .then(function(data) {
                appendData(data);
            })
            .catch(function(err) {
                console.log('error: ' + err);
            });

        function appendData(data) {
            for (var i = 0; i < data.length; i++) {
                //var div = document.createElement("div");
                //var div1 = document.createElement("div1");
                //div.innerHTML = 'service_id: ' + data[i].service_id;
                //div1.innerHTML = 'ds_id: ' +  data[i].ds_id;

                //var serviceid = 'service_id: ' + data[i].service_id;
                //var dsid = 'ds_id: ' +  data[i].ds_id;
                //var dsname = 'ds_name: ' +  data[i].ds_name;
                //var dslastname = 'ds_lastname: ' +  data[i].ds_lastname;
                //var consentformurl = 'consentform_url: ' +  data[i].consent_form_url;
                //var content_json = 'content_json: ' +  data[i].content;
                //var contenten_json = 'contenten_json: ' +  data[i].contenten;
                var purposeoption = data[i].purpose_option;
                //var version_json = 'version_json: ' +  data[i].version;
                //var updateddate = 'updated_date: ' +  data[i].updated_date;
            }
            //service_id.innerHTML = serviceid;
            //ds_id.innerHTML = dsid;
            //ds_name.innerHTML = dsname;
            //ds_lastname.innerHTML = dslastname;
            //consent_form_url.innerHTML = consentformurl;
            //content.innerHTML = content_json;
            //contenten.innerHTML = contenten_json;
            var purpose_option = document.getElementById('purpose_option')

            for (var i = 0; i < purposeoption.length; i++) {
                var div = document.createElement("div");
                div.innerHTML = '<div class="form-check"><input class="form-check-input" type="checkbox"  name=" ' + purposeoption[i].purpose_id + ' "><label class="form-check-label" for="flexRadioDefault1">  ' + purposeoption[i].purpose_th + '</label></div>';
                //'purpose_id: ' + purposeoption[i].purpose_id;
                console.log(div.innerHTML);
                purpose_option.appendChild(div);

            }

            //version.innerHTML = version_json;
            //  updated_date.innerHTML = updateddate;
        }
    </script>


</body>

</html>