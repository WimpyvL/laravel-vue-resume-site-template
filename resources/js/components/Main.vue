<template>
    <div class="main-content minh-100vh w-100">
        <section id="home" class="h-100vh w-100 home-section d-flex overflow-auto align-items-center">
            <div class="about-me">
                <h1 class="font-size-50 text-white">Name Surname</h1>
                <h3 class="profession text-white">I'm <span id="profession-animation">{{ this.profession }}</span></h3>
            </div>
        </section>

        <main class="ml-300px overflow-y-hidden">
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title pb-4">
                        <h2 class="font-weight-bold">About</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-3 col-md-4 col-sm-8 col-8">
                            <img class="rounded w-100" src="img/unnamed.jpg" alt="Photo">
                        </div>

                        <div class="col">
                            <h3 class="font-weight-bold text-blue">The position you are applying for</h3>
                            <p class="font-italic text-secondary">Office/remote/freelance, full-time/part-time</p>
                            <div class="row">
                                <div class="col-md">
                                    <ul class="data-list" style="list-style: none; padding: 0;">
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Phone:</strong>
                                            <span><a target="_blank" href="">+1234567890</a></span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Websites:</strong>
                                            <span><a target="_blank" href="">Github</a>, <a target="_blank" href="">LinkedIn</a></span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Date of Birth:</strong>
                                            <span>01.01.0001</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Country:</strong>
                                            <span>Your Country</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md">
                                    <ul class="data-list" style="list-style: none; padding: 0;">
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Email:</strong>
                                            <span><a href="">your.email@example.com</a></span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Rank:</strong>
                                            <span>Your rank</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Age:</strong>
                                            <span>Your age</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-chevron-right text-primary"></i>
                                            <strong>Freelance:</strong>
                                            <span>Available/Non-available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Facts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row" data-aos="zoom-in">
                        <div class="col-12 col-sm">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span class="font-weight-bold">0</span>
                                <p>
                                    <strong>Your fact</strong>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span class="font-weight-bold">0</span>
                                <p>
                                    <strong>Your fact</strong>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
                                <span class="font-weight-bold">0</span>
                                <p>
                                    <strong>Your fact</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row justify-content-between pb-5">
                        <div class="col-12 col-sm-4 col-md-3">
                            <span class="font-italic"><b>Tech skills</b>:</span>
                            <ul class="p-0 mt-2" style="list-style: none;">
                                <li class="mb-1">
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your tech skill;
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your tech skill.
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3">
                            <span class="font-italic"><b>Language skills</b>:</span>
                            <ul class="p-0 mt-2" style="list-style: none;">
                                <li class="mb-1">
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your language - A1;
                                </li>
                                <li class="mb-1">
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your language - A1.
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3">
                            <span class="font-italic"><b>Soft skills</b>:</span>
                            <ul class="p-0 mt-2" style="list-style: none;">
                                <li class="mb-1">
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your soft skill;
                                </li>
                                <li class="mb-1">
                                    <i class="bi bi-chevron-right text-primary"></i>
                                    Your soft skill.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="mb-4">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="mb-4">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h2 class="skill d-flex justify-content-between"><span>Your skill</span><span class="text-right">50%</span></h2>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="resume">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Education</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row pb-4">
                        <div class="col-12 col-sm-6" data-aos="fade-up">
                            <h3 class="font-weight-bold">Sumary</h3>
                            <div class="resume-item">
                                <h4 class="text-uppercase font-weight-bold">Name Surname</h4>
                                <p class="font-italic text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, quibusdam?</p>
                                <ul>
                                    <li>Address, City, Country</li>
                                    <li>+1234567890</li>
                                    <li>your.email@example.com</li>
                                </ul>
                            </div>

                            <h3 class="font-weight-bold">Education</h3>
                            <div class="resume-item">
                                <h4 class="text-uppercase font-weight-bold">Your specialty</h4>
                                <h5>Start date - end date</h5>
                                <p class="font-italic text-secondary">Name of the educational institution, City, Country</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, cupiditate!</p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6" data-aos="fade-up">
                            <h3 class="font-weight-bold">Professional Experience</h3>
                            <div class="resume-item">
                                <h4 class="text-uppercase font-weight-bold">YOUR POSITION</h4>
                                <h5>Start date - end date</h5>
                                <p class="font-italic text-secondary">Company, City, Country</p>
                                <ul class="">
                                    <li>Your achievement.</li>
                                    <li>Your achievement.</li>
                                    <li>Your achievement.</li>
                                </ul>
                            </div>
                            <div class="resume-item">
                                <h4 class="text-uppercase font-weight-bold">YOUR POSITION</h4>
                                <h5>Start date - end date</h5>
                                <p class="font-italic text-secondary">Company, City, Country</p>
                                <ul class="">
                                    <li>Your achievement.</li>
                                    <li>Your achievement.</li>
                                    <li>Your achievement.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Portfolio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <!-- <div class="pb-4">
                        <h3 class="text-muted text-center">No projects yet...</h3>
                    </div> -->

                    <div class="row justify-content-around" data-aos="zoom-in">
                        <div class="border portfolio-wrap col-8 col-sm-3 col-md-2 p-0 mb-5">
                            <img class="rounded w-100" src="/img/unnamed.jpg" alt="Your portfolio project">

                            <div class="btn-group portfolio-links" role="group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-modal-lg">
                                    <i class="bi bi-plus"></i>
                                </button>

                                <button type="button" class="btn btn-primary" onclick="window.location.href = '';">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>

                        <div class="border portfolio-wrap col-8 col-sm-3 col-md-2 p-0 mb-5">
                            <img class="rounded w-100" src="/img/unnamed.jpg" alt="Your portfolio project">

                            <div class="portfolio-links btn-group" role="group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-modal-lg">
                                    <i class="bi bi-plus"></i>
                                </button>

                                <button type="button" class="btn btn-primary" onclick="window.location.href = '';">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>

                        <div class="border portfolio-wrap col-8 col-sm-3 col-md-2 p-0 mb-5">
                            <img class="rounded w-100" src="/img/unnamed.jpg" alt="Your portfolio project">

                            <div class="portfolio-links btn-group" role="group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-modal-lg">
                                    <i class="bi bi-plus"></i>
                                </button>

                                <button type="button" class="btn btn-primary" onclick="window.location.href = '';">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Your portfolio project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This is your portfolio project.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Reviews</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row reviews pb-4">
                        <div class="col-sm review-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="img/unnamed.jpg" class="review-img" alt="">
                            <h3>Some person</h3>
                            <h4>Person position</h4>
                        </div>
                        <div class="col-sm review-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="img/unnamed.jpg" class="review-img" alt="">
                            <h3>Some person</h3>
                            <h4>Person position</h4>
                        </div>
                        <div class="col-sm review-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="img/unnamed.jpg" class="review-img" alt="">
                            <h3>Some person</h3>
                            <h4>Person position</h4>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>
                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>
                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>

                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>
                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>
                        <div class="service px-3 mb-3 col-lg-4 col-md-6">
                            <div class="icon">
                                <i class="bi bi-question-lg"></i>
                            </div>
                            <h4 class="font-weight-bold">Your service</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eum.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="pb-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Contacts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sem sed turpis viverra convallis. Sed rutrum ante sit amet rhoncus volutpat. Proin et vestibulum mauris. Duis gravida quis lorem eget cursus. Curabitur et eleifend lorem. Sed ultricies non odio quis dignissim. Praesent eu urna eu ante egestas condimentum blandit et arcu. Nunc scelerisque mollis blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie id quam vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>

                    <div class="row justify-content-around">
                        <div data-aos="fade-up" class="col-lg-5 shadow-lg mb-3">
                            <div class="p-4">
                                <div>
                                    <i class="bi bi-geo-alt bi-contact-information"></i>
                                    <h4 class="mb-2 contact-info-text font-weight-bold">Location:</h4>
                                    <p class="mb-4 contact-info-text">Address, City, Country</p>
                                </div>

                                <div>
                                    <i class="bi bi-envelope bi-contact-information"></i>
                                    <h4 class="mb-2 contact-info-text font-weight-bold">Email:</h4>
                                    <p class="mb-4 contact-info-text">your.email@example.com</p>
                                </div>

                                <div>
                                    <i class="bi bi-phone bi-contact-information"></i>
                                    <h4 class="mb-2 contact-info-text font-weight-bold">Phone:</h4>
                                    <p class="mb-4 contact-info-text">+1234567890</p>
                                </div>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26556786.070929594!2d-116.97570703047097!3d35.65741775774772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2z0KHQv9C-0LvRg9GH0LXQvdGWINCo0YLQsNGC0Lgg0JDQvNC10YDQuNC60Lg!5e0!3m2!1suk!2sua!4v1670618482401!5m2!1suk!2sua" style="border: 0; width: 100%; height: 295px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="col-lg-6 shadow-lg mb-3">
                            <form @submit.prevent="validateForm" class="p-4">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="contactName">Your name</label>
                                        <input v-model="contactForm.name" id="contactName" class="form-control" required type="text" placeholder="" maxlength="30">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contactEmail">Your email</label>
                                        <input v-model="contactForm.email" id="contactEmail" class="form-control" required type="email" placeholder="" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contactSubject">Subject</label>
                                    <input v-model="contactForm.subject" id="contactSubject" required type="text" class="form-control" placeholder="" maxlength="30">
                                </div>
                                <div class="form-group">
                                    <label for="contactMessage">Message</label>
                                    <textarea v-model="contactForm.message" id="contactMessage" class="form-control" style="resize: none;" required placeholder="" rows="9" maxlength="500"></textarea>
                                </div>
                                <div style="visibility: hidden;" class="alert alert-success" role="alert">
                                    <strong>{{ this.contactAlert.message }}</strong>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <a class="back-to-top d-flex justify-content-center align-items-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
    </div>
