<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
    include "includes/menu.php";
?>
    <section class="section-select-menu">
        <div class="container">
            <div class="select">
                <div class="select__field" id="select__field">
                    <p class="select__paragraph">
                        Select Social Media
                    </p>
                    <span class="icon">
                        &nbsp;
                    </span>
                </div>
                <ul class="select__list hidden">
                    <li class="select__item">
                        <span class="icon"></span>
                        <span class="text">
                            Facebook
                        </span>
                    </li>
                    <li class="select__item">
                        <span class="icon"></span>
                        <span class="text">
                            Twitter
                        </span>
                    </li>
                    <li class="select__item">
                        <span class="icon"></span>
                        <span class="text">
                            Pinterest
                        </span>
                    </li>
                    <li class="select__item">
                        <span class="icon"></span>
                        <span class="text">
                            Whatsapp
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script>
        const selectField = document.querySelector(".select__field");
        const selectParagraph = document.querySelector(".select__paragraph");
        const options = document.querySelectorAll(".select__item");
        const selectList = document.querySelector(".select__list");
        const selectIcon =  document.querySelector(".select__field .icon")

        selectField.addEventListener("click",function() {
            selectList.classList.toggle("hidden");
            selectIcon.classList.toggle("rotate");
        });
        options.forEach(option => {
            option.addEventListener("click",function(e) {
                selectParagraph.innerHTML = this.textContent;
                selectList.classList.toggle("hidden");
                selectIcon.classList.toggle("rotate");
            })
        });
    </script>
<?php
    include "includes/footer.php";
?>