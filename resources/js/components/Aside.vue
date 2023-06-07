<template>
    <aside class="d-flex flex-column justify-content-between position-fixed overflow-auto h-100 w-300px bg-header text-light shadow">
        <header class="container">
            <div class="profile">
                <img class="profile-avatar" src="/img/unnamed.jpg" alt="Photo">
                <h3 class="font-weight-bold text-center">
                    <a class="name-link text-decoration-none text-light" href="/">Name Surname</a>
                </h3>

                <div class="mt-3 text-center">
                    <a class="social-link" target="_blank" href="/">
                        <i class="bi-skype" style="text-decoration: none; color: white;"></i>
                    </a>
                    <a class="social-link" target="_blank" href="/">
                        <i class="bi-facebook" style="text-decoration: none; color: white;"></i>
                    </a>
                    <a class="social-link" target="_blank" href="/">
                        <i class="bi-telegram" style="text-decoration: none; color: white;"></i>
                    </a>
                    <a class="social-link" target="_blank" href="/">
                        <i class="bi-linkedin" style="text-decoration: none; color: white;"></i>
                    </a>
                    <a class="social-link" target="_blank" href="/">
                        <i class="bi-github" style="text-decoration: none; color: white;"></i>
                    </a>
                </div>
            </div>

            <nav class="nav">
                <ul>
                    <li>
                        <a id="home_link" href="#home" class="nav-link">
                            <i class="nav-icon pr-1 bi-house-door"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a id="about_link" href="#about" class="nav-link">
                            <i class="nav-icon pr-1 bi-person"></i>
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a id="resume_link" href="#resume" class="nav-link">
                            <i class="nav-icon pr-1 bi-file-earmark"></i>
                            <span>Education</span>
                        </a>
                    </li>
                    <li>
                        <a id="portfolio_link" href="#portfolio" class="nav-link">
                            <i class="nav-icon pr-1 bi-journal-check"></i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a id="blog_link" href="#blog" class="nav-link">
                            <i class="nav-icon pr-1 bi-book"></i>
                            <span>Blog</span>
                        </a>
                    </li> -->
                    <li>
                        <a id="contact_link" href="#contact" class="nav-link">
                            <i class="nav-icon pr-1 bi-envelope"></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <footer class="m-3">
            <div class="container text-center">
                <div>
                    © Copyright
                    <strong>IPortfolio</strong>
                </div>
                <div>
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer>
    </aside>
</template>

<script>
export default {
    mounted() {
        this.handleScroll();

        let anchors = document.querySelectorAll('.nav-link');

        for (let anchor of anchors) {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                let blockID = anchor.getAttribute('href');
                
                document.querySelector(blockID).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            })
        }
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            // let ids = ["home", "about", "resume", "portfolio", "blog", "contact"];
            let ids = ["home", "about", "resume", "portfolio", "contact"];

            for (let id of ids) {
                let elem = document.getElementById(id);

                if (Math.floor(this.getCoords(elem).top) <= scrollY) {
                    if (this.activeLink !== "") {
                        this.activeLink.classList.remove("active");
                    }

                    let link = document.getElementById(id + "_link");
                    link.classList.add("active");
                    this.activeLink = link;
                }
            }
        },
        getCoords(elem) {
            let box = elem.getBoundingClientRect();

            return {
                top: box.top + scrollY,
                left: box.left + scrollY
            };
        }
    },
    data: function () {
        return {
            activeLink: "",
        }
    },
}
</script>

<style>

</style>