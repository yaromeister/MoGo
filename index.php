<!-- Підключення до бази даних -->
<?php
    require_once 'Config\connect.php';
?>
<!------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!------------------------------------Шрифти------------------------------------>
    <!-------Lobster------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-------Montserrat regular&bold------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-------Roboto------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <!------------------------------------Стилі------------------------------------>
    <link rel="stylesheet" href="CSS\style_zero.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="CSS\style.css">
    <!-----Іконка вкладки сайту----->
    <link rel="shortcut icon" href="IMG/favicon.ico">
    <title>DYMAR</title>
</head>
<body>
    <!--------------------------------INTRO-------------------------------->
        <header id="header">
           <div class="container">
                <div class="header__inner">
                    <div class="header_logo" data-scroll="#intro">DYMAR</div>

                    <nav class="header_nav" id="nav">
                        <a class="nav__link" href="#" data-scroll="#about">About</a>
                        <a class="nav__link" href="#" data-scroll="#services">Service</a>
                        <a class="nav__link" href="#" data-scroll="#works">Work</a> 
                        <a class="nav__link" href="#" data-scroll="#footer">Contact</a>
                    </nav>

                    <button class="nav-toggle" type="button" id="nav_toggle">
                        <span class="nav-toggle__item">Menu</span>
                    </button>
                </div>
           </div>
        </header>

        
            <div class="intro" id="intro">

                <div class="video_wrapper">
                    <div class="video">
                        <video class="video_media" src="IMG/video.mp4" autoplay muted loop>
                            
                        </video>
                    </div>
                </div>
                
                <div class="container">
                    <div class="intro__inner">
                        <h2 class="intro__suptitle">Творчість. Ентузіазм</h2>
                        <h1 class="intro__title">Dymar</h1>
                    </div>
                </div>
        
                <div class="slider">
                   <div class="container"> 
                        <div class="slider__inner">
                            <a href="Blog\blog_main_page.php" class="slider__item intro__button"><b>01</b> <span class="slider__text">Блог</span></a>
                            <a href="Gallery\Gallery_main_page.php" class="slider__item intro__button"><b>02</b> <span class="slider__text">Галерея</span></a>
                        </div>
                   </div>
                </div>
            </div>

        
        <!--------------------------------STORY ABOUT US-------------------------------->
        <section class="section" id="about">
            <div class="container">
                <div class="section__header">
                    <h3 class="section__suptitle">Хто? Що? Для кого?</h3>
                    <h2 class="section__title">Коротко про нас</h2>
                    <div class="section__text">
                        <p>
                            Ми молода команда ентузіастів, які люблять те чим займаються, а саме:
                            фотографування, веб-дизайн, розробка фулстек веб-проектів. "Від людей - для людей" - основний принцип нашого методу роботи. 
                        </p>
                    </div>
                </div>
                
                <div class="about">
                    <div class="about__item">
                        <div class="about__inner">
                            <div class="about__image">
                                <img src="IMG\About\1.jpg" alt="">
                            </div>
                            <div class="about__text">Фото</div>
                        </div>
                    </div>
                    <div class="about__item">
                        <div class="about__inner">
                            <div class="about__image">
                                <img src="IMG\About\2.jfif" alt="">
                            </div>
                            <div class="about__text">Дизайн</div>
                        </div>
                    </div>
                    <div class="about__item">
                       <div class="about__inner">
                        <div class="about__image">
                            <img src="IMG\About\3.jpg" alt="">
                        </div>
                        <div class="about__text">Розробка</div>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="statistics">
            <div class="container">
                <div class="stat">
                    <div class="stat__item">
                        <div class="stat__count">13</div>
                        <div class="stat__text">Успішних проектів</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">39</div>
                        <div class="stat__text">Задоволених клієнтів</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">100</div>
                        <div class="stat__text">Свіжих ідей</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">99</div>
                        <div class="stat__text">Чашок кави</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">3</div>
                        <div class="stat__text">Учасника</div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--------------------------------AMAZING SERVICES-------------------------------->
            <section class="section" id="services">
                <div class="container">
                    <div class="section__header">
                        <h3 class="section__suptitle">Вчасність і відповідність</h3>
                        <h2 class="section__title">Професійних підхід</h2>
                    </div>
    
                    <div class="services">
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/ALARM.jpg" alt="">
                            <div class="services__title">Чіткі терміни</div>
                            <div class="services__text">
                                Здаємо виконані для клієнтів проекти без запізнень і ускладнень.
                            </div>
                        </div>
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/LINE_GRAPH.jpg" alt="">
                            <div class="services__title">Підтримка</div>
                            <div class="services__text">
                                Підтримування вже зданих проектів згідно по затверджених із клієнтами строках.
                            </div>                    
                        </div>
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/COMPUTER _ OK.jpg" alt="">
                            <div class="services__title">Якість</div>
                            <div class="services__text">
                                Відповідальний підхід до виконання завдань, пошук надійних та перевірених рішень.
                            </div>                    
                        </div>
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/BOOK_2.jpg" alt="">
                            <div class="services__title">Seo</div>
                            <div class="services__text">
                               Пошукова оптимізація сайту для відповідності вимогам алгоритму пошукових систем.
                            </div>                    
                        </div>
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/HOME.jpg" alt="">
                            <div class="services__title">HTML/CSS/JS</div>
                            <div class="services__text">
                               Використання сучасного стеку технологій, робота із препроцесорами та фреймворками.
                            </div>                    
                        </div>
                        <div class="services__item">
                            <img class="services__icon" src="IMG/Icons/IMAGE.jpg" alt="">
                            <div class="services__title">Відповідність</div>
                            <div class="services__text">
                                Максимально точна і чітка реалізація технічного завдання від клієнтів з урахуванням усіх тонкощів.
                            </div>                   
                        </div>
                    </div>
                   
                </div>
            </section>
    
        <!--------------------------------WHAT WE DO-------------------------------->
            <section class="section">
                <div class="container">
                    <div class="section__header">
                        <h3 class="section__suptitle">Детальніше про</h3>
                        <h2 class="section__title">Напрямки роботи</h2>
                        <div class="section__text">
                            <p>
                                Якість та ретельність виконання на всіх етапах розробки у різних напрямках 
                                із використанням широкого стеку технологій, відповідно до останніх вимог сучасності.
                            </p>
                        </div>
                    </div>
    
                    <div class="wedo">
                        <div class="wedo__item wedo--item--img">
                            <img class="wedo__img" src="IMG/WeDo/img.png" alt="">
                        </div>
                        <div class="wedo__item wedo--item--accordion">
                            <div class="accordion">
                                <div class="accordion__item active" onclick="this.className = (this.className == 'accordion__item' ? 'accordion__item active' : 'accordion__item')">
                                    <div class="accordion__header">
                                        <img class="accordion__icon" src="IMG/WeDo/PICTURE.png" alt="">
                                        <div class="accordion__title">Фотографування</div>
                                    </div>
                                    <div class="accordion__content">
                                        <p>
                                            Виконання фото відповідно до бажання клієнтів у різноманітних жанрах, зокрема: абстракна, потретна,
                                            архітектурна, комерційна, концептуальна, чорно-біла, чи редакційна фотографія, фотографія подій, художня, 
                                            плівкова та стокова фотографія. Робота із сучасними засобами обробки фото, а саме Adobe Photoshop, Adobe Lightroom.
                                        </p>
                                    </div>
                                </div>
    
                                <div class="accordion__item" onclick="this.className = (this.className == 'accordion__item' ? 'accordion__item active' : 'accordion__item')">
                                    <div class="accordion__header">
                                        <img class="accordion__icon" src="IMG/WeDo/EQUALIZER.png" alt="">
                                        <div class="accordion__title">Креативність</div>
                                    </div>
                                    <div class="accordion__content">
                                        <p>
                                            Творчий підхід до виконання завдань, та постійний пошук нешаблонних, але водночас надійних рішень.
                                            Гнучкість новизна та корисність ідей та їх подальша реалізація. Робота із такими програмами як 
                                            Adobe Illustrator, Adobe XD, Figma.
                                        </p>
                                    </div>
                                </div>
    
                                <div class="accordion__item" onclick="this.className = (this.className == 'accordion__item' ? 'accordion__item active' : 'accordion__item')">
                                    <div class="accordion__header">
                                        <img class="accordion__icon" src="IMG/WeDo/BULLSEYE.png" alt="">
                                        <div class="accordion__title">Веб-дизайн</div>
                                    </div>
                                    <div class="accordion__content">
                                        <p>
                                            Розробка дизайну сайтів та веб-застосунків, Email-розсилок, створення макетів сайтів та окремих їх сторінок;
                                            підготовка з нуля іконок, логотипів, ілюстрацій, банерів  згідно із врахуванням усіх вимог сучасності.
                                            Знання і застосування на практиці типографіки, теорії кольору, розуміння принципів роботи веб-елементів, знання основних інструментів дизайну та вміння їх використовувати,
                                            розуміння принципів адаптивного дизайну.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        <!--------------------------------REVIEWS-------------------------------->
            <div class="section section--gray">
                <div class="container">
                    <div class="reviews">
    
                        <div data-slider>
                            <div>
                                <div class="reviews__item" >
                                    <div class="reviews_photo_wrapper">
                                        <img class="reviews__photo" src="IMG/Reviews/Steve_Jobs.png" alt="">
                                    </div>
                                    <div class="reviews__content">
                                        <div class="reviews__text">
                                            "Дизайн – це не те, як предмет виглядає, а те, як він працює."
                                        </div>
                                        <div class="reviews__author">Стів Джобс</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="reviews__item" >
                                    <div class="reviews__photo__wrapper">
                                        <img class="reviews__photo" src="IMG/Reviews/Antoine_de_Saint_Exupery.jpg" alt="">
                                    </div>
                                    <div class="reviews__content">
                                        <div class="reviews__text">
                                           "Дизайнер знає, що він досяг досконалості не тоді, коли нема чого додати, а коли нема чого прибирати."
                                        </div>
                                        <div class="reviews__author">Антуан де Сент-Екзюпері</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="reviews__item" >
                                    <div class="reviews__photo__wrapper"></div>
                                        <img class="reviews__photo" src="IMG/Reviews/Thomas_John_Watson_Sr.webp" alt="">
                                    <div class="reviews__content">
                                        <div class="reviews__text">
                                           "Хороший дизайн не продасть продукту низької якості, але він дозволить відмінному продукту повністю розкрити свій потенціал."
                                        </div>
                                        <div class="reviews__author">Томас Джон Уотсон старший</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <!--------------------------------MEET OUR TEEM-------------------------------->
            <section class="section">
                <div class="container">
                    <div class="section__header">
                        <h3 class="section__suptitle">Хто ми?</h3>
                        <h2 class="section__title">Команда</h2>
    
                        <div class="section__text">
                            <p>
                                Наша команда складається з молодих, мотивованих спеціалістів,
                                які готові з відданістю та ентузіазмом працювати над кожним 
                                проектом, аби в результаті створити продукт високої якості.
                                Ви цінуємо командну роботу, відкритість і чесність у спілкуванні, 
                                а також прагнемо постійного розвитку та поліпшення нашої роботи.
                            </p>
                        </div>
                    </div>
    
                    <div class="about">
                        <div class="about__item">
                            <div class="about__inner">
                                <div class="about__image">
                                    <img src="IMG/Meet-Our-Team/Yuriy.jpg" alt="">
                                </div>
                                <div class="about__text about__link">
                                    <div class="about__link__wrapper">
                                        <!-- <a target="_blank" href="#"><img src="IMG\Meet-Our-Team\Logos\facebook.png" alt=""></a>
                                        <a target="_blank" href="#"><img src="IMG\Meet-Our-Team\Logos\twitter.png" alt=""></a> -->
                                        <a target="_blank" href="https://www.instagram.com/dmitriv.molfar/"><img src="IMG\Meet-Our-Team\Logos\instagram.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about__info">
                                <div class="about__name">Юрій Дмитрів</div>
                                <div class="about__profession">Веб-дизайнер. QA/QC Тестувальник.</div>
                            </div>
                        </div>
    
                        <div class="about__item">
                           <div class="about__inner">
                            <div class="about__image">
                                <img src="IMG\Meet-Our-Team\Fake_Arsen.png" alt="">
                            </div>
                            <div class="about__text about__link">
                                <div class="about__link__wrapper">
                                    <!-- <a target="_blank" href="#"><img src="IMG\Meet-Our-Team\Logos\facebook.png" alt=""></a>
                                    <a target="_blank" href="#"><img src="IMG\Meet-Our-Team\Logos\twitter.png" alt=""></a> -->
                                    <a target="_blank" href="https://www.instagram.com/a_yaremyn/"><img src="IMG\Meet-Our-Team\Logos\instagram.png" alt=""></a>
                                </div>
                            </div>
                           </div>
                           <div class="about__info">
                                <div class="about__name">Арсен Яремин</div>
                                <div class="about__profession">Технічний керівник. CEO. Backend-розробник.</div>
                            </div>
                        </div>
    
                        <div class="about__item">
                            <div class="about__inner">
                                <div class="about__image">
                                    <img src="IMG/Meet-Our-Team/Serhii.jpg" alt="">
                                </div>
                                <div class="about__text about__link">
                                    <div class="about__link__wrapper">
                                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100045851529622"><img src="IMG\Meet-Our-Team\Logos\facebook.png" alt=""></a>
                                        <a target="_blank" href="https://twitter.com/marchuk_serhii"><img src="IMG\Meet-Our-Team\Logos\twitter.png" alt=""></a>
                                        <a target="_blank" href="https://www.instagram.com/a.k.a.gavroche/"><img src="IMG\Meet-Our-Team\Logos\instagram.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about__info">
                                <div class="about__name">Сергій Марчук</div>
                                <div class="about__profession">Фотограф. Frontend-розробник.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
              <!--------------------------------SOME OF OUR WORK-------------------------------->
        <section class="section" id="works">
          <div class="container">
              <div class="section__header">
                  <h3 class="section__suptitle">Зразки</h3>
                  <h2 class="section__title">Деякі наші роботи</h2>
                
                  <div class="section__text">
                      <p>
                        Окремі фото із завершених для клієнтів проектів, що виконані у різноманітних жанрах фотографії.
                      </p>
                  </div>
              </div>
          </div>
          <div class="works">
              <div class="works__col">
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\1.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Пейзажне фото</div>
                      </div>
                  </div>
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\2.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Концептуальне фото</div>
                      </div>
                  </div>
              </div>
              <div class="works__col">
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\3.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Абстрактне фото</div>
                      </div>
                  </div>
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\4.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Предметне фото</div>
                      </div>
                  </div>
              </div>
              <div class="works__col">
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\5.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Художнє фото</div>
                      </div>
                  </div>
              </div>
              <div class="works__col">
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\6.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Потретне фото</div>
                      </div>
                  </div>
                  <div class="works__item">
                      <img class="works__image" src="IMG\Works\7.jpg" alt="">
                      <div class="works__info">
                          <img src="IMG\Works\PICTURE.png" alt="">
                          <div class="works__title">Архітектурне фото</div>
                      </div>
                  </div>
              </div>
          </div>
          </section>
        
          <div class="section section-review">
              <div class="container">
                  <div class="reviews">
                    
                      <div data-slider>
                          <div>
                              <div class="reviews__item">
                                    <div class="reviews__photo__wrapper">
                                        <img class="reviews__photo circle-photo" src="IMG/Reviews/Henri_Cartier-Bresson.jpg" alt="">
                                    </div>
                                    <div class="reviews__content">
                                        <div class="reviews__text">
                                            Роблячи знімок, ти начебто пишеш картину, але за одну секунду.
                                        </div>
                                    <div class="reviews__author">Анрі Картьє-Брессон</div>
                                    </div>
                              </div>
                          </div>
                        
                          <div>
                              <div class="reviews__item">
                                 <div class="reviews__photo__wrapper">
                                    <img class="reviews__photo circle-photo" src="IMG/Reviews/Ansel_Adams.jpg" alt="">
                                 </div>
                                  <div class="reviews__content">
                                      <div class="reviews__text">
                                            Немає правил хорошої фотографії, є просто самі хороші фотографії
                                      </div>
                                      <div class="reviews__author">Ансель Адамс</div>
                                  </div>
                              </div>
                          </div>

                          <div>
                            <div class="reviews__item">
                                <div class="reviews__photo__wrapper">
                                    <img class="reviews__photo circle-photo" src="IMG/Reviews/Edward_Wenston.jpg" alt="">
                                </div>
                                <div class="reviews__content">
                                    <div class="reviews__text">
                                        Фотограф ізолює та зберігає момент часу: важливий чи незначний, залежить від розуміння теми фотографом та його майстерності.
                                    </div>
                                    <div class="reviews__author">Едвард Уестон</div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        
        <!-- ------------------------------HAPPY CLIENTS-------------------------------->
          <section class="section Happy-Clients">
              <div class="container">
                  <div class="section__header">
                      <h3 class="section__suptitle">Відгуки</h3>
                      <h2 class="section__title">Щасливі клієнти</h2>
                  </div>
                
                  <div class="clients">
                      <div class="clients__item">
                          <img class="clients__photo" src="IMG/What-People-Say/Clients/Pavlo_Leskovich.jpg" alt="">
                          <div class="clients__content">
                              <div class="clients__name">Павло Лескович</div>
                              <div class="clients__profession">Python-розробник</div>
                              <div class="clients__text">
                                Як щасливий клієнт DYMAR, хочу подякувати цій молодій команді за їхню якісну та вчасно виконану роботу. 
                                Особлива вдячність за дивовижну підтримку проекту, що відповідає всім моїм потребам!
                              </div>
                          </div>
                      </div>
                      <div class="clients__item">
                          <img class="clients__photo" src="IMG/What-People-Say/Clients/Lyudmila.jpg" alt="">
                          <div class="clients__content">
                              <div class="clients__name">Людмила Сологубовська</div>
                              <div class="clients__profession">Digital-художник</div>
                              <div class="clients__text">
                                Відповідальне виконання та врахування всіх нюансів під час роботи над проектом.  Рекомендую DYMAR. З ними чудово працювати. 
                                Трафік мого веб-сайту збільшився завдяки їхній програмі SEO.
                              </div>
                          </div>
                      </div>
                      <div class="clients__item">
                          <img class="clients__photo" src="IMG/What-People-Say/Clients/UlyanaShlapak.jpg" alt="">
                          <div class="clients__content">
                              <div class="clients__name">Уляна Шлапак</div>
                              <div class="clients__profession">Барбер</div>
                              <div class="clients__text">
                                    Перший досвід співпраці з DYMAR і він виправдав себе. Свіжі ідеї та їх чудова реалізація.  
                                    Команда віддана своїй справі, працює якісно та ефективно! 
                              </div>
                          </div>
                      </div>
                      <div class="clients__item">
                          <img class="clients__photo" src="IMG/What-People-Say/Clients/Roza_Folts.jpg" alt="">
                          <div class="clients__content">
                              <div class="clients__name">Роза Фольц</div>
                              <div class="clients__profession">Маркетолог</div>
                              <div class="clients__text">
                                Команда DYMAR значно перевершила мої очікування в усіх відношеннях. 
                                Послідовний та творчий підхід до роботи на кожному етапі розробки проекту!
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
    
            <!--------------------------------BLOG-------------------------------->
            <!-- <section class="section" id="blog">
                <div class="container">
                    <div class="section__header">
                        <h3 class="section__suptitle">Our stories</h3>
                        <h2 class="section__title">Latest Blog</h2>
                    </div>
    
                    <div class="blog">
                        <div class="blog__item">
                           <div class="blog__header">
                                <a target="_blank" href="#">
                                    <img class="blog__photo" src="IMG\Blog\1.jpg" alt="">
                                </a>
                                <div class="blog__date">
                                    <div class="date__number">15</div> 
                                    Jan
                                </div>
                           </div>
                           <div class="blog__content">
                                <div class="blog__title">
                                    <a target="_blank" href="#">Lorem ipsum dolor sit amet</a>
                                </div>
                                <div class="blog__text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Reprehenderit laudantium numquam iste excepturi, tenetur vero.
                                </div>
                           </div>
                           <div class="blog__footer">
                            <img src="IMG\Blog\VIEW.png" alt="">
                            <span>542</span>
                            <img src="IMG\Blog\SPEECH BUBBLE 2.png" alt="">
                            <span>17</span>
                           </div>
                        </div>
    
                        <div class="blog__item">
                            <div class="blog__header">
                                 <a target="_blank" href="#">
                                     <img class="blog__photo" src="IMG\Blog\2.jpg" alt="">
                                 </a>
                                 <div class="blog__date">
                                     <div class="date__number">14</div> 
                                     Jan
                                 </div>
                            </div>
                            <div class="blog__content">
                                 <div class="blog__title">
                                     <a target="_blank" href="#">Lorem ipsum dolor sit amet</a>
                                 </div>
                                 <div class="blog__text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Reprehenderit laudantium numquam iste excepturi, tenetur vero.
                                 </div>
                            </div>
                            <div class="blog__footer">
                             <img src="IMG\Blog\VIEW.png" alt="">
                             <span>992</span>
                             <img src="IMG\Blog\SPEECH BUBBLE 2.png" alt="">
                             <span>42</span>
                            </div>
                         </div>
    
                         <div class="blog__item">
                            <div class="blog__header">
                                 <a target="_blank" href="#">
                                     <img class="blog__photo" src="IMG\Blog\3.jpg" alt="">
                                 </a>
                                 <div class="blog__date">
                                     <div class="date__number">12</div> 
                                     Jan
                                 </div>
                            </div>
                            <div class="blog__content">
                                 <div class="blog__title">
                                     <a target="_blank" href="#">Lorem ipsum dolor sit amet</a>
                                 </div>
                                 <div class="blog__text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Reprehenderit laudantium numquam iste excepturi, tenetur vero.
                                 </div>
                            </div>
                            <div class="blog__footer">
                             <img src="IMG\Blog\VIEW.png" alt="">
                             <span>1560</span>
                             <img src="IMG\Blog\SPEECH BUBBLE 2.png" alt="">
                             <span>98</span>
                            </div>
                         </div>
                    </div>
                </div>
            </section> -->
    
            <!--------------------------------MAP-------------------------------->
            <section class="section section--map">
                <div class="container">
                   <a target="_blank" class="map" href="https://www.google.com/maps/@48.382803,31.17461,6z?hl=uk">
                    <img class="map__img" src="IMG\Blog\PIN 2.png" alt="">
                    <h2 class="map__text"><span>Карта</span></h2>
                   </a>
                </div>
            </section>
    
            <!--------------------------------FOOTER-------------------------------->
            <footer class="footer" id="footer">
                <div class="container">
                    <div class="footer__inner">
                        <div class="footer__col footer__col--first">
                            <div class="footer__logo">DYMAR</div>
                            <div class="footer__text">
                                Україна, Івано-Франківська область
                            </div>
    
                            <!-- <div class="footer__social">
                                <div class="footer__social-header">
                                </div>
                                <div class="footer__social-content">
                                    <span>Follow us:</span>
                                    <span class="links">
                                        <a target="_blank" href="#">
                                            <img src="IMG\Footer\Social-icons\facebook.png" alt="">
                                        </a>
        
                                        <a target="_blank" href="#">
                                            <img src="IMG\Footer\Social-icons\twitter.png" alt="">
                                        </a>
        
                                        <a target="_blank" href="#">
                                            <img src="IMG\Footer\Social-icons\instagram.png" alt="">
                                        </a>
        
                                        <a target="_blank" href="#">
                                            <img src="IMG\Footer\Social-icons\pinterest.png" alt="">
                                        </a>
        
                                        <a target="_blank" href="#">
                                            <img src="IMG\Footer\Social-icons\youtube.png" alt="">
                                        </a>
        
                                    </span>
                                </div>
                            </div> -->
    
                            <form class="subscribe" action="Vendor\mailing_create.php" method="post">
                                <input required class="subscribe__input" type="email" name="client_email" placeholder="Поштова скринька...">
                                <button class="subscribe__btn" type="submit">Підписка</button>
                            </form>
                        </div>
    
                        <!-- <div class="footer__col footer__col--second">
                            <div class="footer__title">Blogs</div>
                            <div class="blogs">
                                <div class="blogs__item">
                                    <img class="blogs__img" src="IMG\Footer\Blogs\1.jpg" alt="">
                                    <div class="blogs__content">
                                        <a class="blogs__title" target="_blank" href="#">
                                            Lorem ipsum dolor sit amet,  consectetur adipiscing
                                        </a>
                                        <div class="blogs__date">Jan 9, 2016</div>
                                   </div>
                                </div>
    
                                <div class="blogs__item">
                                    <img class="blogs__img" src="IMG\Footer\Blogs\2.jpg" alt="">
                                    <div class="blogs__content">
                                        <a class="blogs__title" target="_blank" href="#">
                                            Consectetur adipiscing elit,  sed do eiusmod tempor                                    </a>
                                        <div class="blogs__date">Jan 9, 2016</div>
                                   </div>
                                </div>
    
                                <div class="blogs__item">
                                    <img class="blogs__img" src="IMG\Footer\Blogs\3.jpg" alt="">
                                    <div class="blogs__content">
                                        <a class="blogs__title" target="_blank" href="#">
                                            Sed do eiusmod tempor  incididunt ut labore                                    </a>
                                        <div class="blogs__date">Jan 9, 2016</div>
                                   </div>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- <div class="footer__col footer__col--third">
                            <div class="footer__title">Instagram</div>
                            <div class="instagram">
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\1.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\2.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\3.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\4.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\5.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\6.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\7.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\8.jpg" alt="">
                                </a>
    
                                <a class="instagram__item" target="_blank"  href="#">
                                    <img src="IMG\Footer\Instagram\9.jpg" alt="">
                                </a>
                            </div>
                            <div class="instagram__text">View more photos</div>
                        </div>
                    </div> -->
    
                    <div class="copyright">
                        © 2023 DYMAR <span>cooperation</span>
                    </div>
                </div>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
            </script>  

            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
            </script>

            <script src="JS\app.js">
            </script>
</body>
</html>