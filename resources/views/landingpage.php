<?php require "html-head.php"; ?>
<body ng-app="a91App" ng-controller="LandingCtrl as lp" ng-cloak>
<?php include('navbar.php'); ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/IMG_5370.JPG');"></div>
            <div class="carousel-caption">
                <h2>A91 Gym</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/IMG_5376.JPG');"></div>
            <div class="carousel-caption">
                <h2>A91 Gym</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">
    
    <a name="kapcsolat"></a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Kapcsolat</h2>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-map-marker"></i> Pilisvörösvár, Kisfaludy utca 38-42.</h4>
                </div>
                <div class="panel-body embed-responsive embed-responsive-4by3">
                    <!-- <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.7935312666873!2d18.894506315125714!3d47.63014459434527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476a79e3d46e3477%3A0x198f7ead8881b49d!2zUGlsaXN2w7Zyw7ZzdsOhciwgS2lzZmFsdWR5IHUuIDM4LCAyMDg1!5e0!3m2!1sen!2shu!4v1462290592698" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-phone"></i> Kapcsolat</h4>
                </div>
                <div class="panel-body">
                    <p>+36 70 378 2407<br>+36 26 611 891</p>
                    <p><a href="http://www.facebook.com/a91gym" target="_blank">
                        <i class="fa fa-fw fa-2x fa-facebook-official"></i> a91gym</a></p>
                    <p><a href="mailto:info@a91.hu">
                        <i class="fa fa-fw fa-2x fa-envelope"></i> info@a91.hu</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-hand-o-down"></i> Nyitva tartás</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>H-P:</td>
                                <td>7:30 – 21:30</td>
                            </tr>
                            <tr>
                                <td>Szo:</td>
                                <td>8:00 – 18:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-2">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div> -->
    </div>
    <!-- /.row -->
    <!-- arak -->
    <a name="arak"></a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Árak</h2>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th><h3>Terem díjak</h3></th>
                        <th>Felnőtt</th>
                        <th>12 évesig</th>
                        <th>Diák/Nyugdíjas</th>
                        <th>Érvényes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="row in lp.arak track by $index">
                        <td ng-repeat="cell in row track by $index">{{cell}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table">
                <thead>
                    <tr>
                        <th><h3>Személyi edzés</h3></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="row in lp.arak2 track by $index">
                        <td ng-repeat="cell in row track by $index">{{cell}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th><h3>Egyéb</h3></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="row in lp.arak3 track by $index">
                        <td ng-repeat="cell in row track by $index">{{cell}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- <div class="clearfix"></div> -->

        <div class="col-md-7">
            <h3>Általános információk</h3>
            <ul>
                <li ng-repeat="item in lp.altinfo">
                    {{item}}
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

   <!-- Bemutatkozás -->
    <a name="bemutatkozas"></a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Bemutatkozás</h2>
        </div>
        <div class="col-md-12">

            <p>Az A91 Gym Sportközpont 2015 novemberében nyitotta meg kapuit Pilisvörösváron, a Liget szívében.</p>

            <p>Célunk, hogy a rendszeres mozgás, feltöltődés és kikapcsolódás lehetőségét minél több emberhez eljuttassuk, kulturált, egyedi környezetben és elérhető árakon.</p>

            <p>A közel 2400 m2-es, légkondicionált központunkban, egyedi környezetben állunk majd vendégeink rendelkezésére.</p>

            <p>Vendégeink több mint 20 óratípus közül választhatják ki a számukra legmegfelelőbbet, legyen szó egy pörgős zumba, step, dance óráról, egy elmélyült, nyugodt hangulatú pilates, gerinctorna, jóga óráról, vagy akár egy kemény, dinamikus Body Fighters típusú óráról.<br>
            Aerobik, bike, funkcionális és egy küzdősportterem lesz gazdagon felszerelve a legkülönbözőbb eszközökkel.</p>

            <p>Magasan kvalifikált edzőkkel dolgozunk majd azon, hogy, missziójukként minden vendéget az egyedi igényeknek megfelelően, odafigyeléssel segítsenek.</p>

            <p>Wellness részlegünkben finn szauna, gőzkabin és egy pezsgőfürdő garantálja vendégeink számára a teljes felfrissülést és relaxációt, mely segít feloldani a mindennapok során felgyülemlő stresszt és feszültséget.</p>

            <p>A fáradt test izomzatának felfrissítésére, revitalizálására masszázs részlegünkön manuálterápiával és különböző masszázsokkal várjuk vendégeinket.</p>

            <p>Minőségi beauty szolgáltatásokat – fodrászat, szolárium, kozmetika, 3D- műszempilla, manikűr-pedikűr - kínálunk, amelyek igénybevétele során garantáltan szebbé varázsoljuk vendégeinket.</p>

            <p>A vendégek igényeinek kielégítéséről udvarias, barátságos kiszolgálás mellett, szakmailag jól képzett oktatókkal, a kornak, az egészségi és edzettségi állapotnak megfelelő erősítő, állóképesség fejlesztő, zsírégető edzés programok összeállításával gondoskodunk.<br>
            Kimerítő edzések után, a vitaminbár kínálatunk garantálja majd a további felfrissülést!</p>

            <p>Klubunkban ingyenes wifi szolgáltatást biztosítunk.</p>

            <p>Az A91 Gym Sportközpont látogatására, eszközeinek használatára, az órákon és a foglalkozásokon történő részvételre vonatkozó feltételeket a Házirend tartalmazza.</p>

            <p>Ne, feledd, az életünket mi formáljuk!</p>

            <p>A mozgással, a magunkra figyeléssel átalakíthatjuk a külsőnket, egészségesebbé válunk, mindemellett egy pozitív önképet építhetünk fel, amely erőt és magabiztosságot ad a mindennapokban.</p>

            <p>Felkészülten várjuk leendő klubtagjainkat, akik hisznek abban, hogy az egészséges életforma döntés kérdése.</p>

        </div>

        <div class="col-lg-12">
            <h2 class="page-header">Edzők</h2>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Szauer Zsanett</h4>
                </div>
                <div class="panel-body">
                    <p>- Sziasztok!</p>
                    <p>Szauer Zsanett vagyok, gyermekkorom óta sportolok. Hosszú évek folyamatos edzése és versenyzése mellett, igyekeztem minél több sportba bele kóstolni. Kipróbáltam több csapatjátékot, illetve társas táncoltam is. 2005-ben megismerkedtem a fitness/wellness világával és azóta a rendszeres mozgás életem részévé vált. Aerobic foglalkozásaimon a lényeget nemcsak a kényes testtájak (has, far, comb) edzésére fektetem, hanem egy harmonikusan, arányos fejlett izomzat formálására. Óráimat úgy állítom össze, hogy az intenzív edzést és szórakozást is jelentsen. Próbálom vendégeimmel megéreztetni az energiával, erővel és dinamikával összhangban végzett mozgás örömét. Megfelelő motivációval igyekszem elérni, hogy a test-edzés, a testformálása és formában tartása, mindennapjaink részévé váljék. Így a rendszeres mozgás, mint az egészséges életmód egyik alapköve, beépül hétköznapjainkba. A Body Fighters® óráimat a dinamikus mozgás, az erő, a jó zene és a kitartó csapatmunka jellemzi. A Body Fighters® óra fontos tulajdonsága, hogy rendkívül jó állóképesség fejlesztő, speciális erőfejlesztő és nagy kalória felhasználású edzésmódszer. Stresszoldó hatása segít a mindennapi rohanást megfelelő keretek között levezetni.</p>
                    <p>"Egy Body Fighters® edzés akkor jó, ha a teljesítőképességed határait feszegeti."</p>
                    <p>Szívesen segítek Neked, ha szeretnél változtatni életmódodon, esetleg meg akarsz szabadulni fölösleges kilóidtól. Ha igényled, nem csak álmodozol, hanem a tettek embere vagy és tenni is szeretnél az egészséged és a jobb formád érdekében, együtt edzek veled. Személyi edzéseimen elindítalak a helyes úton. </p>
                    <p>Sok szeretettel várok minden kedves mozogni vágyó nőt és férfit!:)</p>
                    <p>2009. IWI – International Wellness Institute - Aerobik edző</p>
                    <p>2010. Sport-szakedző</p>
                    <p>2010. Harcklub Hungary R.S.E. - Fight® oktató</p>
                    <p>2010. Harcklub Hungary R.S.E. - Bodyfighters® trainer</p>
                    <p>2010. Harcklub Hungary R.S.E.- Főtitkára</p>
                    <p>2011. ZUMBA® Fitness B1,B2,– Official Zumba® Instruktor</p>
                    <p>2014. Fitness Company - Pilates oktató</p>
                    <p>2014. Fitness Company – SpinRacing oktató</p>
                    <p>2011-2015 Magyar Testnevelési Egyetem - Testnevelő Edző, Testépítő Szakedző</p>
                    <p>Kick-Box szakágban 2 Kyu viselésére jogosult.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Pál Attila</h4>
                </div>
                <div class="panel-body">
                    <p>- Sziasztok!</p>
                    <p>Pál Attilának hívnak. 1977.05.09-én születtem Székesfehérváron. Gyermekkorom óta sporttal töltöm időm nagy részét. Hosszú évek folyamatos edzése és versenyzése mellett, igyekeztem minél több sportba bele kóstolni. Kyokushin karate, mint alap mérföldkő, egy fontos pont az életemben. Sokan ismerjük a mondást:”A harci művészet nem sport, hanem életforma. Egy Kyokushin mondás: „Légy kíméletes másokkal és kíméletlen önmagaddal”! Ekkor alapos önismeretre teszel szert, felismered hibáidat, erényeidet és képes leszel pozitív irányban változtatni személyiségeden. Egy edzés akkor jó, ha a teljesítőképességed határait feszegeti. A szerzett képességeink sokkal értékesebbek, mint a veleszületettek. Ha az edzések ebben a szellemiségben zajlanak, akkor a teljesítménynek és a kemény munkának lesz értéke és nem pusztán az ügyességnek.</p>
                    <p>Végzettségek:</p>
                    <p>2002 Fitness Akadémia, Rekreáció-szakedőz</p>
                    <p>2003 Fitness Akadémia, Testépíő-szakedző</p>
                    <p>2003 Személyi edző</p>
                    <p>2004 Fitness Akadémia, Aerobic-szakedőz</p>
                    <p>2004 Sakura S.E. Thai-Geri oktató</p>
                    <p>2005 NIKE Dance Team szakedzője</p>
                    <p>2005 Aero Dance</p>
                    <p>2005 Magyar Testnevelési Egyetem Sportmenedzser– Sport-rekreációs szak.</p>
                    <p>2006 Harcklub Hungary megalapítója, vezető Fight edző, Fight edzésmódszer megalkotója</p>
                    <p>2007 Flexi- baar és Xco trainer– Flexi- baar & Xco Team Hungary</p>
                    <p>2008 Fight tanfolyam vezető/Presenter – HarcKlub Hungary R.S.</p>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Szabó Szilvia (Jógamájá Déví Dászí)</h4>
                </div>
                <div class="panel-body">
                    <p>1977 nyarán születtem Budapesten. Gyermekként kezdtem néptáncot tanulni, de gimnazista koromra abbahagytam, és a fitness világa felé fordult figyelmem. A sportolás mellett tanári pályára készültem, de a diploma megszerzésekor már edzőként tevékenykedtem, és ez így is maradt. </p>
                    <p>2002-ben egy önálló sportcentrumot nyitottam, ahol már a jóga és az egyéb keleti mozgásformák is jelen voltak. Tíz éves lehettem, amikor először kezembe került egy hindu szent könyv. Ettől a pillanattól kezdve a szívem mélyén mindig arra vágytam, hogy kapcsolatba kerüljek ezzel a nemes kultúrával. Az ismeretlen világ és filozófia iránti kíváncsiság egyre nőtt bennem. 1998 körül kezdtem el a jógát gyakorolni, majd 1-2 év elteltével a harcművészetek világába is belekóstoltam. A kelet vonzása nagyon erőteljes volt, minden érdekelt, és nem sajnáltam sem időt sem energiát, hogy minél közelebb kerüljek a tanításokhoz.</p>
                    <p>2006-ban végül úgy döntöttem szeretném eredeti környezetében is megismerni, és tanulni ezt a rendszert, ezért bezártam a sportcentrumot, és elutaztam Indiába. Azóta évente utazom vissza, van, hogy évente többször is. Közben továbbtanultam, több Főiskolát és képzést is elvégeztem, a jóga, a harcművészet, és hindu teológia területeken. 2013 óta pedig már nem csak egyedül utazom Indiába, hanem évente egyszer csoportot is viszek tanulmányutakra.</p>
                    <p>2012-ben elfogadott Mesterem tanítványának, beavatást kaptam a gaudíja vaisnavizmusba, és felkért rá, hogy itthon képviseljem az Inbound Jógarendszert, amit ő alapított. Utazásaim során igyekszem tudásom tovább mélyíteni, hogy itthon tartózkodásaim alatt továbbadhassam a fejlődni vágyóknak.  </p>
                    <p>Kötelességemnek érzem, hogy napi gyakorlásomra kellő időt és energiát fordítsak, hogy a bennem kialakult változás és belső harmónia a környezetem harmóniáját is szolgálja. Kötelességemnek érzem a lelki tanítómesterem szolgálatát, hogy ezáltal a Legfelsőbb szolgájának a szolgája lehessek. Misszióm az elért tudásomat megosztani a világgal, hogy az emberiség szolgálatáért élhessek.</p>
                    <p>1996 sportoktató-aerobik / TFTI /</p>
                    <p>2000 pedagógia, fejlesztőpedagógia / EKTF /</p>
                    <p>2001 kick-box / TFTI /</p>
                    <p>2001 thai-geri / Sakura S.E. /</p>
                    <p>2002 fitness instruktor / IWI /</p>
                    <p>2003 személyi edző / IWI /</p>
                    <p>2004 preventív gerincedző / IFAA /</p>
                    <p>2004 pilates / IFAA /</p>
                    <p>2006 Harcklub Hungary egyik vezető edzője és alapítója</p>
                    <p>2006 buddhista tanító-harcművészeti szakirány / TKBF /</p>
                    <p>2009 thai masszázs / MCEC /</p>
                    <p>2009 alternatív masszázs- és mozgásterapeuta / ETI /</p>
                    <p>2009 jógaoktató / Sivánanda Központ /</p>
                    <p>2012 Inbound jógaoktató / India /</p>
                    <p>2010 - 2013 Vaisnava Teológia / BHF /</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Snieder Evelin</h4>
                </div>
                <div class="panel-body">
                    <p>- Snieder Evelin vagyok, 1981-ben születtem karácsonykor. Gyerekkorom óta jelentős szerepet játszik a sport és a mozgás az életemben. 13 éves koromban egy kötelező orvosi vizsgálat során derült ki, hogy gerincferdülésem van. Számos mozgásformát kipróbáltam, míg végül megtaláltam azt, ami igazán nekem való. Ez a Hatha Yoga. Ez egy olyan mozgáskultúra amelynek mindennapos gyakorlása – művelői szerint – önmagában is hasznos, javítja az egészséget, jó közérzetet teremt, mentális megtisztulást hoz és az életminőség javulását eredményezi, ezáltal megtalálod önmagadban, a békét, a harmóniát, megtanulsz összpontosítani, és tudatosan bánni a testeddel.</p>
                    <p>A történetem itt kezdődik: </p>
                    <p>Apró sikereim és örömeim a gyakorlás során egyre jobban vonzott ezen mozgáskultúra és a szellemiség iránt. Közben tudatossá váltak az apró változások, irodalmat tanulmányoztam és belemerültem jobban a mögöttes tartalmakba is, és gyökeresen megváltoztatta addigi életemet. Elköltöztem szülőhelyemről, amely nagyobb önbizalmat adott az „életben maradáshoz”. 2005-ben megismerkedtem a jógaoktatómmal Bálint Jánossal. Akkorra már némi fogalmam volt a jógáról. Szeretetteljes biztatása még több önbizalmat adott. Pár hónap elteltével javult fizikai teherbírásom, közérzetem, energikusabb lettem. Egy év rendszeres gyakorlás következtében megszűntek a mindennapos fájdalmaim. Olyannyira megszerettem ezt a mozgásformát, hogy úgy éreztem, meg kell ismertetnem alapelveit és hatásmechanizmusát másokkal is. Beiratkoztam egy oktatói képzésre, a diplomámat 2007 szeptemberében kaptam meg.</p>
                    <p></p>
                    <p>Jelenleg is aktívan foglalkozok jóga oktatással, kisebb csoportoknak, vagy akár magánórákon is.</p>
                    <p>Mindenkit, akinek az érdeklődését sikerült felkeltenem, szeretettel várom az óráimon.</p>
                    <p></p>
                    <p>- Kosztka-Huber Éva vagyok. 2005-ben végeztem a Semmelweis Egyetem gyógytornász szakán. Majd hogy szakmai tudásomat elmélyítsem, manuálterápia, McKenzie és sportfizioterápia tanfolyamokat végeztem. Mindennapjaimban és munkám során is nagy hangsúlyt fektetek az egészséges életmódra, a rendszeres testmozgásra és a mozgásszervi betegségek prevenciójára.</p>
                    <p>Hogy kinek ajánlom a gyógytornát? Kortól, nemtől és mozgásszervi panasztól függetlenül bárkinek, aki gyógyulni szeretne, vagy éppen megtartaná egészséges kondícióját.</p>
                    <p></p>
                    <p>Iskoláim:</p>
                    <p>2005     Semmelweis Egyetem Egészségügyi Főiskolai Kar Gyógytornász Szak Diploma</p>
                    <p>2009     Manuálterápia tanfolyam</p>
                    <p>2013     McKenzie tanfolyam "A" és "B" kurzus</p>
                    <p>2014     Sportfizioterápia alaptanfolyam</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Kiss Attila</h4>
                </div>
                <div class="panel-body">
                    <p>- Kiss Attila vagyok. Gyermekkoromban többféle labdajátékot és harcművészetet kipróbáltam, de egyiket sem éreztem igazán a magaménak. Majd 2011ben betértem egy Kick-box edzére, amit azóta is versenyszerűen űzök. Ebben a sportágban tapasztaltam meg először a mozgás örömét, és itt fogalmazódott meg  bennem, hogy a mozgásnak szentelem az életem, így be is iratkoztam egy tanfolyamra, amit sikeresen el is végeztem.</p>
                    <p>A továbbiakban szeretném tovább képezni magam, bővíteni az ismereteimet, hogy minnél szakszerűbb segítséget nyújthassak mindenkinek.</p>
                    <p>Szeretném elérni, hogy minnél több ember megtapasztalhassa azt a rengeteg pozitivumot, örömöt, amit a mozgás nekem is okozott.</p>
                    <p>Akár fogyni, izmosodni, szálkásodni szeretnél, várlak szeretettel óráimon, vagy személyi edzésen.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Kreiszl Boglárka</h4>
                </div>
                <div class="panel-body">
                    <p>A mozgás már régen is fontos szerepet játszott az életemben. Kipróbálhattam  magam több sportban is,mint például a röplabda, kosárlabda és a futás. A csoportos órákkal kamasz koromban ismerkedtem meg, amelyek hangulata azonnal magával ragadott.</p>
                    <p>Szerencsés vagyok, mivel a hobbimat mára a szakmámnak tudhatom.</p>
                    <p></p>
                    <p>Fontosnak tartom a rendszeres testmozgást, mivel egészséged javulása mellett pozitívan hat a fizikai és szellemi állapotodra is. Erre a jó külső már csak egy ráadás.</p>
                    <p>Ezen felül a sportnak számtalan pozitív hatása van. Növeli a kitartásod, rendszerességet visz mindennapjaidba, nyugodt alvást biztosít, segíti a stressz leküzdését.</p>
                    <p>Kitartó, kemény munkával látványos eredményeket érhetsz el, ha mindemellett figyelsz az egészséges életmód tartására is.</p>
                    <p>Ha kész vagy megvalósítani a céljaidat, legyen az fogyás, erősödés, kikapcsolódás vagy feltöltődés látogass el egy órámra, ahol jókedvűen érjük mindezt el.</p>
                    <p>Lépj ki a komfortzónádból, feszegesd a határaidat és az eredmény nem marad el!</p>
                    <p></p>
                    <p>„Nyújtsd mindig a legtöbbet! Ne elégedj meg azzal, ami vagy! Próbálj meg az lenni, ami lehetnél!”</p>
                    <p>2015 - Csoportos fitness instruktor-IWI</p>
                    <p>2015 - fight instruktor</p>
                    <p>2016 - spinning</p>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-2">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div> -->
    </div>
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <!--div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to Modern Business
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div-->
    <!-- /.row -->

    <!-- Portfolio Section -->
    <!--div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Portfolio Heading</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
    </div-->
    <!-- /.row -->

    <!-- Features Section -->
    <!--div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Modern Business Features</h2>
        </div>
        <div class="col-md-6">
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
                <li><strong>Bootstrap v3.2.0</strong>
                </li>
                <li>jQuery v1.11.0</li>
                <li>Font Awesome v4.1.0</li>
                <li>Working PHP contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                <li>17 HTML pages</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>
    </div-->
    <!-- /.row -->

    <!-- <hr> -->

    <!-- Call to Action Section -->
    <!--div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div-->

    <hr>

<?php require "footer.php"; ?>

</div>
<!-- /.container -->

    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    });
    </script>

    <!-- Scripts to load -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
    <script src="comps/angular-route/angular-route.js"></script>
    <script type="text/javascript">
        angular.element(document.getElementsByTagName('head')).append(angular.element('<base href="' + window.location.pathname + '" />'));
        (function(){
            'use strict';
            angular.module('a91App', ['ngRoute']);            
        })();
    </script>
    <script src="js/landing.js"></script>
</body>
</html>
