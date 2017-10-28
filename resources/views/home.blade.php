@extends('layouts.app')

@section('content')

    <!-- Register Block -->
    <section class="container pt-30">
        <div class="row mb-20">
            <div class="col-md-12 text-center">
                <h6>ԱԶԱՏՈՒԹՅԱՆ ՈՒՂԻ միջոցառմանը կարող են մասնակցել միայն <strong class="red">18</strong> տարին լրացած,
                    ծխախոտային արտադրանքի սպառող հանդիսացող ՀՀ քաղաքացիները:</h6>
            </div>
        </div>
    </section>

    <!-- Start Content Section -->

    <section class="content">
        <div class="container-lg whiteBg">
            <div class="row">
                <div class="col-md-8 mt-15">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="mb-30">ԱԶԱՏՈՒԹՅԱՆ ՈՒՂԻ ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐՆ ԵՆ</h3>
                        </div>
                    </div>
                    <div class="row box">

                        <div class="col-md-6 col-sm-12 mt-15 mb-15">
                            <table class="tableStyle">
                                <thead>
                                <tr class="uppercase">
                                    <th colspan="2">ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ <br> ԿԵՆՏՐՈՆՆԵՐ</th>
                                    <th colspan="2">Աշխատանքային գրաֆիկ <br> 31.10.2017 - 17.12.2017</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Հասցե</td>
                                    <td>Վաճառակետի անվանում</td>
                                    <td>Աշխ. Օրեր</td>
                                    <td>Աշխ. Ժամեր</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Երեւան Մոլ</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Էյ ընդ Ջի (A&G)</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Աբովյան սիթի</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-15 mb-15">
                            <table class="tableStyle">
                                <thead>
                                <tr class="uppercase">
                                    <th colspan="2">ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ <br> ԿԵՆՏՐՈՆՆԵՐ</th>
                                    <th colspan="2">Աշխատանքային գրաֆիկ <br> 31.10.2017 - 17.12.2017</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Հասցե</td>
                                    <td>Վաճառակետի անվանում</td>
                                    <td>Աշխ. Օրեր</td>
                                    <td>Աշխ. Ժամեր</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Երեւան Մոլ</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Էյ ընդ Ջի (A&G)</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Երեւան, Արշակունյաց, 34/3</td>
                                    <td>Աբովյան սիթի</td>
                                    <td>Երկուշաբթի-Կիրակի</td>
                                    <td>12:00-22:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 text-center mt-15 mb-30">
                            <h3>Ժապավենները և տուփերը կարող են ներկայացվել մինչև 17.12.2017 ներառյալ</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <h4>ՄԱՍՆԿԱՑՈՒԹՅԱՆ ԿԱՐԳԻՆ ԵՎ ՄԻՋՈՑԱՌՄԱՆ ԿԱՆՈՆՆԵՐԻՆ ԾԱՆՈԹԱՆԱԼՈՒ ՀԱՄԱՐ ԱՆՀՐԱԺԵՇՏ Է ԳՐԱՆՑՎԵԼ</h4>

                    <div class="row mt-30">
                        <div class="col-md-12">
                            <p class="font-normal">Գրանցվելու համար անհրաժեշտ է լրացնել հետևալ դաշտերը</p>
                        </div>
                        <div class="col-md-12 mt-15">
                            @if (Session::has('message'))
                                <div class="after-register">
                                    {{ Session::get('message') }}
                                </div>
                            @else
                                <form action="/register" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">
                                        <div class="col-md-5 mt-15 mr-0">
                                            <div class="field {{ $errors->has('name') ? 'invalid' : '' }}">
                                                <input type="text" name="name" placeholder="Անուն (լատինատառ)">
                                            </div>

                                            @if($errors->has('name'))
                                                <span class="error">This Field Is Required</span>
                                            @endif
                                        </div>
                                        <div class="col-md-7 mt-15">
                                            <div class="field  {{ $errors->has('name') ? 'invalid' : '' }}">
                                                <input type="text" name="surname" placeholder="Ազգանուն (լատինատառ)">
                                            </div>
                                            @if($errors->has('surname'))
                                                <span class="error">This Field Is Required</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-15">
                                            <div class="field {{ $errors->has('phone') ? 'invalid' : '' }}">
                                                <input type="text" name="phone" placeholder="Հեռախոսահամար +374 xx xxxxxx">
                                            </div>

                                            @if($errors->has('phone'))
                                                <span class="error">This Field Is Required</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-15">
                                            <div class="field {{ $errors->has('email') ? 'invalid' : '' }}">
                                                <input type="email" name="email" placeholder="Էլ.փոստի հասցե">
                                            </div>

                                            @if($errors->has('email'))
                                                <span class="error">This Field Is Required</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field {{ $errors->has('password') ? 'invalid' : '' }}">
                                                <input type="password"  name="password" placeholder="Ծածկագիր">
                                            </div>

                                            @if($errors->has('password'))
                                                <span class="error">Mutqagreq chisht parol</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field">
                                                <input type="password" name="password_confirmation" placeholder="Կրկնել ծածկագիրը">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field">
                                                <input type="password" placeholder="Վերբեռնել անձնագիրը">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field {{ $errors->has('passport') ? 'invalid' : '' }}">
                                                <input type="file" name="passport" placeholder="">
                                            </div>

                                            @if($errors->has('passport'))
                                                <span class="error">{{ implode(' ', $errors->get('passport')) }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-15 text-left">
                                            <div class="checkbox">
                                                <input type="checkbox" placeholder="Կրկնել ծածկագիրը">
                                                <p class="font-xs">Ես հաստատում եմ որ հանդիսանում եմ ծխախոտային արտադրանքի
                                                    սպառող, ՀՀ քաղաքացի և որ լրացելէ իմ 18 տարին</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-20">
                                            <button type="submit" class="btn btn-dark">ԳՐԱՆՑՎԵԼ</button>
                                        </div>
                                    </div>
                                </form>
                            @endif

                            <form action="/login" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row mt-20">
                                    <div class="col-md-12">
                                        <p class="font-normal">Արդեն գրանցվա՞ծ ես</p>
                                    </div>
                                    <div class="col-md-5 mt-15 mr-0">
                                        <div class="field">
                                            <input type="email" name="email" placeholder="Էլ.փոստի հասցե">
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-15">
                                        <div class="field">
                                            <input type="password" name="password" placeholder="Ծածկագիր">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <button type="submit" class="btn btn-dark">ՄՈՒՏՔ ԳՈՐԾԵԼ</button>
                                    </div>
                                </div>

                                @if($errors->has('email'))
                                    <span class="login-error">
                                        Նշված դաշտերով օգտատեր չի գտնվել
                                    </span>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
