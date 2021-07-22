<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
    include "includes/menu.php";
?>
    <section class="section-contact">
        <div class="container">
            <div class="contact">
                <h1 class="heading-primary heading-primary--contact">
                    <span class="text text--green">
                        Let’s get you
                    </span>
                    <span class="text text--white">
                        an estimate
                    </span>
                </h1>
                <form action="#" class="contact__form" method="POST">
                    <!-- <div class="contact__form-group">
                        <input type="text" class="contact__input">
                    </div> -->
                    <div class="contact__form-group">
                        <label for="fullName" class="contact__label">Your Full Name</label>
                        <input type="text" id="fullName" name="Full Name" class="contact__input contact__input--fullname">
                    </div>
                    <div class="contact__form-group">
                        <label for="companyName" class="contact__label">Your Company Name</label>
                        <input type="text" id="companyName" name="Company Name" class="contact__input contact__input--company">
                    </div>
                    <div class="contact__form-group">
                        <label for="fullName" class="contact__label">Your Email</label>
                        <input type="email" id="email" name="email" class="contact__input contact__input--email">
                    </div>
                    <div class="contact__form-group">
                        <label for="about" class="contact__label">
                            About the Project
                        </label>
                        <textarea name="about the project" id="about" cols="30" rows="10" class="contact__textarea"></textarea>
                    </div>
                    <div class="contact__form-group">
                        <button type="submit" class="contact__btn">
                            <span>Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
    include "includes/footer.php";
?>