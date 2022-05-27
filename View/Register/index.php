<!-- sign in -->
<div class="sign section--full-bg" data-bg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form method="post" class="sign__form">
                        <a href="index.html" class="sign__logo">
                            <h1>UzFilm</h1>
                        </a>

                        <div class="sign__group">
                            <input type="text" name="name" class="sign__input" placeholder="Ism">
                        </div>

                        <div class="sign__group">
                            <input type="email" name="email" class="sign__input" placeholder="elektron pochta (gmail)">
                        </div>

                        <div class="sign__group">
                            <input type="password" name="pass" class="sign__input" placeholder="Paro'l">
                        </div>

                        <input type="hidden" name="type" value="register">
                        <button class="sign__btn" name="sub" value="e" type="submit">Ro'yhatdan O'tish</button>


                        <span class="sign__text">Accountiz bormi? <a href=<?= menu(MENU_LOGIN) ?>>Kirish!</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end sign in -->

