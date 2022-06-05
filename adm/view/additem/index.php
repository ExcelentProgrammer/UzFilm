<!-- main content -->

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Yangi kino qo'shish</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Rasim yuklash (190 x 270)</label>
                                        <input id="form__img-upload" name="img" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">

                                        <input type="text" name="video_title" class="form__input" required
                                               placeholder="Kino nomi"
                                               oninvalid="this.setCustomValidity('Kino nomi bo\'sh')"
                                               oninput="this.setCustomValidity('')"/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="video_caption" class="form__textarea"
                                                  placeholder="Kino haqida malumot"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <div class="form__group">
                                        <input type="number" class="form__input" name="video_p"
                                               placeholder="Video sifati (320, 480)">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <div class="form__group">
                                        <input type="number" class="form__input" name="video_o"
                                               placeholder="video o'lchami (100 {mb})">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <ul class="form__radio">
                                        <li>
                                            <span>video turi:</span>
                                        </li>
                                        <li>
                                            <input id="type1" type="checkbox" name="type" checked="">
                                            <label id="video_type" for="type1">Kino</label>

                                        </li>

                                    </ul>

                                    <!-- serial yangi yoki eski -->
                                    <ul id="hide1" class=" hide form__radio">
                                        <li>
                                            <span>Yangimi:&#160;</span>
                                        </li>
                                        <li>
                                            <input id="type11" type="checkbox" name="new" checked="">
                                            <label id="new_or_old" for="type11">ha</label>
                                        </li>

                                    </ul>
                                    <!-- end serial yangi yoki eski -->
                                </div>
                                <style>
                                    .form__radio label:before {
                                        content: '';
                                        display: block;
                                        position: absolute;
                                        width: 16px;
                                        height: 16px;
                                        border: 4px solid green;
                                        background-color: transparent;
                                        border-radius: 50%;
                                        left: 0;
                                        top: 4px;
                                        transition: 0.5s;
                                    }

                                    .form__radio input:checked + label:before {
                                        border-color: red;
                                    }

                                    .hide {
                                        display: none;
                                    }
                                </style>
                                <div id="hide" class="hide col-12 col-sm-6 col-lg-6">
                                    <div class="form__group">
                                        <input type="number" name="id" class="form__input" placeholder="Seriyal idsi">
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form__video">
                                        <label id="movie1" for="form__video-upload">video yuklash</label>
                                        <input id="form__video-upload" name="movie" class="form__video-upload"
                                               type="file" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group form__group--link">
                                        <input type="text" name="video_link" class="form__input"
                                               placeholder="Video link yordamida qo'shish">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="sub" class="form__btn">Yuklash</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>

<script>
    var checkbox = document.querySelector("#type1");

    checkbox.addEventListener('change', function () {
        if (this.checked) {

            var element = document.getElementById("hide1");
            element.classList.add("hide");
            var element = document.getElementById("hide");
            element.classList.add("hide");
            var type = document.getElementById("video_type").innerHTML = "Kino";


        } else {
            var element = document.getElementById("hide1");
            element.classList.remove("hide");
            var type = document.getElementById("video_type").innerHTML = "Sariyal";
        }
    });


    var checkbox = document.querySelector("#type11");

    checkbox.addEventListener('change', function () {
        if (this.checked) {

            var element = document.getElementById("hide");
            element.classList.add("hide");
            var type = document.getElementById("new_or_old").innerHTML = "ha";


        } else {
            var element = document.getElementById("hide");
            element.classList.remove("hide");
            var type = document.getElementById("new_or_old").innerHTML = "yo'q";

        }
    });
</script>
<!-- end main content -->