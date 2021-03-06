@extends('layouts.app')

@section('content')

    <header>
        <div class="container-md">
            <div class="row pt-20 mb-20">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="assets/images/winston-logo.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="clearAfter">
                            <li>
                                <a href="/home">ՄԻՋՈՑԱՌՄԱՆ ՄԱՍՆԱԿՑՈՒԹՅԱՆ ԿԱՐԳ</a>
                            </li>
                            <li>
                                <a href="/centers">ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐ</a>
                            </li>
                            <li>
                                <a href="/gifts" class="active">ՆՎԵՐՆԵՐ</a>
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
        <div class="container-md">
            <div class="row">
                <div class="col-md-12">
                    <div class="box mt-30">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="gifts flex md">
                                    <div class="col-lg-5 col-md-12">
                                        <p class="font-xs pt-10 mb-25">7 ժապավեն (WINSTON-ի բոլոր տառերով) + 21 տուփ = գլխավոր միջոցառմանը մասնակցելու և ավտոմեքենա կամ սմարթֆոն ստանալու հնարավորություն</p>

                                        <div class="flex justify-space-between">
                                            <div class="col-sm-2 col-3">
                                                <img src="assets/images/gift-phone.png" width="100%" alt="">
                                            </div>
                                            <div class="col-sm-7 col-8">
                                                <img src="assets/images/Range-Rover-Evoque.png" width="100%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">

                                        <div class="flex justify-center text-center xs-align pt-30">
                                            <div class="col-sm-4 col-8">
                                                <p class="font-xs pt-10 mb-10">2 ժապավեն + 6 տուփ</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift-knife.png" width="80px" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">ԲԱԶՄԱՖՈՒՆԿՑԻՈՆԱԼ ԳՈՐԾԻՔ</p>
                                            </div>
                                            <div class="col-sm-4 col-8">
                                                <p class="font-xs pt-10 mb-10">4 Ժապավեն + 12 տուփ</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift-usb.png" width="100%" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">USB ԿՐԻՉ</p>
                                            </div>
                                            <div class="col-sm-4 col-8">
                                                <p class="font-xs pt-10 mb-10">6 Ժապավեն + 18 տուփ</p>
                                                <div class="gift-img">
                                                    <img src="assets/images/gift.png" width="45px" alt="">
                                                </div>
                                                <p class="font-xs pt-10 mb-10">ԼԻՑՔԱՎՈՐԻՉ</p>
                                            </div>
                                        </div>
                                    </div>
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
