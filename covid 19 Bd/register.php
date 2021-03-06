
<?php
    // header.php
    include ('header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('register-process.php');
        }
    ?>
   
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="register.php" class="nav__logo">Corona.tn</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="logout.php" class="nav__link active-link">Login</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
    
<!-- registration area -->
<section id="register">
        <div class="row m-0 ">
            <div class="col">
                <div class="text-center pb-5">
                    <h1 class="home__title">مرحبا بيك</h1>
                    <p class="contact__description"> كان تحس عندك اعراض الكورونا سجل معانا </p>
                    <span class="contact__description">العودة للصفحة الرئيسية <a href="logout.php">اضغط هنا</a></span>
                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                        </div>
                        <img src="./assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="contact__description">Choose Image</small>
                        <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <label for="inputName1">الاسم</label>
                                <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <label for="inputPrenom1">اللقب</label>
                                <input type="text" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName'];  ?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <label for="inputEmail4">البريد الالكتروني</label>
                                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                            <label for="inputNumber">رقم الهاتف </label>
                                <input type="text" name="password" id="password" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-row my-4">
                            <div class="col">
                            <label for="confirm_pwd">رقم بطاقة التعريف الرطنية </label>
                                <input type="text" name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="UserID">
                            </div>
                        </div>
                        <form> 
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">الغة</label>
                       <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Choose...</option>
                            <option value="1">العربية</option>
                            <option value="2">Français</option>
                            <option value="3">English</option>
                        </select>

                        <div class="form-group">
                            <label for="inputAddress">العنوان</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">(IP)العنوان الالكتروني</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="IP address: ">
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">المدينة</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="ِCity">
                                </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>نابل<</option>
                                    <option value="1">أريانة</option>
                                    <option value="2">باجة</option>
                                    <option value="3">بنزرت</option>
                                    <option selected>بن عروس</option>
                                    <option value="1">تطاوين</option>
                                    <option value="2">	توزر</option>
                                    <option value="3">تونس العاصمة</option>
                                    <option selected>جندوبة</option>
                                    <option value="1">زغوان</option>
                                    <option value="2">سليانة</option>
                                    <option value="3">	سوسة</option>
                                    <option selected>	سيدي بوزيد</option>
                                    <option value="1">صفاقس</option>
                                    <option value="2">	قابس</option>
                                    <option value="3">قبلي</option>
                                    <option selected>القصرين</option>
                                    <option value="1">قفصة</option>
                                    <option value="2">القيروان</option>
                                    <option value="3">الكاف</option>
                                    <option selected>مدنين</option>
                                    <option value="1">المنستير</option>
                                    <option value="2">	منوبة</option>
                                    <option value="3">المهدية</option>
                                    <option selected>Choose...</option>
                                </select>
                            </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">الامراض المزمنة</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="contact__description">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>
                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="button">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->
        <!--========== https://github.com/Justcodeit2/desktop-tutorial.git ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Corona.tn</a>
                    <span class="footer__description">profile</span>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100001324497791" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/just_code.it/" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="https://drive.google.com/drive/folders/11b4LW0SfziFp1WJ-gpXlLYj7iLVMYIFr" class="footer__social"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Course</a></li>
                        <li><a href="#" class="footer__link">Tutorial</a></li>
                        <li><a href="#" class="footer__link">chaine Youtube</a></li>
                        <li><a href="#" class="footer__link">subsucribe</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Event</a></li>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Address</h3>
                    <ul>
                        <li>Djerba-Tunis</li>
                        <li>Homt_souk #4180</li>
                        <li>+216 27 648 386</li>
                        <li>sekrafibadr@icloud.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Badercode. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>

</html>

<?php
    // footer.php
    include ('footer.php');
?>