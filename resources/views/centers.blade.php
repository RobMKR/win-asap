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


    <section class="content">
        <div class="container-md">
            <div class="row">
                <div class="col-md-12 text-center mt-25">
                    <h3 class="mb-30">ԱԶԱՏՈՒԹՅԱՆ ՈՒՂԻ ՄԻՋՈՑԱՌՄԱՆ ՆՎԵՐՆԵՐԻ ՍՏԱՑՄԱՆ ԿԵՆՏՐՈՆՆԵՐՆ ԵՆ</h3>
                </div>
                <div class="col-md-12">
                    <div class="overflow-x">
                        <div class="row box">
                            <div class="col-lg-12 col-sm-12 mt-15 mb-15">
                                <div class="overflow-x">
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
