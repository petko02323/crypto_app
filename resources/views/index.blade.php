<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

<!-- ======= Header ======= -->
@include('layouts.header')<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row justify-content-center gy-6">

                    <div class="col-lg-5 col-md-8" style="text-align: center">
                        <img src="assets/img/hero-carousel/hero-crypto-1.svg" alt="" class="img-fluid img">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>{{$spol->texty->slider_nadpis1}}</h2>
                        <p>{{$spol->texty->slider_podnadpis1}}</p>
                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <div class="container">
                <div class="row justify-content-center gy-6">

                    <div class="col-lg-5 col-md-8">
                        <img src="assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>{{$spol->texty->slider_nadpis2}}</h2>
                        <p>{{$spol->texty->slider_podnadpis2}}</p>
                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->


    </div>

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" style="text-align: center">
            <h3 class="counter-h3">Cena v USD</h3>
            <p class="counter-p">*Aktualizuje sa za <span id="counter" style="font-weight: bold">30</span> s</p>
            <div class="row">


                <div class=" col-auto "><img src="https://www.cryptocompare.com/media/37746251/btc.png"
                                             class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-BTC"></p>
                </div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37746238/eth.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-ETH"></p></div>
                <div class=" col-auto "><img src="https://www.cryptocompare.com/media/40485170/bnb.png"
                                             class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-BNB"></p></div>
                <div class=" col-auto "><img src="https://www.cryptocompare.com/media/38553096/xrp.png"
                                             class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-XRP"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37746339/doge.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-DOGE"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37746243/ltc.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-LTC"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37747734/sol.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-SOL"></p></div>

                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37746248/busd.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-BUSD"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/34835941/usdc.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-USDC"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37746338/usdt.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-USDT"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/43881360/apt.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-APT"></p></div>
                <div class="col-auto "><img src="https://www.cryptocompare.com/media/37747014/fil.png"
                                            class="currency-line-logo" alt="">
                    <p class="current-prices-p" id="currentPrice-FIL"></p></div>
            </div>


        </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row gy-4 d-flex">

                <li class="nav-item col-6 col-md-4 col-lg-2" name="BTC" onclick="loadInfo(this)">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/37746251/btc.png">
                        <h4>Bitcoin</h4>
                    </a>
                </li><!-- End Tab 1 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2" name="ETH" onclick="loadInfo(this)">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/37746238/eth.png">
                        <h4>Ethereum</h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2" name="BNB" onclick="loadInfo(this)">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/40485170/bnb.png">
                        <h4>Binance Coin</h4>
                    </a>
                </li><!-- End Tab 3 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2" name="XRP" onclick="loadInfo(this)">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/38553096/xrp.png">
                        <h4>XRP</h4>
                    </a>
                </li><!-- End Tab 4 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2" name="DOGE" onclick="loadInfo(this)">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/37746339/doge.png">
                        <h4>Dogecoin</h4>
                    </a>
                </li><!-- End Tab 5 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2" name="LTC" onclick="loadInfo(this)">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                        <img class="currency-logo" src="https://www.cryptocompare.com/media/37746243/ltc.png">
                        <h4>Litecoin</h4>
                    </a>
                </li><!-- End Tab 6 Nav -->

            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                            <h3>Bitcoin</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-BTC"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChart-BTC"></canvas>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-BTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-BTC"></span>
                                </li>

                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-BTC"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BTC" id="BTC-week" value="7" checked>
                                    <label class="form-check-label" for="BTC-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BTC" id="BTC-month" value="30">
                                    <label class="form-check-label" for="BTC-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BTC" id="BTC-year" value="365">
                                    <label class="form-check-label" for="BTC-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je to Bitcoin?</h3>
                            <p>Bitcoin (BTC) je prvá úspešná decentralizovaná kryptomena. Využíva technológiu
                                peer-to-peer na fungovanie bez potreby centrálnej autority za ňou. Bitcoinové transakcie
                                sú registrované na open-source softvéri.

                                Bitcoin využíva technológiu blockchain na zaistenie bezpečnosti transakcií a odolnosti
                                voči cenzúre. Blockchain je distribuovaná účtovná kniha alebo zdieľaná databáza, ku
                                ktorej má v prípade BTC ktokoľvek prístup na overenie transakcií.

                                Zatiaľ čo k týmto transakciám môže pristupovať ktokoľvek, Bitcoin funguje
                                prostredníctvom pseudonymných adries. To znamená, že hoci ktokoľvek môže vidieť, že
                                transakcia prebehla – čo znamená, že adresa A odoslala BTC na adresu B – často iba
                                odosielateľ a príjemca vedia, kto je za každou adresou.

                                Blockchainy sú v podstate vybudované prostredníctvom blokov údajov, ktoré sú navzájom
                                zreťazené – tvoria reťaz blokov – pričom každý nový blok nadväzuje na predchádzajúci.
                                Transakcie sú overované validátormi, ktoré sa v sieti Bitcoin nazývajú ťažiari. Tie
                                využívajú špecializovaný hardvér na „ťažbu“ blokov a ich pridávanie do blockchainu
                                riešením zložitých matematických problémov.

                                Baníci sú odmeňovaní prostredníctvom stanovenej odmeny BTC zahrnutej v každom bloku,
                                nazývanej odmena coinbase, a transakčnými poplatkami spojenými s transakciami zahrnutými
                                v blokoch, ktoré ťažia. Údaje uložené v blokoch sú šifrované pomocou bitcoinového
                                hashovacieho algoritmu SHA-256.

                                Ponuka bitcoinov je obmedzená na 21 miliónov mincí a každý blok sa pridáva do siete
                                každých 10 minút. Načasovanie každého bloku je udržiavané stabilné prostredníctvom
                                mechanizmu úpravy obtiažnosti, zatiaľ čo inflácia BTC je riadená kódom, pričom odmena v
                                každom bloku sa každých 210 000 alebo približne každé štyri roky zníži na polovicu.
                                Každý bitcoin je deliteľný na osem desatinných miest s najmenšou jednotka je známa ako
                                satoshi – jedno satoshi je 0,00000001 BTC. Kryptomena by mohla byť v budúcnosti
                                deliteľná na ešte viac desatinných miest.</p>
                            <h3>Kto vytvoril Bitcoin?</h3>
                            <p>Bitcoin vytvoril Satoshi Nakamoto, pseudonymná entita, ktorá stavala na predchádzajúcej
                                práci s cieľom načrtnúť technológiu stojacu za kryptomenou v bielej knihe z roku 2008 s
                                názvom: „Bitcoin: Peer-to-Peer Electronic Cash System“.

                                Je známe, že Nakamoto si zaregistroval doménu Bitcoin.org v auguste 2008, predtým, ako v
                                októbri toho roku oznámil whitepaper na konferenciu Cryptography Mailing List.

                                Prvý blok bitcoinu – blok genesis – bol vyťažený 3. januára 2009. Nakamoto k nemu pridal
                                text: „The Times 03/Jan/2009 Chancellor na pokraji druhej pomoci pre banky,“ ako odkaz
                                na finančnú krízu v roku 2008 a reakcie centrálnych bánk na to.

                                Prvá bitcoinová transakcia sa uskutočnila 12. januára, na ktorej sa podieľali Nakamoto a
                                Hal Finney, cypherpunk, ktorý spolupracoval s PGP Corporation na vývoji špičkového
                                šifrovacieho produktu.</p>
                            <h3>Ako sa používa bitcoin?</h3>
                            <p>Bitcoin bol pôvodne navrhnutý ako spôsob platby peer-to-peer. Ako rástol záujem okolo
                                neho a jeho hodnota stúpala, rástli aj jeho prípady použitia. Vďaka prístupu bitcoinu s
                                otvoreným zdrojom rástla aj konkurencia iných kryptomien.

                                Na používanie Bitcoinu je potrebná peňaženka. Bitcoinové peňaženky fungujú ako digitálne
                                „bankové účty“, ktoré môže ovládať iba subjekt, ktorý za nimi stojí. Pri vytvorení
                                peňaženky sa vygenerujú dva kľúče: verejný a súkromný kľúč.

                                Verejné kľúče sú adresy používané na odosielanie a prijímanie platieb. Sú podobné číslu
                                bankového účtu.
                                Súkromné kľúče sú podobné heslom chrániacim bankový účet a každý, kto ovláda súkromný
                                kľúč k peňaženke, ovláda peňaženku. Keďže v bitcoinovej sieti neexistuje centrálna
                                autorita, v prípade straty súkromného kľúča sa stratia aj mince v tejto peňaženke.
                                Bitcoin sa používa na množstvo účelov. Niektorí ľudia ho používajú na každodenné
                                transakcie, zatiaľ čo iní uprednostňujú používanie BTC ako uchovávateľa hodnoty, čo z
                                neho robí alternatívu k zlatu. Iní jednoducho investujú, obchodujú a špekulujú pomocou
                                kryptomeny.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1">
                            <h3>Ethereum</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-ETH"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center">
                            <canvas id="lineChart-ETH"></canvas>

                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-ETH"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-ETH"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-ETH"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="ETH" id="ETH-week" value="7" checked>
                                    <label class="form-check-label" for="ETH-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="ETH" id="ETH-month" value="30">
                                    <label class="form-check-label" for="ETH-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="ETH" id="ETH-year" value="365">
                                    <label class="form-check-label" for="ETH-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je Ethereum?</h3>
                            <p>Ethereum je decentralizovaná blockchain platforma s otvoreným zdrojom, ktorá umožňuje
                                vývojárom vytvárať a nasadzovať inteligentné zmluvy a decentralizované aplikácie
                                (dApps). Beží na globálnej sieti uzlov, vďaka čomu je vysoko bezpečný a odolný voči
                                cenzúre. Ethereum predstavilo koncept programovateľných peňazí, ktoré používateľom
                                umožňujú interakciu s blockchainom prostredníctvom samovykonateľných zmlúv, známych aj
                                ako inteligentné zmluvy. Natívna mena Etherea, Ether (ETH), poháňa tieto zmluvy a
                                uľahčuje transakcie v sieti.</p>
                            <h3>Čo je ETH a prečo má hodnotu?</h3>
                            <p>ETH alebo Ether je natívna kryptomena platformy Ethereum. Používa sa na zaplatenie
                                transakčných poplatkov a výpočtových služieb v sieti. ETH tiež slúži ako digitálny
                                uchovávateľ hodnoty vďaka jeho klesajúcej emisnej sadzbe, kolaterálu pre kryptopôžičky a
                                ako platobný systém v rôznych finančných aplikáciách postavených na Ethereu. Mnoho ľudí
                                tiež vníma ETH ako investíciu, podobne ako Bitcoin a iné kryptomeny.</p>
                            <h3>Na čo sa Ethereum používa?</h3>
                            <p>Ethereum sa primárne používa na vykonávanie inteligentných zmlúv, ktoré umožňujú rôzne
                                aplikácie, ako sú decentralizované financie (DeFi), stablecoiny, nezastupiteľné tokeny
                                (NFT) a decentralizované autonómne organizácie (DAO). Tieto aplikácie sú postavené na
                                platforme Ethereum a poskytujú širokú škálu finančných služieb, správu digitálnych aktív
                                a dokonca tokenizáciu aktív v reálnom svete, ako sú nehnuteľnosti a umenie. Platforma je
                                tiež domovom tisícov tokenov, z ktorých každý má svoj jedinečný prípad použitia a
                                hodnotu, a hostí internetové komunity riadené držiteľmi tokenov, čím sa ďalej rozširuje
                                potenciál decentralizovaných organizácií.</p>
                            <h3>Čo sú to tokeny Ethereum?</h3>
                            <p>Tokeny sú digitálne aktíva vytvorené a obchodované na platforme Ethereum. Predstavujú
                                širokú škálu prípadov použitia vrátane stablecoinov, ktoré odrážajú hodnotu tradičných
                                mien, tokenov správy reprezentujúcich hlasovaciu silu v decentralizovaných
                                organizáciách, zberateľských tokenov (NFT) pre digitálne umenie alebo jedinečné aktíva a
                                rôznych úžitkových tokenov so špecifickými funkciami v rámci ich príslušných
                                ekosystémov. Ethereum je domovom tisícov tokenov, pričom vývojári neustále budujú nové
                                tokeny, ktoré odomykajú nové možnosti a otvárajú nové trhy.</p>
                            <h3>Čo sú inteligentné zmluvy?</h3>
                            <p>Inteligentné zmluvy sú samospustiteľné počítačové programy, ktoré žijú na blockchaine
                                Ethereum. Sú spúšťané transakciami od používateľov alebo inými zmluvami a umožňujú
                                komplexné aplikácie a interakcie na platforme. Inteligentné zmluvy tvoria základ
                                decentralizovaných aplikácií (dApps) a sú nemenné, čo znamená, že ich po nasadení
                                nemožno zmeniť. Poskytujú transparentnosť, bezpečnosť a automatizáciu a používajú sa v
                                rôznych aplikáciách, ako sú úverové platformy, decentralizované burzy, poistenie,
                                crowdfunding a ďalšie.</p>
                            <h3>Kto to vytvoril?</h3>
                            <p>Ethereum navrhol Vitalik Buterin v roku 2013 a oficiálne ho spustil v roku 2015 po
                                úspešnej crowdfundingovej kampani. Odvtedy bol vyvinutý a udržiavaný komunitou Ethereum,
                                ktorá pozostáva z vývojárov, výskumníkov a nadšencov z celého sveta.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1">
                            <h3>Binance Coin</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-BNB"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center">
                            <canvas id="lineChart-BNB"></canvas>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-BNB"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-BNB"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-BNB"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BNB" id="BNB-week" value="7" checked>
                                    <label class="form-check-label" for="BNB-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BNB" id="BNB-month" value="30">
                                    <label class="form-check-label" for="BNB-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="BNB" id="BNB-year" value="365">
                                    <label class="form-check-label" for="BNB-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je BNB?</h3>
                            <p>Binance Coin (BNB) je kryptomena vydaná poprednou burzou Binance, ktorá slúži aj ako
                                natívny token BNB Chain, siete kompatibilnej s Ethereum Virtual Machine, ktorá podporuje
                                inteligentné zmluvy a decentralizované aplikácie.

                                Binance bola vytvorená v júli 2017, pričom BNB bola pôvodne vydaná prostredníctvom
                                počiatočnej ponuky mincí (ICO) na blockchaine Ethereum ako token ERC-20 pred spustením
                                reťazca BNB.

                                V čase ICO sa 100 000 000 tokenov BNB, čo zodpovedá 50 % celkovej ponuky kryptomeny,
                                predalo za cenu 1 ETH za 2 700 BNB alebo 1 BTC za 20 000 BNB. Zatiaľ čo celková ponuka
                                BNB je 200 000 000 mincí, Binance pravidelne spaľuje tokeny v snahe znížiť obežnú ponuku
                                BNB na 100 000 000.</p>
                            <h3>Kto vytvoril BNB?</h3>
                            <p>Ako už bolo spomenuté vyššie, Binance vytvorila token BNB a distribuovala časť svojej
                                ponuky prostredníctvom ICO už v roku 2017. Zakladajúci tím Binance a anjelskí investori
                                si ponechali zvyšné tokeny BNB, pričom niektorí tvrdili, že sa ich do dnešného dňa
                                nedotklo. Počiatočná dodávka BNB bola distribuovaná nasledovne podľa svojej bielej
                                knihy:</p>
                            <ul>
                                <li>Verejný predaj tokenov: 100 000 000 BNB (50 % z ponuky)</li>
                                <li>Zakladajúci tím: 80 000 000 BNB (40 % ponuky)</li>
                                <li>Anjelskí investori: 20 000 000 BNB (10 % z ponuky)</li>
                            </ul>
                            <p>Binance získala 15 miliónov dolárov pri spustení prostredníctvom svojho ICO a časť
                                prostriedkov použila na modernizáciu platformy a výmenného systému Binance. Polovica
                                výnosov bola pridelená na branding a marketing Binance, zatiaľ čo ďalšia časť bola
                                ponechaná ako rezerva.

                                Zakladajúci tím burzy zahŕňal jej CEO Changpeng Zhao, Roger Want ako CTO, James Hofbauer
                                ako hlavný architekt, Paul Jankunas ako viceprezident pre inžinierstvo, Allan Yan ako
                                produktový riaditeľ, Sunny Li ako prevádzkový riaditeľ a ďalší.

                                Medzi investorov a poradcov Binance patrí Roger Ver, generálny riaditeľ spoločnosti
                                Bitcoin.com; Da Hongfei, zakladateľ AntShares; Zhao Dong, jeden z najväčších
                                over-the-counter crypto brokerov v Číne; Yang Linke, spoluzakladateľ BTCChina, a mnoho
                                ďalších.</p>
                            <h3>Na čo sa BNB používa?</h3>
                            <p>Prípady použitia BNB sa časom rozširovali. Spočiatku sa používal pre používateľov BNB na
                                získanie zľavy z poplatkov za obchodovanie na burze Binance a tieto prípady použitia sa
                                rýchlo rozšírili o ďalšie výhody na burze.

                                V súčasnosti je možné BNB použiť v rámci ekosystému Binance na zaplatenie výdavkov za
                                hotel a letenky, na rezerváciu jázd autom, na nákup virtuálnych darčekov,
                                nezameniteľných tokenov alebo na platby za každodenné predmety pomocou karty Binance.

                                V reťazci BNB možno vložiť BNB, aby pomohla zabezpečiť sieť a zarobiť výnosy a použiť ju
                                na zaplatenie transakčných poplatkov za posielanie finančných prostriedkov alebo
                                interakciu s inteligentnými zmluvami v rámci siete. Token možno použiť ako kolaterál pre
                                pôžičky alebo použiť na zaplatenie investícií do niekoľkých aktív na rôznych
                                platformách. Keďže ide o natívne aktívum inteligentnej siete poháňanej zmluvou, prípady
                                použitia BNB budú pravdepodobne časom narastať.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 3 -->

                <div class="tab-pane" id="tab-4">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1">
                            <h3>XRP</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-XRP"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center">
                            <canvas id="lineChart-XRP"></canvas>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-XRP"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-XRP"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-XRP"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="XRP" id="XRP-week" value="7" checked>
                                    <label class="form-check-label" for="XRP-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="XRP" id="XRP-month" value="30">
                                    <label class="form-check-label" for="XRP-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="XRP" id="XRP-year" value="365">
                                    <label class="form-check-label" for="XRP-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je XRP?</h3>
                            <p>XRP je natívny token XRP Ledger a stavia sa ako „rýchle a zelené“ digitálne aktívum,
                                ktoré bolo vytvorené „ako najpraktickejšia kryptomena pre aplikácie v rámci priestoru
                                finančných služieb“. Ponúka rýchle zúčtovanie transakcií, dokáže spracovať tisíce
                                transakcií za sekundu a spolieha sa na stovky validátorov vo svojej sieti. Cieľom
                                kryptomeny je dopĺňať tradičné platobné metódy a umožňuje regulovaným subjektom
                                dodržiavať prísne zákony o prevode peňazí. Zatiaľ čo otvorenejšie blockchainy ako
                                Bitcoin (BTC) umožňujú komukoľvek prispievať do siete a overovať transakcie, XRP Ledger
                                sa spolieha na schválených validátorov. Všetkých 100 miliárd XRP bolo distribuovaných,
                                keď bola kryptomena vytvorená, pričom niektoré z tokenov išli do jej tvorcovia a iné
                                bytosti posielané prostredníctvom darčekov a darčekov. Veľké percento dodávok XRP je
                                držané v úschove.</p>
                            <h3>Kto vytvoril XRP?</h3>
                            <p>Niekoľko jednotlivcov sa podieľalo na vytváraní technológie, ktorá stojí za XRP a
                                podnikmi, ktoré jej pomohli rásť, aby sa stala jednou z najväčších kryptomien podľa
                                trhovej kapitalizácie. Mt. Zakladateľ Gox Jed McCaleb, Arthur Britto a Chris Larsen sú
                                často pripisovaní za vytvorenie XRP. Títo traja jednotlivci majú pozoruhodné kariéry a
                                boli tiež spoluzakladateľmi OpenCoin, fintech firmy, ktorá sa premenovala na Ripple.
                                Ďalšími významnými zapojenými osobami boli Stefan Thomas, prispievateľ Bitcoin Core a
                                bývalý CTO Ripple, David Schwarz, spoluautor Ripple. white paper, spolu s Arthurom
                                Britto.Ripple je jedným z najväčších hráčov XRP Ledger a je priamo spojený s
                                kryptomenou. Zohráva kľúčovú úlohu pri vývoji XRP Ledger a jeho ekosystému.</p>
                            <h3>Aký je vzťah Ripple k XRP?</h3>
                            <p>Ripple je zisková spoločnosť založená v roku 2012 pod názvom OpenCoin. OpenCoin sa v roku
                                2013 premenoval na Ripple Labs a v roku 2015 sa usadil na Ripple. Zapojenie spoločnosti
                                do XRP je „zamerané na budovanie technológie, ktorá pomôže uvoľniť nové nástroje pre XRP
                                a globálne platby.“ Ripple propaguje a používa token XRP prostredníctvom svojho produktu
                                RippleNet, spoločnosť tvrdí, že ponúka spojenie s finančnými inštitúciami po celom svete
                                a vďaka nej je presun peňazí „rýchlejší, lacnejší a spoľahlivejší.“ RippleNet využíva
                                XRP na získavanie likvidity pre cezhraničné transakcie. Jeho použitie eliminuje potrebu
                                predfinancovania účtov a využívajú ho finanční giganti vrátane Santander, Bank of
                                America, SBI Remit, Banco Rendimento a ďalších.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 4 -->

                <div class="tab-pane" id="tab-5">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1">
                            <h3>Dogecoin</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-DOGE"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center">
                            <canvas id="lineChart-DOGE"></canvas>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-DOGE"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-DOGE"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-DOGE"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="DOGE" id="DOGE-week" value="7" checked>
                                    <label class="form-check-label" for="DOGE-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="DOGE" id="DOGE-month" value="30">
                                    <label class="form-check-label" for="DOGE-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="DOGE" id="DOGE-year" value="365">
                                    <label class="form-check-label" for="DOGE-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je to dogecoin (DOGE)?</h3>
                            <p>Dogecoin (DOGE) je kryptomena, ktorá bola vytvorená v roku 2013, inšpirovaná vtedy
                                populárnym memom psov Shiba Inu „doge“. Blockchain kryptomeny bol vytvorený pomocou
                                základnej technológie od Litecoinu (LTC), kryptomeny často označovanej ako striebro k
                                bitcoinovému zlatu. Počiatočná komunita Dogecoinu bola známa tým, že sa ujala
                                filantropických projektov, ktoré zahŕňali pomoc charitatívnym organizáciám. V roku 2014
                                sa dostal do titulkov po tom, čo získal DOGE v hodnote viac ako 25 000 dolárov, aby
                                umožnil jamajskému bobovému tímu zúčastniť sa zimných olympijských hier v Soči. V roku
                                2021 vzrástol záujem o DOGE po tom, čo influenceri spojení s populárnym subredditom
                                WallStreetBets zhromaždili používateľov, aby sa pokúsili získať túto kryptomenu. na
                                značku $1. Zhromaždenie sa rozprúdilo na sociálnych sieťach, pričom mnohí naskočili do
                                rozbehnutého vlaku DOGE. Celebrity, vrátane spoločnosti Tesla a CEO Space X Elona Muska,
                                neskôr začali žartovať o kryptomene a priliali olej do ohňa. Keď rally utíchla a trh s
                                kryptomenami vstúpil do predĺženého medvedieho obdobia, Musk pokračoval v podpore DOGE a
                                rozhodol sa akceptovať ho na platby za tovar v Tesle.</p>
                            <h3>Kto vytvoril dogecoin?</h3>
                            <p>Dogecoin vytvorili Jackson Palmer, produktový manažér v Adobe, a Billy Markus, softvérový
                                vývojár v IBM. Kryptomena bola pôvodne vytvorená ako spôsob, ako satirizovať humbuk
                                okolo kryptomien v roku 2013, ale krátko po uvedení na trh dostala nesmierne pozitívnu
                                spätnú väzbu. Kryptomena pôvodne používala náhodnú odmenu za blokovú ťažbu, ale táto
                                odmena bola v roku 2014 zmenená na statickú odmenu. Používa algoritmus ťažby Scrypt od
                                Litecoinu a ide o overenú kryptomenu, ktorú možno zlúčiť ťaženú spolu s LTC.</p>
                            <h3>Prečo má dogecoin hodnotu?</h3>
                            <p>Dogecoin, na rozdiel od kryptomien ako Bitcoin, bol navrhnutý tak, aby bol hojný a
                                obiehal. V čase písania tohto článku je v obehu 132 miliárd DOGE a kryptomena nemá
                                maximálnu ponuku. Keďže bola vytvorená ako meme, niektorí naznačujú, že by nemala mať
                                žiadnu hodnotu. Ponuka a dopyt však diktujú, že hodnota DOGE sa postupom času zvýšila,
                                čiastočne preto, že komunita začala vo veľkej miere využívať kryptomeny a akceptovaná
                                ako spôsob platby veľkými maloobchodníkmi. Tesla napríklad na svojej webovej stránke
                                prijíma platby DOGE za tovar. Investori sa tiež hromadili na DOGE, pretože špekulovali,
                                že jeho cena by mohla v blízkej budúcnosti vzrásť. Jeho prijatie môže rásť, ak sa
                                integruje do nových produktov a služieb, ktoré spoločnosti Elona Muska – ktoré teraz
                                zahŕňajú aj mikroblogovaciu platformu Twitter – môžu časom spustiť.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 5 -->

                <div class="tab-pane" id="tab-6">
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1">
                            <h3>Litecoin</h3>

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za 24h: <span
                                        id="low24-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za 24h: <span
                                        id="high24-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Otváracia cena za dnešný deň: <span
                                        id="openDay-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najnižšia cena za dnešný deň: <span
                                        id="lowDay-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Najvyššia cena za dnešný deň: <span
                                        id="highDay-LTC"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center">
                            <canvas id="lineChart-LTC"></canvas>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Cena na začiatku zvoleného obdobia: <span
                                        id="periodStart-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Aktuálna cena: <span
                                        id="periodEnd-LTC"></span>
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Vývoj ceny za zvolené obdobie: <span
                                        id="progress-LTC"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <canvas id="lineChartHistoric-LTC"></canvas>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <p>Vyberte časové obdobie:</p>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="LTC" id="LTC-week" value="7" checked>
                                    <label class="form-check-label" for="LTC-week">
                                        7 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="LTC" id="LTC-month" value="30">
                                    <label class="form-check-label" for="LTC-month">
                                        30 dní
                                    </label>
                                </div>
                                <div class=" col-lg-2 form-check">
                                    <input class="form-check-input" onchange="handlePeriodChange(this)" type="radio"
                                           name="LTC" id="LTC-year" value="365">
                                    <label class="form-check-label" for="LTC-year">
                                        1 rok
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 crypto-desc">
                        <div class="col-lg-12">
                            <h3>Čo je to Litecoin (LTC)?</h3>
                            <p>Litecoin (LTC) je všeobecne považovaný za prvú úspešnú alternatívnu kryptomenu (altcoin).
                                Bola vytvorená už v roku 2011 ako fork bitcoinu a ponúka transakcie typu peer-to-peer s
                                takmer nulovými nákladmi. Od hlavnej kryptomeny sa však líši v mnohých ohľadoch, ale
                                skráteným časom potvrdzovania transakcií, nižšími poplatkami a väčším maximálna ponuka
                                84 miliónov LTC a ďalšie rôzne technické aspekty. LTC sa často označuje ako „striebro k
                                zlatu bitcoínov“ a rovnako ako BTC beží na open-source blockchaine, ktorý nie je
                                kontrolovaný žiadnou centrálnou autoritou. Dá sa ťažiť prostredníctvom konsenzuálneho
                                algoritmu Proof-of-Work, pričom baníci sú odmeňovaní za pridávanie nových blokov do
                                blockchainu. Jeho ťažobný algoritmus sa spočiatku pokúšal znížiť efektivitu
                                špecializovaného ťažobného zariadenia, ale nepodarilo sa mu to. Rovnako ako bitcoin, aj
                                Litecoin prechádza udalosťami zníženia o polovicu, pri ktorých sa odmena coinbase pre
                                baníkov, ktorí nájdu bloky v sieti, zníži na polovicu.</p>
                            <h3>Kto vytvoril LTC?</h3>
                            <p>Kryptomena bola vytvorená bývalým inžinierom Google Charlie Lee, ktorý ju v istom bode
                                nazval „odľahčenou verziou bitcoinu“. Lee je počítačový vedec a absolvent
                                Massachusettského technologického inštitútu, ktorý pred vytvorením kryptomeny pracoval v
                                spoločnosti Google. Po vytvorení Litecoinu Lee pokračoval v práci riaditeľa inžinierstva
                                na kryptomenovej burze Coinbase. Od nástupu do funkcie sa Lee do značnej miery prestal
                                zameriavať na vývoj Litecoinu, hoci komunita túto kryptomenu naďalej podporovala. Koncom
                                roka 2017 Lee opustil Coinbase, aby na plný úväzok pracoval na vývoji Litecoinu. Teraz
                                pôsobí ako výkonný riaditeľ neziskovej organizácie, ktorá sa venuje LTC, Litecoin
                                Foundation.</p>
                            <h3>Prečo má litecoin hodnotu?</h3>
                            <p>Litecoin, podobne ako bitcoin a iné kryptomeny, má obmedzené množstvo a pravidelne
                                znižuje množstvo LTC vstupujúceho do systému, čím zaisťuje, že jeho inflácia je
                                transparentná a predvídateľná. Obchodníci sa spoliehali na Litecoin ako na alternatívu k
                                bitcoinu, ktorý si dokázal udržať popularitu po celé roky. Litecoin sa v súčasnosti
                                používa na platby za tovar a služby prostredníctvom rôznych spracovateľov platieb. Keďže
                                je menej populárna ako bitcoin a bolo v nej vykonaných niekoľko ďalších zmien,
                                transakcie LTC sú relatívne lacné a rýchlejšie sa usadzujú. Kryptomena sa často používa
                                aj ako testovacia plocha pre nové technológie pred ich implementáciou do siete
                                bitcoinov. Litecoin ako prvý implementoval Segregated Witness (SegWit), ktorý „oddeľuje“
                                dáta digitálneho podpisu transakcie (svedka) mimo nich, aby lepšie využíval obmedzený
                                priestor bloku, aj keď táto technológia bola prvýkrát navrhnutá pre Bitcoin. LTC
                                implementovalo aj Lightning Network , riešenie škálovania druhej vrstvy, pred Bitcoinom.
                                Mnohí použili Litecoin's Lightning Network na testovanie siete, ktorá sa spolieha na
                                používateľmi generované platobné kanály, v skutočnom ekonomickom prostredí. Prvé
                                transakcie Lightning Network pomocou LTC preniesli 0,00000001 LTC z Zürichu do San
                                Francisca za menej ako jednu sekundu.</p>
                        </div>
                    </div>
                </div><!-- End Tab Content 6 -->

            </div>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')

</body>

</html>
