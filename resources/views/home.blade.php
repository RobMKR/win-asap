@extends('layouts.app')

@section('content')

    <!-- Register Block -->
    <section class="container pt-30">
        <div class="row mb-20">
            <div class="col-md-12 text-center">
                <h6>Միջոցառմանը  կարող են մասնակցել միայն <strong class="red">18</strong> տարին լրացած, ծխախոտային արտադրանքի սպառող հանդիսացող ՀՀ քաղաքացիները:</h6>
                </h6>
            </div>
        </div>
    </section>

    <!-- Start Content Section -->

    <section class="content">
        <div class="container-lg whiteBg">
            <div class="row">

                <div class="col-md-8 mt-35">
                    <div class="flex">
                        <div class="col-md-6">
                            <img src="assets/images/Range-Rover-Evoque.png" width="100%" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="countDown text-center">
                                <h2>Մնացել է</h2>
                                <div class="elements">
                                    <div class="days">85</div>
                                    <div class="hours">22</div>
                                    <div class="minutes">33</div>
                                    <div class="seconds">54</div>
                                </div>
                                <div class="title">
                                    <span>Օր</span>
                                    <span>Ժամ</span>
                                    <span>Րոպե</span>
                                    <span>Վայրկյան</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-15" style="margin: 25px auto;padding: 0 60px;">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3 class="mb-30">ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐՆ ԵՆ</h3>
                                </div>
                            </div>
                            <div class="row box">

                                <div class="col-md-12 col-sm-12 mt-15 mb-15">
                                    <table class="tableStyle">
                                        <thead>
                                        <tr class="uppercase">
                                            <th colspan="3">ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ <br> ԿԵՆՏՐՈՆՆԵՐ</th>
                                            <th colspan="2">Աշխատանքային գրաֆիկ <br> 31.10.2017 - 17.12.2017</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td width="20%">#</td>
                                            <td>Հասցե</td>
                                            <td>Վաճառակետի անվանում</td>
                                            <td>Աշխ. Օրեր</td>
                                            <td>Աշխ. Ժամեր</td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Երևան, Արշակունյաց, 34/3</td>
                                            <td>Երևան Մոլ</td>
                                            <td>Երկուշաբթի-Կիրակի</td>
                                            <td>12:00-22:00</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Երևան, Գայի 8/2</td>
                                            <td>Ծիրան </td>
                                            <td>Երեքշաբթի-Կիրակի</td>
                                            <td>14:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Երևան, Հրաչյա Քոչար 2ա</td>
                                            <td>Ծիրան </td>
                                            <td>Երեքշաբթի-Կիրակի</td>
                                            <td>14:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Երևան, Սեբաստիա 141/5 </td>
                                            <td>Վեգա </td>
                                            <td>Երեքշաբթի-Կիրակի</td>
                                            <td>14:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Գյումրի, Տիգրան Մեծ 3/4</td>
                                            <td>Բասեն</td>
                                            <td>Հինգշաբթի-Կիրակի</td>
                                            <td>16:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Վանաձոր, Տիգրան Մեծ 73-1/1-1</td>
                                            <td>Գրին Պլազա</td>
                                            <td>Հինգշաբթի-Կիրակի</td>
                                            <td>16:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>Կապան, Շահումյան 1</td>
                                            <td>Պրեստիժ</td>
                                            <td>Հինգշաբթի-Կիրակի</td>
                                            <td>16:00-20:00</td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>Վայք, Ջերմուկի խճուղի 13/38</td>
                                            <td>Մենդավ</td>
                                            <td>Երեքշաբթի</td>
                                            <td>11:00-11:30</td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>Վայք, Ջերմուկի խճուղի 6</td>
                                            <td></td>
                                            <td>Երեքշաբթի</td>
                                            <td>11:30-12:00</td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>Եղեգնաձոր, Շահումյան 20/1</td>
                                            <td>Բոնուս</td>
                                            <td>Երեքշաբթի</td>
                                            <td>12:30-13:30</td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>Արարատ, Աղբյուր Սերոբ 5/2</td>
                                            <td>Արարատ</td>
                                            <td>Երեքշաբթի</td>
                                            <td>15:10-16:10</td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>Վեդի, Արարատյան 45</td>
                                            <td></td>
                                            <td>Երեքշաբթի</td>
                                            <td>16:30-17:30</td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>Արտաշատ, Օգոստոսի 23/75ա</td>
                                            <td>Կարեն</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>11:00-12:30</td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td>Մասիս, Հրապարակին կից</td>
                                            <td>Մասիս Սիթի</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>13:00-14:30</td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td>Արմավիր, Երևանյան 20</td>
                                            <td>Անի</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>15:30-17:30</td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>Էջմիածին, Վ. Կոստանյան 3/2</td>
                                            <td></td>
                                            <td>Հինգշաբթի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td>Աշտարակ, Տիգրան Մեծ 37</td>
                                            <td></td>
                                            <td>Հինգշաբթի</td>
                                            <td>13:30-15:00</td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>Նոր Հաճն, Չարենց 9/1</td>
                                            <td>Տերմինալ 1</td>
                                            <td>Հինգշաբթի</td>
                                            <td>15:40-17:10</td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>Վարդենիս, Վ. Համբարձումյան 14</td>
                                            <td>Վան</td>
                                            <td>Ուրբաթ</td>
                                            <td>11:00-12:30</td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td>Մարտունի, Մյասնիկյան 53ա</td>
                                            <td></td>
                                            <td>Ուրբաթ</td>
                                            <td>13:20-14:50</td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>Գավառ, Բոշնաղյան 2</td>
                                            <td></td>
                                            <td>Շաբաթ</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td>Սևան, Նաիրյան 116/8</td>
                                            <td>Զիմ</td>
                                            <td>Շաբաթ</td>
                                            <td>13:40-15:40</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>Հրազդան, Միկրոշրջան Գ-1</td>
                                            <td>Դուետ</td>
                                            <td>Կիրակի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>24</td>
                                            <td>Չարենցավան, Խանջյան 12</td>
                                            <td>Սաֆարի</td>
                                            <td>Կիրակի</td>
                                            <td>13:30-15:30</td>
                                        </tr>

                                        <tr>
                                            <td>25</td>
                                            <td>Աբովյան, Հատիսի 1/30/42</td>
                                            <td>Աբովյան Սիթի</td>
                                            <td>Կիրակի</td>
                                            <td>14:00-16:00</td>
                                        </tr>

                                        <tr>
                                            <td>26</td>
                                            <td>Սիսիան, Իսրաելյան 39</td>
                                            <td>Ռիկո</td>
                                            <td>Երեքշաբթի</td>
                                            <td>12:00-14:00</td>
                                        </tr>

                                        <tr>
                                            <td>27</td>
                                            <td>Գորիս, Սյունիքի 136</td>
                                            <td>Շանե</td>
                                            <td>Երեքշաբթի</td>
                                            <td>15:00-17:00</td>
                                        </tr>

                                        <tr>
                                            <td>28</td>
                                            <td>Ագարակ, Գարեգին Նժդեհ 6/5</td>
                                            <td>Մարիշոկ</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>12:00-14:00</td>
                                        </tr>

                                        <tr>
                                            <td>29</td>
                                            <td>Մեղրի, Ադելյան 2</td>
                                            <td></td>
                                            <td>Չորեքշաբթի</td>
                                            <td>14:30-16:30</td>
                                        </tr>

                                        <tr>
                                            <td>30</td>
                                            <td>Քաջարան, Աբովյան</td>
                                            <td>Թոսունյան</td>
                                            <td>Կիրակի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>31</td>
                                            <td>Ալավերդի, Թումանյան 6</td>
                                            <td>Էյ ընդ Ջի (A&G)</td>
                                            <td>Երեքշաբթի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>32</td>
                                            <td>Տաշիր, Կիրով 193</td>
                                            <td>Վիվա</td>
                                            <td>Երեքշաբթի</td>
                                            <td>14:00-16:00</td>
                                        </tr>

                                        <tr>
                                            <td>33</td>
                                            <td>Ստեփանավան, Բաղրամյան 73ա</td>
                                            <td>Էլիտ</td>
                                            <td>Երեքշաբթի</td>
                                            <td>16:30-18:30</td>
                                        </tr>

                                        <tr>
                                            <td>34</td>
                                            <td>Իջևան, Երևանյան 8ա</td>
                                            <td>Բազե</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>14:30-16:30</td>
                                        </tr>

                                        <tr>
                                            <td>35</td>
                                            <td>Դիլիջան, 26 Կոմիսարների 41/5</td>
                                            <td>Հովք</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>17:00-19:00</td>
                                        </tr>

                                        <tr>
                                            <td>36</td>
                                            <td>Նոյեմբերյան, Նոյեմբերի 29 42/7</td>
                                            <td>Բիո</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>37</td>
                                            <td>Սպիտակ, Ալեք Մանուկյան 5</td>
                                            <td>Դանիելյան</td>
                                            <td>Կիրակի</td>
                                            <td>11:00-13:00</td>
                                        </tr>

                                        <tr>
                                            <td>38</td>
                                            <td>Թալին, Սպանդարյան 27</td>
                                            <td>Արարատ</td>
                                            <td>Երեքշաբթի</td>
                                            <td>12:00-14:00</td>
                                        </tr>

                                        <tr>
                                            <td>39</td>
                                            <td>Մարալիկ, Դերժինսկի խաչմ.</td>
                                            <td>Էկոնոմ</td>
                                            <td>Երեքշաբթի</td>
                                            <td>15:00-17:00</td>
                                        </tr>

                                        <tr>
                                            <td>40</td>
                                            <td>Ապարան, Բաղրամյան 49</td>
                                            <td>Գնթունիք</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>12:00-14:00</td>
                                        </tr>

                                        <tr>
                                            <td>41</td>
                                            <td>Արթիկ, Աբովյան 1/2</td>
                                            <td>Ջին</td>
                                            <td>Չորեքշաբթի</td>
                                            <td>15:00-18:00</td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-12 text-center mt-15 mb-30">
                                    <h3>Միջոցառմանը կարող եք մասնակցել մինչև 17․12․2017 թ․-ը ներառյալ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <h4>ՄԱՍՆԿԱՑՈՒԹՅԱՆ ԿԱՐԳԻՆ ԵՎ ՄԻՋՈՑԱՌՄԱՆ ԿԱՆՈՆՆԵՐԻՆ ԾԱՆՈԹԱՆԱԼՈՒ ՀԱՄԱՐ ԱՆՀՐԱԺԵՇՏ Է ԳՐԱՆՑՎԵԼ</h4>

                    <div class="row mt-30">
                        @if (! Session::has('message'))
                            <div class="col-md-12">
                                <p class="font-normal">Գրանցվելու համար անհրաժեշտ է լրացնել հետևալ դաշտերը</p>
                            </div>
                        @endif
                        <div class="col-md-12 mt-15">

                            @if (Session::has('message'))
                                <div class="after-register">
                                    {{ Session::get('message') }}
                                </div>
                            @else
                                <form  action="/register" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">
                                        <div class="col-md-5 mt-15 mr-0">
                                            <div class="field {{ $errors->has('name') ? 'invalid' : '' }}">
                                                <input type="text" name="name" placeholder="Անուն (լատինատառ)">
                                            </div>

                                            @if($errors->has('name'))
                                                <span class="error">Պարտադիր Լրացման Դաշտ</span>
                                            @endif
                                        </div>
                                        <div class="col-md-7 mt-15">
                                            <div class="field  {{ $errors->has('name') ? 'invalid' : '' }}">
                                                <input type="text" name="surname" placeholder="Ազգանուն (լատինատառ)">
                                            </div>
                                            @if($errors->has('surname'))
                                                <span class="error">Պարտադիր Լրացման Դաշտ</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-15">
                                            <div class="field {{ $errors->has('phone') ? 'invalid' : '' }}">
                                                <input type="text" name="phone" placeholder="Հեռախոսահամար +374 xx xxxxxx">
                                            </div>

                                            @if($errors->has('phone'))
                                                <span class="error">Պարտադիր Լրացման Դաշտ</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 mt-15">
                                            <div class="field {{ $errors->has('email') ? 'invalid' : '' }}">
                                                <input type="email" name="email" placeholder="Էլ. փոստի հասցե">
                                            </div>

                                            @if($errors->has('email'))
                                                <span class="error">Պարտադիր Լրացման Դաշտ</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field {{ $errors->has('password') ? 'invalid' : '' }}">
                                                <input type="password"  name="password" placeholder="Ծածկագիր">
                                            </div>

                                            @if($errors->has('password'))
                                                <span class="error">Ծածկագրերը չեն համապատասխանում</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field">
                                                <input type="password" name="password_confirmation" placeholder="Կրկնել ծածկագիրը">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <div class="field">
                                                <input type="password" placeholder="Վերբեռնել անձնագիրը" disabled="disabled" style="border: none">
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
                                            <div class="checkbox flex">
                                                <input type="checkbox" name="confirm" id="confirm_check">
                                                <label class="font-xs" for="confirm_check">Ես հաստատում եմ որ հանդիսանում եմ ծխախոտային արտադրանքի սպառող, ՀՀ քաղաքացի և որ լրացելէ իմ 18 տարին</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-20">
                                            <button class="btn btn-dark">ԳՐԱՆՑՎԵԼ</button>
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

                                @if (Session::has('active'))
                                    <div class="after-register">
                                        {{ Session::get('active') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    {{--<section class="content-1">--}}
        {{--<div class="container-lg whiteBg">--}}
            {{----}}
        {{--</div>--}}
    {{--</section>--}}

    <!-- End Content Section -->

    <div class="callAction">
        <span>ԹԵԺ ԳԻԾ 060 665050</span>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js?v=2"></script>
@endsection
