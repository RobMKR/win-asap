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
                                <a href="/home">ՄԻՋՈՑԱՌՄԱՆ ՄԱՍՆԱԿՑՈՒԹՅԱՆ ԿԱՐԳ</a>
                            </li>
                            <li>
                                <a href="/centers" class="active">ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐ</a>
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
                            <div class="col-md-12">
                                <div class="gifts flex">
                                    <div class="col-md-6">
                                        <p class="font-xs pt-10 mb-25">7 ժապավեն (WINSTON-ի բոլոր տառերով) + 21 տուփ = գլխավոր միջոցառմանը մասնակցելու և ավտոմեքենա կամ սմարթֆոն ստանալու հնարավորություն</p>

                                        <div class="flex justify-space-between">
                                            <div class="col-md-2">
                                                <img src="assets/images/gift-phone.png" width="100%" alt="">
                                            </div>
                                            <div class="col-md-7">
                                                <img src="assets/images/Range-Rover-Evoque.png" width="100%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="flex justify-center text-center pt-30">
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
