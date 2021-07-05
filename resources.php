<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
    include "includes/menu.php";
?>
    <section class="section-resources-intro">
        <div class="container">
            <h1 class="heading-primary heading-primary--resources">
                <span class="text">
                    <span class="text--green">
                        Explore & 
                    </span>
                    <span class="text--white">
                        Learn
                    </span>
                </span>
            </h1>
            <p class="resources-intro__paragraph">
                Download e-books, guides, press kits & more…
            </p>
        </div>
    </section>
    <section class="section-resources">
        <div class="container">
            <div class="resources">
                <div class="resources__tab">
                    <a class="resources__link active" name="E-books" data-id="ebook" >
                        E-books
                    </a>
                    <a  class="resources__link" name="Open Source" data-id="openSource" >
                        Open Source
                    </a>
                    <a  class="resources__link" name="Press & Corporate" data-id="pressCorporate" >
                        Press & Corporate
                    </a>
                    <a class="resources__link" name="Webinar" data-id="webinar">
                        Webinar
                    </a>
                </div>
                <div class="resources__container">
                    <div class="resources__item active" id="ebook">
                        <div class="resources__wrapper">
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="resources__item" id="openSource">
                        <div class="resources__wrapper">
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="resources__item" id="pressCorporate">
                        <div class="resources__wrapper">
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="resources__item" id="webinar">
                        <div class="resources__wrapper">
                            <div class="resources__card">
                                <a href="#" class="resources__card__link" name="resource">
                                    <div class="resources__card__image-box">
                                        <img src="assets/images/resources.png" alt="our resource" class="resources__card__image">
                                    </div>
                                    <div class="resources__card__body">
                                        <h3 class="resources__card__header">
                                            E-books
                                        </h3>
                                        <p class="resources__card__paragraph">
                                            Learn Frontend / UI&UX From Scratch
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        //resource page
        const resources = document.querySelector(".resources");
        const resourceLinks = document.querySelectorAll(".resources__link");
        const resourcesContent = document.querySelectorAll(".resources__item");
        resources.addEventListener("click", function (e) {
        const id = e.target.dataset.id;
        if (id) {
            resourceLinks.forEach((btn) => {
                btn.classList.remove("active");
            });

            e.target.classList.add("active");

            resourcesContent.forEach((content) => {
                content.classList.remove("active");
            });

            const elem = document.getElementById(id);
            elem.classList.add("active");
        }
        });
    </script>
<?php
    include "includes/footer.php";
?>