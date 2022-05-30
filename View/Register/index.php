<!-- sign in -->
<div class="sign section--full-bg" data-bg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form method="post" class="sign__form">
                        <a href="index.html" class="sign__logo">
                            <h1><?=APP_NAME?></h1>
                        </a>

                        <div class="sign__group">
                            <input type="text" name="name" required oninvalid="this.setCustomValidity('ismingizni kiriting')" oninput="this.setCustomValidity('')" class="sign__input" placeholder="Ism">
                        </div>

                        <div class="sign__group">
                            <input type="email" name="email" required oninvalid="this.setCustomValidity('Email kiritilmadi')" oninput="this.setCustomValidity('')" class="sign__input" placeholder="elektron pochta (gmail)">
                        </div>

                        <div class="sign__group">
                            <input type="password" name="pass" required oninvalid="this.setCustomValidity('Paro\'lni kiriting')" oninput="this.setCustomValidity('')" class="sign__input" placeholder="Paro'l">
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

