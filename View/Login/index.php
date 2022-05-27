
<div class="sign section--full-bg" data-bg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form class="sign__form" method="POST">
                        <a href="index.html" class="sign__logo">
                            <h1>UzFilm</h1>
                        </a>

                        <div class="sign__group">
                            <input type="text" name="email" class="sign__input" placeholder="Email">
                        </div>

                        <div class="sign__group">
                            <input type="password" name="pass" class="sign__input" placeholder="Paro'l">
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">Meni eslab qoling</label>
                        </div>
                        <input type="hidden" name="type" value="login">
                        <button class="sign__btn" name="sub" value="login" type="submit">Kirish</button>


                        <span class="sign__text">Accountingiz yo'qmi? <a href=<?= menu(MENU_REGISTER) ?>>Ro'yhatdan O'tish!</a></span>

                        <span class="sign__text"><a href=<?= menu(MENU_FORGOT) ?>>Paro'lni tiklash?</a></span>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sign in -->