<!-- head -->
<style>
    /*Profile Pic Start*/
    .picture-container {
        position: relative;
        cursor: pointer;
        text-align: center;
    }

    .picture {
        width: 106px;
        height: 106px;
        background-color: #999999;
        border: 4px solid #CCCCCC;
        color: #FFFFFF;
        border-radius: 50%;
        margin: 0px auto;
        overflow: hidden;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
    }

    .picture:hover {
        border-color: #2ca8ff;
    }

    .content.ct-wizard-green .picture:hover {
        border-color: #05ae0e;
    }

    .content.ct-wizard-blue .picture:hover {
        border-color: #3472f7;
    }

    .content.ct-wizard-orange .picture:hover {
        border-color: #ff9500;
    }

    .content.ct-wizard-red .picture:hover {
        border-color: #ff3b30;
    }

    .picture input[type="file"] {
        cursor: pointer;
        display: block;
        height: 100%;
        left: 0;
        opacity: 0 !important;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .picture-src {
        width: 100%;

    }

    /*Profile Pic End*/
</style>
<section class="section section--head">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head"><?= substr(ism, 0, 15) . "..." ?></h1>
            </div>

            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href=<?= menu(MENU_HOME) ?>>Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Kabinet</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end head -->

<!-- profile -->
<div class="catalog catalog--page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile">
                    <div class="profile__user">
                        <div class="profile__avatar">
                            <img style="width:50px; height: 50px;" src=<?= "Assets/img/avatars/".AVATAR ?> alt="">
                        </div>
                        <div class="profile__meta">
                            <h3><?= substr(ism, 0, 10) . "..." ?></h3>
                            <span><?= APP_NAME ?> ID: <?= user_id ?></span>
                        </div>
                    </div>

                    <!-- tabs nav -->
                    <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">


                        <li class="nav-item ">
                            <a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">Saqlangan Kinolar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Sozlamalar</a>
                        </li>
                    </ul>
                    <!-- end tabs nav -->

                    <a class="profile__logout" href=<?= menu(MENU_LOGOUT) ?> type="button">
                        <span>Chiqish</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">


            <div class="tab-pane fade show active" id="tab-2" role="tabpanel">
                <!-- saqlangan kinolar -->

                <div class="row row--grid">
                    <?php
                    /** @var array $res */
                    if (!empty($res)) {
                        foreach ($res as $r) {
                    ?>
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card card--favorites">
                                    <a href=<?= menu(MENU_VIDEO) . "&id=" . $r["id"] ?> class="card__cover">
                                        <img src=<?= "Assets/img/card/" . $r['file_img'] ?> alt="">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <button class="card__add" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z" />
                                        </svg>
                                    </button>
                                    <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
                                        </svg> 8.1</span>
                                    <h3 class="card__title"><a href="details.html"><?= $r['file_name'] ?></a></h3>
                                    <ul class="card__list">
                                        <li><?= $r['file_size'] ?></li>
                                        <li><?= $r['height'] . "p" ?></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- saqlangan kinolar tugadi -->


                    <?php
                        }
                    } else {
                        echo "<h1 style='color:skyblue; margin-left: 20%'>Sizda saqlangan Kinolar mavjud emas</h1>";
                    }
                    ?>
                </div>
                <!-- end favorites -->

                <!-- paginator -->
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
                <!-- end paginator -->
            </div>

            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="sign__wrap">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12">
                                    <form method="post" class="sign__form sign__form--profile sign__form--first" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="container">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src=<?= "Assets/img/avatars/".AVATAR ?> class="picture-src" id="wizardPicturePreview" title="">
                                                        <input type="file" name="avatar" id="wizard-picture" class="">
                                                    </div>
                                                    <h6 class="">Avatar</h6>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Sozlamalar</h4>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="username">ism</label>
                                                    <input id="username" required oninvalid="this.setCustomValidity('Yangi Ismingizni kiriting')" oninput="this.setCustomValidity('')" type="text" name="name" class="sign__input" value=<?= substr(ism, 0, 15) ?>>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="email">Email</label>
                                                    <input id="email" required oninvalid="this.setCustomValidity('Email kiritmadinggiz')" oninput="this.setCustomValidity('')" type="email" name="email" class="sign__input" value=<?= email ?>>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <button class="sign__btn" name="sub" type="submit">Saqlangan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end details form -->


                                <!-- end password form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content tabs -->
    </div>
</div>

<!-- end profile -->