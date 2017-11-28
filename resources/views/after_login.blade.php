@extends('layouts.app')

@section('content')

    <header>
        <div class="container">
            <div class="row pt-20 mb-20">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="assets/images/winston-logo.svg" alt="logo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="clearAfter">
                            <li>
                                <a href="/home" class="active">ՄԻՋՈՑԱՌՄԱՆ ՄԱՍՆԱԿՑՈՒԹՅԱՆ ԿԱՐԳ</a>
                            </li>
                            <li>
                                <a href="/centers">ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐ</a>
                            </li>
                            <li>
                                <a href="/gifts">ՆՎԵՐՆԵՐ</a>
                            </li>
                            <li>
                                <a href="/rules">ՄԻՋՈՑԱՌՄԱՆ ԿԱՆՈՆՆԵՐ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Start Content Section -->

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box mt-30">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="darkHeading">
                                    <h2>Գնիր հատուկ ժապավենով 3 տուփ WINSTON և գտիր WINSTON բառի որևէ տառ</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gifts flex">
                                    <div class="col-md-6">
                                        <p class="font-xs pt-10 mb-25">Միջոցառման շրջանակներում տուփ է համարվում ՀՀ-ում սպառման համար նախատեսված, հատուկ ժապավենով փաթեթավորված վաճառքի ներկայացված WINSTON ապրանքանիշի</p>

                                        <div class="flex justify-center">
                                            <div class="col-md-2">
                                                <img src="assets/images/gift-phone.png" width="100%" alt="">
                                            </div>
                                            <div class="col-md-7">
                                                <img src="assets/images/Range-Rover-Evoque.png" width="100%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 orLine">
                                        <p class="font-xs pt-10 mb-25">kam</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="font-xs pt-10 mb-25">Միջոցառման շրջանակներում տուփ է համարվում ՀՀ-ում սպառման համար նախատեսված, հատուկ ժապավենով փաթեթավորված վաճառքի ներկայացված WINSTON ապրանքանիշի ծխախոտի տուփն իր թափանցիկ թաղանթով։</p>

                                        <div class="flex justify-center text-center">
                                            <div class="col-md-4">
                                                <p class="font-xs pt-10 mb-10">2 japaven + 12 tup</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift-knife.png" width="80px" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">usb krich</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="font-xs pt-10 mb-10">2 japaven + 12 tup</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift-usb.png" width="100%" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">usb krich</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="font-xs pt-10 mb-10">2 japaven + 12 tup</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift.png" width="45px" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">usb krich</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="article">
                                    <p>
                                        Պետք է համապատասխան ժամանակահատվածում ժապավենները և տուփերը ներկայացնել միջոցառման նվերների ստացման որևէ կենտրոն և գրանցվել ընթացիկ նվերներ ստանալու կամ գլխավոր
                                        միջոցառմանը մասնակցելու համար:
                                    </p>
                                    <p>
                                        Ընթացիկ նվերներ ստանալու համար ներկայացված ժապավենները և տուփերը չեն կարող միաժամանակ դիտարկվել որպես գլխավոր միջոցառման համար ներկայացված: Գլխավոր միջոցառմանը մասնակցելու
                                        նպատակով անձը համապատասխան տառերով բոլոր ժապավենները և տուփերը պետք է ներկայացնի միասին:
                                    </p>
                                    <p>
                                        Միջոցառման շրջանակներում տուփ է համարվում ՀՀ-ում սպառման համար նախատեսված, հատուկ ժապավենով փաթեթավորված վաճառքի ներկայացված WINSTON ապրանքանիշի ծխախոտի տուփն իր
                                        թափանցիկ թաղանթով, որի վրա առկա է «ԱԶԱՏՈՒԹՅԱՆ ՈՒՂԻ FREEDOM ROAD» գրառումը։
                                        Նվերների քանակը սահմանափակ է։ Տվյալ տեսակի նվերի ընդանուր քանակը սպառվելուց հետո դրա մասով միջոցառումը համարվում է ավարտված։
                                    </p>
                                    <p>
                                        Նվեր ստանալու համար անհրաժեշտ է ներկայացնել անձը հաստատող փաստաթղթի բնօրինակը։ Միևնույն անձը կարող է ստանալ միայն մեկ միատեսակ նվեր։
                                    </p>
                                    <p>
                                        Միջոցառմանը կարող են մասնակցել միայն 18 տարին լրացած, ծխախոտային արտադրանքի սպառող հանդիսացող ՀՀ քաղաքացիները։
                                    </p>

                                    <h4 class="mt-20">ՄԻՋՈՑԱՌՄԱՆԸ ՄԱՍՆԱԿՑՈՒԹՅԱՆ ԿԱՐԳԻ ԱՅԼ ՄԱՆՐԱՄԱՍՆԵՐԻ ՀԱՄԱՐ ԾԱՆՈԹԱՑԻՐ ՄԻՋՈՑԱՌՄԱՆ ԿԱՆՈՆՆԵՐԻՆ։</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="callAction">
        <span>ԹԵԺ ԳԻԾ 060 665050</span>
    </div>

@endsection
