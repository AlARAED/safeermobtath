
    <div class="col-12 col-md-10 m-auto">
        <ul class="nav nav-pills nav_costing mb-3 m-auto w_max_content" id="pills-tab" role="tablist">
            @foreach($Categories as $key=>$Category)
            <li class="nav-item">
                <a class="nav-link @if($key==0) active @endif"
                   id="eduction-tab{{$Category->category_id}}" data-toggle="pill" href="#eduction{{$Category->category_id}}" role="tab"
                   aria-controls="eduction{{$Category->category_id}}" aria-selected="@if($key==0)true @else false @endif">
                    @if(app()->getLocale()=='ar'){{\App\ModelS\Category::find($Category->category_id)->name_ar}} @else {{\App\ModelS\Category::find($Category->category_id)->name_en}} @endif</a>
            </li>
            @endforeach
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" id="food-tab" data-toggle="pill" href="#food" role="tab" aria-controls="food" aria-selected="false">{{__('Food')}}</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" id="clothes-tab" data-toggle="pill" href="#clothes" role="tab" aria-controls="clothes" aria-selected="false">{{__('Clothes')}}</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" id="housing-tab" data-toggle="pill" href="#housing" role="tab" aria-controls="housing" aria-selected="false">{{__('Housing')}}</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" id="moving-tab" data-toggle="pill" href="#moving" role="tab" aria-controls="moving" aria-selected="false">{{__('Moving')}}</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" id="work-tab" data-toggle="pill" href="#work" role="tab" aria-controls="work" aria-selected="false">{{__('Work & Money')}}</a>--}}
            {{--</li>--}}
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach($theems as $key=>$theem)
            <div class="tab-pane fade @if($key==0) show active @endif" id="eduction{{$theem->category_id}}" role="tabpanel" aria-labelledby="eduction-tab{{$theem->category_id}}">
                <div class="univ_sc">
                    <h2 class="mb-4">@if(app()->getLocale()=='en'){{\App\ModelS\Category::find($theem->category_id)->name_en}}
                        in {{\App\City::find($theem->city_id)->name_en}} @else {{\App\ModelS\Category::find($theem->category_id)->name_ar}}
                        في  {{\App\City::find($theem->city_id)->name_ar}}@endif</h2>
                    <img src="{{asset('uploads/'.$theem->image)}}" alt="" class="mb-4" style="width: 1380px;height: 707px;">
                    <h3>@if(app()->getLocale()=='en')
                            {!! $theem->descreption_en !!}
                        @else
                            {!! $theem->descreption_ar !!}
                        @endif
                    </h3>
                </div>
            </div>
           @endforeach
                {{--<div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">--}}
                {{--<div class="univ_sc">--}}
                    {{--<h2 class="mb-4">{{__('Food in Australia')}}</h2>--}}
                    {{--<img src="{{asset('assets/images/food.PNG')}}" alt="" class="mb-4">--}}
                    {{--<h3>{{__("You should expect the average family of four to spend around € 500 per month on food and drinks. Daily meal in the business district of Australia - AU $ 23.00 Dinner for two in an Italian restaurant with wine and dessert - AUD $ 105 Lamb and beef, which are obtained and processed locally, are the usual meats available in the market, while fish is cheap. Fruits and vegetables are very easy to get. Australian wines are also very affordable. With cattle farms spread across the country, milk and beef are the cheapest commodities. Aside from exporting milk and beef (which makes its world famous steak), Australia is also known for its exotic products such as kangaroo meat and King Island cheese. New South Wales offers rock oysters and milk-fed lamb, Victoria offers Meredith and Gippsland beef, South Australia is known for its scallops and tuna, while Queensland produces fruits such as bow mango and papaya. Other exotic food products are crocodile, shark, ostrich, and emu meat. All locally sourced is affordable. On the other hand, imported products such as cereals, biscuits, beer and fish cost more.")}}--}}
                    {{--</h3>--}}
                    {{--<a href="#" class="mt-5"><h3>{{__('For inquiries click here')}}</h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane fade" id="clothes" role="tabpanel" aria-labelledby="clothes-tab">--}}
                {{--<div class="univ_sc">--}}
                    {{--<h2 class="mb-4">{{__('Clothes in Australia')}}</h2>--}}
                    {{--<img src="{{asset('assets/images/clothes.PNG')}}" alt="" class="mb-4">--}}
                    {{--<h3>{{__("As in any other country, locally made clothing and items are much cheaper than imported items. Second-hand shops and bazaars offer a variety of local accessories from beaded necklaces and bracelets to wooden earrings and anklets that have original roots. Victoria remains the center of fashion in Australia. Clothes and accessories designed by local designers are very expensive, as they are exported.")}}--}}
                    {{--</h3>--}}
                    {{--<a href="#" class="mt-5"><h3>{{__('For inquiries click here')}}</h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane fade" id="housing" role="tabpanel" aria-labelledby="housing-tab">--}}
                {{--<div class="univ_sc">--}}
                    {{--<h2 class="mb-4">{{__('Housing in Australia')}}</h2>--}}
                    {{--<img src="{{asset('assets/images/housing.PNG')}}" alt="" class="mb-4">--}}
                    {{--<h3>{{__("There are many housing and property options available in Australia. You can choose from single-room apartments, to small courtyard houses, to huge areas or city-center condominiums. Land is in excess compared to the population of any given state. Housing in big cities will cost more compared to county living and farmland. On average, a family of four spends around 400 euros per month on rent or mortgage. Utility costs are reasonable, and some states provide free clean water to residents. A typical household will receive a bill of around 100 euros per month for electricity and water.")}}--}}
                    {{--</h3>--}}
                    {{--<a href="#" class="mt-5"><h3>{{__('For inquiries click here')}}</h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane fade" id="moving" role="tabpanel" aria-labelledby="moving-tab">--}}
                {{--<div class="univ_sc">--}}
                    {{--<h2 class="mb-4">{{__('Moving in Australia')}}</h2>--}}
                    {{--<img src="{{asset('assets/images/moving.PNG')}}" alt="" class="mb-4">--}}
                    {{--<h3>{{__("What are the main means of transportation in Australia? Australia has many advanced public transportation. It offers four main options: train, bus, ferry, and tram. In fact, there are no rivers in every city or port so you will not find ferries available everywhere. Likewise, you will not find a slow tram in every city. How much does it cost to ride on public transport in Australia? Public transportation costs in most cities depend on the distance traveled. In Sydney, for example, a single fare for one person starts from $ 2.10 to $ 4.50. In most cases, you will find that the phrases are more expensive. The Car: Car-min.jpg As an international student, it is unlikely that you will be able to purchase a car in Australia, although most Australian residents prefer owning private cars. Therefore, Australia is one of the countries in the world with the highest private car ownership rate. In 2018, it was found that Australia had 730 cars for every 1,000 citizens. So if you plan to stay in Australia after graduation, make sure you keep a private car in mind and within your budget. Private cars may not be the best option for the daily commute for students. But it is definitely an excellent option for traveling and exploring Australia during school holidays. If you have an international driver's license, you can rent a car for a reasonable price. And because of the enormous size of Australia and with the availability of a sophisticated highway network, do not miss the opportunity to travel with your friends to visit rural areas and small cities. But also bear in mind the very large distance between Australian cities. For example, it takes more than 15 hours to travel from Sydney to Adelaide by motorway. While traveling from Sydney to Melbourne by car takes a long journey of 10 hours as well.")}}--}}
                    {{--</h3>--}}
                    {{--<a href="#" class="mt-5"><h3>{{__('For inquiries click here')}}</h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">--}}
                {{--<div class="univ_sc">--}}
                    {{--<h2 class="mb-4">{{__('Work & Money in Australia')}}</h2>--}}
                    {{--<img src="{{asset('assets/images/work.PNG')}}" alt="" class="mb-4">--}}
                    {{--<h3>{{__("The General Skilled Migration (GSM) program is the only way for job seekers in Australia. This program is also known as the Australian skilled worker. Applicants must pass the Australian grading system in order to be eligible for a work visa in Australia. In the following we explain. For you the Australian work visa categories: Independent Skills Visa (Class 189): The Skills 189 visa is for professional workers who are not supported by an employer, state, or family member. If the person succeeds in obtaining 65 marks from the scale of scores, he is eligible to obtain this mark")}}--}}
                    {{--</h3>--}}
                    {{--<a href="#" class="mt-5"><h3>{{__('For inquiries click here')}}</h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>



    </div>
