<?php

session_start();
include ('helper.php');
include ('header.php');
$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Corona.tn</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#" class="nav__link">Login</a></li>
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                        

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Corona.tn</h1>
                        <h2 class="home__subtitle">كان تحس لي عندك اعراض <br> .كورونا</h2>
                        <a href="register.php" target = "_blank" class="button">عمر الاستمارة</a>
                    </div>
    
                    <img src="assets/img/home.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial">فاش تستنا باش تشارك معانا؟ <br> Corona.tn</h2>
                        <p class="about__description">شارك معانا فيسع ،احمي روحك و احمي صغارك ،معانا احنا و معاك انت انجموا نوقفوا مع بعضنا و نصلحوا تونس</p>
                        <a href="#" class="button">للمزيد من المعلومات</a>
                    </div>

                    <img src="assets/img/about.png" alt="" class="about__img">
                </div>
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">فاش تتمثل خدماتنا؟</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        <img src="assets/img/tunis.png" alt="" class="menu__img">
                        <h3 class="services__title">اللوغة العربية</h3>
                        <p class="services__description"> نقدمولك احسن و افضل محتوى تنجم تتمتع بيها اللغة التونسية </p>
                    </div>

                    <div class="services__content">
                        <img src="assets/img/youtu.png" alt="" class="menu__img">
                        <h3 class="services__title">توعية</h3>
                        <p class="services__description">نقدمولك باج توعوية كاملة على ذمتك فيها العديد من النصائح باش تحمي روحك</p>
                    </div>

                    <div class="services__content">
                        <img src="assets/img/certificate.png" alt="" class="menu__img">
                        <h3 class="services__title">انقراض الوباء</h3>
                        <p class="services__description">نقدمولك ضمان بعدم انتشار الوباء كان التزمت بالتعليمات</p>
                    </div>
                </div>
            </section>

            <!--========== MENU ==========-->
     <!-- ''''Slideshow container''''' -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/img/vaccine.jpg" style="width:100%">
  <div class="text"><h1>معلومات حول لقاح COVID-19.</h1>
    <p>هناك العديد من لقاحات COVID-19 قيد التطوير حاليًا وفي التجارب السريرية. يعتمد توافر لقاح COVID-19 الآمن والفعال على نتائج المرحلة 3 من التجارب السريرية الجارية حاليًا. إذا ثبت أن اللقاح آمن وفعال في المرحلة 3 من التجارب السريرية ، فسيتم إصدار تصريح من إدارة الغذاء والدواء (FDA) لاستخدامه في عدد محدود من الأفراد المعرضين لخطر كبير للإصابة بـ COVID -19 أو الأشخاص المعرضون لخطر الإصابة بمضاعفات خطيرة من COVID-19. ستستمر مراقبة اللقاح حيث يتم استخدامه في أعداد أكبر من السكان لضمان الكشف عن أي مؤشر على حدوث مضاعفات نادرة من استخدامه في أسرع وقت ممكن وتقييمه لمعرفة ما إذا كانت ناجمة عن اللقاح..</p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/Symp.jpg" style="width:100%">
  <div class="text"><h1>الأعراض.</h1>
    <p>ذا كنت تعاني من أعراض جديدة مثل السعال، أو صعوبة التنفس، أو فقدان الطعم أو الرائحة، أو الحمى، أو القشعريرة، أو احتقان األنف أو سيالنها، أو
الغثيان/القيء، أو اإلسهال، أو التهاب الحلق، أو الصداع، أو األلم العضلي، أو اإلجهاد:
اعزل نفسك فورا
.</p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/Mask.jpg" style="width:100%">
  <div class="text"><h1>لماذا يجب عليك ارتداء كمامة.</h1>
    <p>تُعد أغطية الوجه القماشية خطوة مهمة للمساعدة في إبطاء انتشار COVID-19 عند دمجها مع الإجراءات الوقائية اليومية الأخرى بما في ذلك التباعد الاجتماعي وغسل اليدين المتكرر.</p>
</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- /END THE FEATURETTES -->

</div>

</main>

</section>
<section class="app section bd-container">
    <div class="app__container bd-grid">
        <div class="app__data">
            <span class="section-subtitle app__initial"></span>
            <h2 class="section-title app__initial">تجنب الاقتراب كثيرا من الناس</h2>
            <p class="app__description">احتفظ بمسافة لا تقل عن متر واحد (3 أقدام) بينك وبين أي شخص يسعل أو يعطس.
                لماذا؟ عندما يسعل الشخص أو يعطس، تتناثر من أنفه أو فمه قُطيرات سائلة صغيرة قد تحتوي على الفيروس. فإذا كنت شديد الاقتراب منه يمكن أن تتنفس هذه القُطيرات، بما في ذلك الفيروس المسبب لمرض كوفيد-19 إذا كان الشخص مصاباً به.
                </p>
        </div>

        <img src="assets/img/dis_t.png" alt="" class="app__img">
    </div>
</section>
<section class="app section bd-container">
    <div class="app__container bd-grid">
        <div class="app__data">
            <span class="section-subtitle app__initial"></span>
            <h2 class="section-title app__initial">اغسل اليدين بانتظام.</h2>
            <p class="app__description">لماذا؟ إن تنظيف يديك بالماء والصابون أو فركهما بمطهر كحولي من شأنه أن يقتل الفيروسات التي قد تكون على يديك.
            </p>
        </div>

        <img src="assets/img/wash_t.png" alt="" class="app__img">
    </div>
</section>
<section class="app section bd-container">
    <div class="app__container bd-grid">
        <div class="app__data">
            <span class="section-subtitle app__initial"></span>
            <h2 class="section-title app__initial">اتجنب لمس عينيك وأنفك وفمك.</h2>
            <p class="app__description">لماذا؟ تلمس اليدين العديد من الأسطح ويمكنها أن تلتقط الفيروسات. وإذا تلوثت اليدان فإنهما قد تنقلان الفيروس إلى العينين أو الأنف أو الفم. ويمكن للفيروس أن يدخل الجسم عن طريق هذه المنافذ ويصيبك بالمرض.</p>
        </p>
        </div>

        <img src="assets/img/touch_t.png" alt="" class="app__img">
    </div>
</section>

            <!--===== APP =======
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">App</span>
                        <h2 class="section-title app__initial">App will be aviable</h2>
                        <p class="app__description">Find our application and download it, you can get many courses, Tutorial, see your certificate and much more.</p>
                        <div class="app__stores">
                            <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                            <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                        </div>
                    </div>

                    <img src="assets/img/movil-app.png" alt="" class="app__img">
                </div>
            </section>-->

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">If you want to get a subsicribe, contact us and we will attend you quickly, with our 24/7 chat service.</p>
                    </div>

                    <div class="contact__button">
                        <a href="https://www.instagram.com/badr_sekrafi/" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

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
                    <h3 class="footer__title">Adress</h3>
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
<!--========== CSS ===row featurette=======-->
<link rel="stylesheet" href="css/carousele.css">
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<?php
include "footer.php";
?>
