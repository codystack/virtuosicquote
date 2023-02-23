<?php
include "./components/header.php";
include "./components/navbarlight.php";
require_once "./auth/devquote.php";
?>

    <!-- hero section -->
    <section class="bg-white vh-100">
        <div class="container d-flex flex-column py-20">
            <div class="row align-items-center justify-content-center justify-content-lg-between mt-lg-10">
                <div class="col-md-10 col-lg-5 text-center text-lg-start level-3">
                <h2 class="fw-light">Does your Business<br><span class="fw-bold">NEED A WEBSITE?</span></h2>
                    <p class="lead text-secondary mb-4">Experience is everything -- you need to work with a web design company that understands your business and the sector it serves.</p>
                    <button type="button" class="btn btn-red btn-with-icon rounded-pill btn-lg" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid back back-static">
            <div class="row justify-content-end h-100">
                <div class="col-lg-6 overflow-hidden position-relative" data-aos="fade-in">
                    <figure class="media">
                        <span style="background-image: url('assets/images/index.jpg')"></span>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <button type="button" class="bi bi-x modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-8">
                    <h4 id="modalLabel">Tell us more about your project.</h4>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="row g-3">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" required name="fullName">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" required name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="siteAbout" class="form-label">What's your site about?</label>
                            <select class="form-select" name="siteAbout" required aria-label="Default select example">
                                <option selected=""></option>
                                <option value="Travel">Travel</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Restaurants">Restaurants</option>
                                <option value="Health & Beauty">Health & Beauty</option>
                                <option value="Design">Design</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Personal & CV">Personal & CV</option>
                                <option value="Politics">Politics</option>
                                <option value="Photography">Photography</option>
                                <option value="Food">Food</option>
                                <option value="Education">Education</option>
                                <option value="Consulting">Consulting</option>
                                <option value="Jewelry">Jewelry</option>
                                <option value="Non-Profit">Non-Profit</option>
                                <option value="Fitness">Fitness</option>
                                <option value="Music">Music</option>
                                <option value="Interior Design">Interior Design</option>
                                <option value="Magazine">Magazine</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Technology">Technology</option>
                                <option value="Art">Art</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="goals" class="form-label">What are your top goals?</label>
                            <select class="form-select" name="goals" required aria-label="Default select example">
                                <option selected=""></option>
                                <option value="Promote an event or project">Promote an event or project</option>
                                <option value="Promote a physical business">Promote a physical business</option>
                                <option value="Publish a blog or other media">Publish a blog or other media</option>
                                <option value="Showcase work/expertise">Showcase work/expertise</option>
                                <option value="Sell products">Sell products</option>
                                <option value="Sell services">Sell services</option>
                                <option value="Market myself or my business">Market myself or my business</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="process" class="form-label">Where are you in your process?</label>
                            <select class="form-select" name="process" required aria-label="Default select example">
                                <option selected=""></option>
                                <option value="Collecting inspiration">Collecting inspiration</option>
                                <option value="Formalizing an idea or personal project">Formalizing an idea or personal project</option>
                                <option value="Turning a project or hobby into a business">Turning a project or hobby into a business</option>
                                <option value="Growing an existing business">Growing an existing business</option>
                                <option value="Replace my site with a new one">Replace my site with a new one</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="anyComment" class="form-label">Give us a summary of your project</label>
                            <textarea class="form-control" required name="anyComment" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 d-grid">
                            <button type="submit" name="request_quote_btn" class="btn btn-block btn-black">Request Quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "./components/footer.php";?>