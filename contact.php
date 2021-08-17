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
                    <div class="contact__select">
                        <p class="contact__select__paragraph">
                            What is the type of your project?
                        </p>
                        <div class="select">
                            <div class="select__field select__field--1">
                                <input type="text" class="select__input select__input--1" placeholder="Choose">
                                <span class="icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="var(--white)" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                                </span>
                            </div>
                            <ul class="select__list select__list--1 hidden">
                                <li class="select__item">Website</li>
                                <li class="select__item">Mobile App</li>
                                <li class="select__item">Desktop App</li>
                                <li class="select__item">Custom Software</li>
                                <li class="select__item">UI / UX</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact__select">
                        <p class="contact__select__paragraph">
                            How did you find out about us?
                        </p>
                        <div class="select">
                            <div class="select__field select__field--2">
                                <input type="text" class="select__input select__input--2" placeholder="Choose">
                                <span class="icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="var(--white)" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                                </span>
                            </div>
                            <ul class="select__list select__list--2  hidden">
                                <li class="options">Facebook</li>
                                <li class="options">A friend Suggestion</li>
                                <li class="options">Advertisement</li>
                                <li class="options">Twitter</li>
                                <li class="options">Other</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact__form-group contact__form-group--input">
                        <input type="text" id="fullName" name="Full Name" class="contact__input contact__input--fullname" placeholder="Your Full Name" required>
                        <label for="fullName" class="contact__label">Your Full Name</label>
                    </div>
                    <div class="contact__form-group">
                        <input type="text" id="companyName" name="Company Name" class="contact__input contact__input--company" placeholder="Your Company Name" required>
                        <label for="companyName" class="contact__label">Your Company Name</label>
                    </div>
                    <div class="contact__form-group">
                        <input type="email" id="email" name="email" class="contact__input contact__input--email" placeholder="Your Email" required>
                        <label for="fullName" class="contact__label">Your Email</label>
                    </div>
                    <div class="contact__form-group">
                        <label for="about" class="contact__label--textarea">
                            About the Project
                        </label>
                        <textarea name="about the project" id="about" cols="30" rows="1" class="contact__textarea" required></textarea>
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
    <script>
        const selectField = document.querySelector(".select__field--1");
        const selectInput = document.querySelector(".select__input--1");
        const options = document.querySelectorAll(".select__item");
        const selectList = document.querySelector(".select__list--1");
        const selectIcon =  document.querySelector(".select__field--1 .icon svg")
        selectInput.blur();
        selectField.addEventListener("click",function() {
            selectList.classList.toggle("hidden");
            selectIcon.classList.toggle("rotate");
            selectInput.blur();
        });
        options.forEach(option => {
            option.addEventListener("click",function(e) {
                selectInput.value = this.textContent;
                selectList.classList.toggle("hidden");
                selectIcon.classList.toggle("rotate");
                selectInput.blur();
                console.log(selectInput.value);
            })
        });
        
        const selectField2 = document.querySelector(".select__field--2");
        const selectInput2 = document.querySelector(".select__input--2");
        const options2 = document.querySelectorAll(".options");
        const selectList2 = document.querySelector(".select__list--2");
        const selectIcon2 =  document.querySelector(".select__field--2 .icon svg")
        selectInput.blur();
        selectField2.addEventListener("click",function() {
            selectList2.classList.toggle("hidden");
            selectIcon2.classList.toggle("rotate");
            selectInput2.blur();
        });
        options2.forEach(option => {
            option.addEventListener("click",function(e) {
                selectInput2.value = this.textContent;
                selectList2.classList.toggle("hidden");
                selectIcon2.classList.toggle("rotate");
                selectInput2.blur();
            })
        });
    </script>
<?php
    include "includes/related-posts.php";
    include "includes/footer.php";
?>