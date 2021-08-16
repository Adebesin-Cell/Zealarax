<?php 
    include "includes/header.php";
    include "includes/sidebar.php";
    include "includes/menu.php";
?>
    <section class="section-newsletter">
        <div class="container">
            <div class="newsletter">
                <h1 class="newsletter__header">
                    <span class="text text--green">
                        Subscribe to our 
                    </span>
                    <span class="text text--white">
                        newsletter.
                    </span>
                </h1>
                <p class="newsletter__paragraph">
                    Get a selection of our top news for entrepreneurs and product managers. It’s delivered once a month, straight to your inbox.
                </p>
               <div class="newsletter__offers">
                   <h1 class="newsletter__offers__header">
                        What’s in it for you?
                   </h1>
                   <ul class="newsletter__offers__list">
                       <li class="newsletter__offers__item">
                           <span class="icon">
                                &nbsp;
                           </span>
                           <span class="text">
                               Get free ebooks, guides and other resources
                           </span>
                       </li>
                       <li class="newsletter__offers__item">
                           <span class="icon">
                                &nbsp;
                           </span>
                           <span class="text">
                                Learn more about development, design and strategy
                           </span>
                       </li>
                       <li class="newsletter__offers__item">
                           <span class="icon">
                                &nbsp;
                           </span>
                           <span class="text">
                                Discover tools for improving yourself and your company
                           </span>
                       </li>
                   </ul>
                   <form action="#" class="newsletter__form" method="POST">
                        <h1 class="newsletter__form__header">
                            It’s Free!
                        </h1>
                        <div class="newsletter__group">
                            <input type="text" class="newsletter__input" required placeholder="Enter your email address">
                            <label for="enter-email" class="newsletter__label">Enter your email address</label>
                        </div>
                        <p class="newsletter__text">
                            Zealarax is committed to protecting your privacy. We will use your personal information only to provide the products and services you requested from us. We would, from time to time, like to inform you about our services, as well as other content you may be interested in. If you allow us to contact you for these purposes, please mark the following fields:
                        </p>
                        <div class="newsletter__group newsletter__group--2">
                            <input type="checkbox" name="check" class="check" id="check">
                            <label for="check" class="check__label">
                                <div class="checkbox">
                                    <div class="icon">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                    </div>
                                </div>
                            </label>
                            <p class="newsletter__aggreement">
                                I agree to receive newsletter from zealarax every month
                            </p>
                        </div>
                        <div class="newsletter__subscribe">
                            <p class="newsletter__subscribe__text">
                                You may unsubscribe from these communications at any time. To get more information on how to  unsubscribe, and 
                                about the ways we protect your privacy and personal information, please open our
                                <a href="#" class="privacy-policy">
                                    Privacy policy
                                </a>.
                            </p>
                            <div class="newsletter__subscribe__btn-box">
                                <button class="newsletter__subscribe__btn" type="submit">Subscribe</button>
                            </div>
                        </div>
                   </form>
               </div>
            </div>
        </div>
    </section>
<?php
    include "includes/footer.php";
?>