<?php
include "includes/db.php";
if(isset($_POST['sub_btn'])){
    $phone = $conn->real_escape_string($_POST['phone']);
    $error = 0;
    if(strlen($phone) > 2){
        $error = 1;
    }
    if($error == 1){
        $sql = "INSERT INTO `phones` ('number') VALUES ('$phone')";
        $conn->query($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cryptolution - The Wallet of The Future with Anonymous Debit Card</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="pop-up">
    <div class="pop-up__box">
        <img class="pop-close" src="img/close.png" alt="close">
        <img src="img/success.png" alt="success">
        <div class="title">Let the banking revolution begin!</div>
        <div class="text">Awesome! You’re going to be one of the first people to get access to Cryptolucion.</div>
    </div>
</div>

<header class="header wow fadeInDown">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-5 col-xl-3">
                <div class="header__logo">
                    <img src="img/logo.svg" alt="logo">
                </div>
            </div>
            <div class="col-6 col-sm-2 col-md-4 col-xl-7">
                <nav>
                    <ul class="header__menu">
                        <li class="company">
                            <img src="img/burger.svg" alt="burger">
                            <ul class="showMenu">
                                <li id="anon">Anonymity</li>
                                <li id="debit">Debit Card</li>
                                <li id="price">Pricing</li>
                                <li id="app">App</li>
                                <li id="faq">FAQ</li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="d-none d-sm-block col-sm-4 col-md-3 col-xl-2">
                <div class="header__button">
                    <a href="">Join The Waitlist</a>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="anonymity">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 wow fadeInLeft">
                    <div class="anonymity__content">
                        <div class="anonymity__content--title"><span> The First Anonymous</span> <br> Crypto-Bank with the <br> Cryptolution Debit Card</div>
                        <div class="anonymity__content--after-title">We Revolutionize the Banking Sphere</div>
                        <form action="" class="anonymity__content--form">
                            <input class="phone-input" type="text" placeholder="Your Phone Number" required>
                            <button id="but_form" type="button">Join The Waitlist</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInRight">
                    <div class="anonymity__card">
                        <img src="img/card.png" alt="card" width="355" height="288">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="debit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="debit__content">
                        <div class="debit__column">
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">All Cryptocurrencies</div>
                                <div class="descr">Crypto Card lets you pay where, when and how you want, using any Currencies or Cryptocurrencies</div>
                            </div>
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">What is a Crypto Card?</div>
                                <div class="descr">You will be able to use any cryptocurrencies, starting from BTC, and ending with the smallest tokens.</div>
                            </div>
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">Complete anonymity</div>
                                <div class="descr">No longer need to pass any identification to get a card and account.</div>
                            </div>
                        </div>
                        <div class="debit__column">
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">The best exchange rates without any fees</div>
                                <div class="descr">We have already integrated the top 10 crypto exchanges, where you can exchange your currencies at the best price, without Commission.</div>
                            </div>
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">Easy Transfers</div>
                                <div class="descr">Transfer money to your friends, acquaintances, colleagues or Withdraw money to any Bank card.</div>
                            </div>
                            <div class="debit__column--item wow fadeInLeft">
                                <div class="title">Security and Safety</div>
                                <div class="descr">2 things are important for us - anonymity and safety of our users in any country. We will not release your data, ever.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="price__title wow fadeInDown">How much will it cost?</div>
                </div>
                <div class="col-12">
                    <div class="price__content">
                        <div class="price__content--item">
                            <div class="title wow fadeInLeft">Debit card: only $ 14.99!</div>
                            <div class="descr wow fadeInLeft">
                                You can order it in just 2 clicks by entering the delivery address and couriers will bring it to you in the shortest possible time. <br>
                                A detailed description of the tariffs for the use of a Bank card will be available after the launch
                            </div>
                        </div>
                        <div class="price__content--item sc">
                            <div class="title wow fadeInLeft">Maintenance cost</div>
                            <div class="descr wow fadeInLeft">
                                We will not charge you for the service.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5 wow fadeInLeft">
                    <div class="app__image">
                        <img src="img/mockup.png" alt="mockup phone">
                    </div>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight">
                    <div class="app__content">
                        <div class="title">Only Three Pages</div>
                        <div class="txt">We are currently making the most convenient transaction feed, cryptocurrency and fiat currency management, transfers, exchange, payment, support chat - all in one app.</div>
                        <div class="txt">This will be the simplest and easiest application, because it is important for us to make a truly user-friendly product for our community</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5 wow fadeInLeft">
                    <div class="plan__image">
                        <img src="img/plan.png" alt="mockup phone">
                    </div>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight">
                    <div class="plan__content">
                        <div class="title">We plan to launch in the end of 2019</div>
                        <div class="txt">We are already at the final stage of development, and will soon please you with a revolutionary product</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="faq__content">
                        <div class="faq__content--item wow fadeInLeft">
                            <div class="title">FAQ</div>
                            <div class="descr show">
                                The security of your money in Cryptolucion is important. Therefore, we tell you how we provide it.
                                Cryptolucion card is an advanced and technological wallet.
                            </div>
                        </div>
                        <div class="faq__content--item wow fadeInLeft">
                            <div id="o1" class="title mt70">
                                <span class="q">What is Cryptolucion?</span>
                                <span class="open">
										<img src="img/arrow.svg" alt="arrow">
									</span>
                            </div>
                            <div id="q1" class="descr">
                                Cryptolucion is a one-stop solution for all your cryptography-related needs. It allows you to store, buy, exchange and transfer the most popular cryptocurrencies-bitcoins, ethers and litecoin, USDC-at the best market rates, as well as pay with a Bank card worldwide purchases with your crypto wallets.
                            </div>
                        </div>
                        <div class="faq__content--item wow fadeInLeft">
                            <div id="o2" class="title mt70">
                                <span class="q">Is it legal to have an Anonymous Debit card?</span>
                                <span class="open">
										<img src="img/arrow.svg" alt="arrow">
									</span>
                            </div>
                            <div id="q2" class="descr">
                                It's perfectly legal, we can issue a Bank card without a name. The only limit is $ 350 for a one-time transaction. This means that when you spend your $ 350 you will be able to refill the card in your wallet instantly or set up auto-refill.
                            </div>
                        </div>
                        <div class="faq__content--item wow fadeInLeft">
                            <div id="o3" class="title mt70">
                                <span class="q">What are the limits?</span>
                                <span class="open">
										<img src="img/arrow.svg" alt="arrow">
									</span>
                            </div>
                            <div id="q3" class="descr">
                                Cryptolution has no limits.
                            </div>
                        </div>
                        <div class="faq__content--item wow fadeInLeft">
                            <div id="o4" class="title mt70">
                                <span class="q">Why do I need a Cryptolucion card?</span>
                                <span class="open">
										<img src="img/arrow.svg" alt="arrow">
									</span>
                            </div>
                            <div id="q4" class="descr">
                                Cryptolucion Card is the easiest way to get a card through your phone. It is Anonymous and allows you to pay in any currency.
                                You'll be able to spend your cryptocurrencies directly while avoiding complicated exchanges: we do all the magic behind the scenes. Despite its simplicity in terms of user experience, we believe it is by far the most advanced payment solution on the market. You can store money in any cryptocurrency, and sellers can still accept payments in the currency they are used to.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>