</template>

<script>
export default {
    mounted() {
        let backToTop = document.querySelector(".back-to-top");
        let showNav = document.getElementById("showNav");
        let aside = document.querySelector("aside");
        let mainContent = document.querySelector(".main-content");

        window.onresize = function(e) {
            if (document.documentElement.clientWidth > 1180) {
                aside.classList.remove("hideAside");
                aside.classList.add("showAside");
            } else {
                aside.classList.remove("showAside");
                aside.classList.add("hideAside");
            }
        }

        backToTop.onclick = function(e) {
            document.documentElement.scrollIntoView({
                behavior: "smooth",
            });
        };

        showNav.onclick = function(e) {
            if (showNav.classList.contains("bi-list") && (document.documentElement.clientWidth <= 1180)) {
                aside.classList.remove("hideAside");
                aside.classList.add("showAside");

                showNav.classList.remove("bi-list");
                showNav.classList.add("bi-x");
            } else {
                aside.classList.remove("showAside");
                aside.classList.add("hideAside");

                mainContent.style.overflow = "";

                showNav.classList.remove("bi-x");
                showNav.classList.add("bi-list");
            }
        };

        setInterval(() => {
            let profession = document.getElementById("profession-animation");

            if (this.counter === 0) {
                profession.innerHTML += "|";
                this.counter = 1;
            } else {
                profession.innerHTML = this.profession;
                this.counter = 0;
            }
        }, 300);
    },
    created() {
        window.addEventListener("scroll", this.scrolling);
    },
    methods: {
        scrolling() {
            let backToTop = document.querySelector(".back-to-top");

            if (scrollY >= 200) {
                backToTop.classList.add("active");
            } else {
                backToTop.classList.remove("active");
            }
        },
        validateForm() {
            let alert = document.querySelector(".alert");

            alert.style.visibility = "visible";

            if (alert.classList.contains("alert-danger")) alert.classList.remove("alert-danger");
            if (alert.classList.contains("alert-success")) alert.classList.remove("alert-success");

            alert.classList.add("alert-warning");
            this.contactAlert.message = "Pending...";

            axios.post("/send-email", this.contactForm)
                .then(res => {
                    alert.classList.remove("alert-warning");
                    alert.classList.add("alert-success");

                    this.contactAlert.message = "Email sent successfully!";

                    this.contactForm.name = this.contactForm.email = this.contactForm.subject = this.contactForm.message = "";
                })
                .catch(err => {
                    alert.classList.remove("alert-warning");
                    alert.classList.add("alert-danger");

                    if (err.response.status === 422) {
                        this.contactAlert.message = "Error! " + err.response.data.message;
                    } else {
                        this.contactAlert.message = "Error! Please try again later.";
                    }
                });
        },
    },
    data() {
        return {
            profession: "Profession",
            counter: 0,
            contactForm: {
                name: "",
                email: "",
                subject: "",
                message: "",
            },
            contactAlert: {
                message: "nothing",
            },
        }
    },
}
</script>

<style>

</style>