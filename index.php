<?php
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
    require 'php/mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    //$mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->charset = 'utf-8';
    //$mail->SMTPDebug = 2;
    $mail->PORT=587;
    $mail->SMTPAuth=true;
    $mail->SetLanguage("pl", "php/mailer/language/"); 
    $mail->SMTPSecure='tls';
    $mail->Username='_moj Mejl';
    $mail->Password='nie tym razem';
    
    $mail->setFrom($_POST['email'],$_POST['nazwa']);
    $mail->addAddress('moj_MAIL');
    $mail->addReplyTo($_POST['email'],$_POST['nazwa']);

    $mail->isHTML(true);
    $mail->Subject='Wiadmomosc ze strony - Portfolio: ';
    $mail->Body='<h1 align=center>Nazwa: '.$_POST['nazwa'].'<br>Email: '.$_POST['email'].'<br>Treść: '.$_POST['content'].'</h1>';
    if(!$mail->send()){
        echo "<script type='text/javascript'>alert('coś poszło nie tak, wysyłanie nie powiodło się');</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('Wiadomość została wysłana. Dziękuję.');</script>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Londrina+Outline" rel="stylesheet">
    <link rel="stylesheet" href="loader/loader.css">
    <link rel="stylesheet" href="style.css">

    <title>Filip W - portfolio</title>
</head>
<body>
    <div class="loader">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                
                <!-- Safari and others -->
                <div class="infinity">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span></span>
                    </div>
                </div>
                
                <!-- Stuff -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: none;">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feBlend in="SourceGraphic" in2="goo" />
                        </filter>
                    </defs>
                </svg>
    </div>
<!-- Koniec loadera -->
<div class="ballcontainer">
    <div class="ball"></div>
</div>
    <div class="bcg">

            <div class="notes">Filip Wojaszek -RANDOM COLOR PORTFOLIO</div>
        <div class="menuWraper">
            <nav class="menu">

                    <div class="menuColor">
                    </div>
                <div class="items">o mnie</div>
                <div class="items">kontakt</div>
                <div class="items">portfolio</div>

            </nav>
    </div>
    </div>
    <main class="wraper">
        <section class="content cont1" id="content1">
            <div class="inner">
                    <div class="close">
                
                        </div>
                <!--<div class="close">*</div>-->
                <h1>SŁOWO O SOBIE</h1><br><br>Nazywam się Filip Wojtaszek, aspiruję do miana web-developera.<br><br>

                    Technologie, których używam:<br>
                    <br><div class="points">html5</div>
                    <div class="points">css3</div>
                    <div class="points">js ES6</div><br><br>
                    
                    niektóre narzędzia:<br><br>
                    <div class="points">VSC</div>
                    <div class="points">Figma</div>
                    <div class="points">CLi (Bash)</div>
                    <div class="points">Git</div>
                    <div class="points">Photoshop</div>
                    <br><br>
                    
                    a także:<br><br>
                    <div class="points">Sass</div>
                    <div class="points">BootStrap</div>
                    <div class="points">JQuery</div>
                    <br><br>
                    ...swoje pierwsze strony internetowe tworzyłem już w szkole podstawowej, a podczas studiów pierwszy raz zarobkowo. Po studiach ścieżka mojej kariery potoczyła się w stronę grafiki komputerowej, a strony internetowe tworzyłem dorywczo. Po 10 latach pracy jako grafik, zdecydowałem zająć się na poważnie front-end'em. Wiele się w branży zmieniło, dlatego ostatnie parę miesięcy spędziłem na kursach i odświeżaniu swojej wiedzy o CSS3 i standard ES6. Obecnie uczę się ReactJS.
                    <br><br><a href="https://szparowanie.nazwa.pl/strony/resume" target="_black" class="btn big">zobacz CV w wersji HTML</a><br><br><br>
                    Prywatnie jestem miłośnikiem przyrody i entuzjastą wypoczynku na wolnym powietrzu. Do niedawna byłem <a href="https://szparowanie.nazwa.pl/strony/wyprawa" target="_black" class="btn  ">podróżnikiem na pełen etat,</a> dzisiaj najbardziej zajmuje mnie zabawa z córką, pszczelarstwo i uprawianie ogródka.
                    </div>
                </div>
        </section>
        <section class="content cont2" id="content2">
            <div class="inner middle">
                    <div class="close">
                
                        </div>
                    <h1>Kontakt</h1><br><br>
                    <h2 class=" ">email: fistah@gmail.com<br><br>
                        tel: +48 796-787-979<br><br><br>
                    </h2>
                    <form action="" method="post">
                    <label for="form">napisz do mnie</label>
                    <input name="nazwa" type="text" placeholder=" imię">
                    <input name="email" type="text" placeholder=" email">
                    <textarea name="content" contenteditable="true" rows="5" cols="10" placeholder=" treść"></textarea>
                    <input name="submit" type="submit">
                </form>
            </div>
        </section>
        <section class="content cont3" id="content3">
            <div class="inner">
                <div class="close">
                
                </div>
                <ul>
                <li class="portfolio_item  ">
                    <div class="img" style="background-image: url(img/cv.jpg);"></div>
                    <div class="opis">
                        <div class="gorny">
                                <h2>Moje CV - HTML</h2><h4><p>CV w postaci responsywnej<br>strony internetowej</p></h4>
                        </div>
                        
                        <div class="dolny">
                            <a href="https://szparowanie.nazwa.pl/strony/resume" target="_blank" class="btn">zobacz </a>
                            <div class="data">2019<p>luty</p></div>
                        </div>
                    </div>
                </li>


                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/maja.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Strona piosenkarki</h2><h4><p>Responsywna strona internetowa, pełniąca funkcję portfolio wokalistki</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/maja" target="_blank" class="btn">zobacz </a>
                                    <a href="https://github.com/MeczycielBiedronek/maja_w" target="_blank" class="btn">GitHub</a>
                                    <div class="data">2019<p>luty</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/sho.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Oldschool Game</h2><h4><p>Prosta gra zręcznościowa. <br>Projekt edukacyjny</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/shooter" target="_blank" class="btn">zobacz </a>
                                        <a href="https://github.com/MeczycielBiedronek/OldSchoolShooter" target="_blank" class="btn">GitHub</a>
                                    <div class="data">2019<p>luty</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/nasa.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Nasa API</h2><h4><p>Aplikacja wyświetlająca zdjęcia z łazika marsjańskiego Curiocity, wykorzystując API ze strony nasa. Projekt edukacyjny </p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/mars" target="_blank" class="btn">zobacz </a>
                                        <a href="https://github.com/MeczycielBiedronek/MarsPictures.github.io" target="_blank" class="btn">GitHub</a>
                                    <div class="data">2019<p>styczeń</p></div>
                                </div>
                            </div>
                    </li> 
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/cash.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Cashflow 101 - flow counting app</h2><h4><p>Kalkulator przepływu gotówki do gry planszowej Cashflow 101</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/cashflow" target="_blank" class="btn">zobacz </a>
                                    <a href="https://github.com/MeczycielBiedronek/Cashflow" target="_blank" class="btn">GitHub</a>
                                    <div class="data">2019<p>styczeń</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/bla.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Konsultantka ślubna</h2><h4><p>Strona internetowa konsultantki ślubnej.</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/konsultantka/" target="_blank" class="btn">zobacz </a>
                                    <div class="data">2018<p>grudzień</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/port.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Koncept przewodnika</h2><h4><p>Projekt przewodnika po portugalii, <br>wykonany dla celów edukacyjnych</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/portugalia" target="_blank" class="btn">zobacz </a>
                                    <a href="https://github.com/MeczycielBiedronek/Portugal_guide" target="_blank" class="btn">GitHub</a>
                                    <div class="data">2018<p>grudzień</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/szp.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Szparowanie.pl</h2><h4><p>Strona interentowa firmy świadczącej usługi online, pełniła funkcję informacyjną, umożliwiała kontakt, wycenę zlecenia i przesyłanie plików na serwer. Służyła 5 lat</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/stara_strona/" target="_blank" class="btn">zobacz </a>
                                    <div class="data">2011-2016<p>lata</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/more.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Farby Morena</h2><h4><p>strona internetowa sklepu i mieszalni farb - Morena<br>Projekt komercyjny</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/dawid/" target="_blank" class="btn">zobacz </a>
                                    
                                    <div class="data">2013<p>rok</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/kus.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Adwokat J. Sikora</h2><h4><p>strona internetowa kancelarii adwokackiej<br>Projekt komercyjny <br>Niestety pozostał jedynie zrzut ekranu</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="img/kubaduzy.jpg" target="_blank" class="btn">podgląd</a>
                                    
                                    <div class="data">2013<p>rok</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/mv.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Moinhos Velhos</h2><h4><p>strona internetowa portugalskiego centrum medycyny holistycznej<br>Projekt komercyjny</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="img/mvbig.jpg" target="_blank" class="btn">podgląd</a>
                                    
                                    <div class="data">2013<p>rok</p></div>
                                </div>
                            </div>
                    </li>
                    <li class="portfolio_item  ">
                            <div class="img" style="background-image: url(img/fizj.jpg);"></div>
                            <div class="opis">
                                <div class="gorny">
                                        <h2>Fizjosport</h2><h4><p>strona internetowa rehabilitantki<br>Projekt komercyjny</p></h4>
                                </div>
                                
                                <div class="dolny">
                                    <a href="https://szparowanie.nazwa.pl/strony/fizjosport/" target="_blank" class="btn">zobacz</a>
                                    
                                    <div class="data">2012<p>rok</p></div>
                                </div>
                            </div>
                    </li>

                </ul>
            </div>
        </section>
    </main>
    <script src="loader/loader.js"></script>
    <script src="effects.js"></script>
</body>
</html>
