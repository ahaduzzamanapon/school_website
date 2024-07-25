{{-- <div class="owl-carousel owl-theme">
    @foreach ($directors as $director)
        <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between item"
            style="border-radius: 5px;
            border: 0.5px solid var(--blue-1, #0C1167);
            background: var(--white, #FFF);
            height: 400px">
            <img style="height: 230px;" src="{{ $director['image_url'] }}" alt="Shoes" class="p-2 rounded-xl" />
            <h2 class="text-[16px] font-semibold">{{ $director['name'] }}</h2>
            <p class="w-full text-center">{{ $director['designation'] }}</p>
            <div class="flex justify-center w-full py-3">
                <a href="{{ route('directors.id', ['id' => $director['id']]) }}"
                    style="border-radius: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; width: 100px; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                    <span>আরো</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.7501 10.0001C1.7501 9.8343 1.81595 9.67533 1.93316 9.55812C2.05037 9.44091 2.20934 9.37506 2.3751 9.37506H17.1164L13.1826 5.44256C13.1245 5.38445 13.0784 5.31546 13.0469 5.23954C13.0155 5.16361 12.9993 5.08224 12.9993 5.00006C12.9993 4.91788 13.0155 4.8365 13.0469 4.76058C13.0784 4.68465 13.1245 4.61567 13.1826 4.55756C13.2407 4.49945 13.3097 4.45335 13.3856 4.4219C13.4615 4.39045 13.5429 4.37427 13.6251 4.37427C13.7073 4.37427 13.7887 4.39045 13.8646 4.4219C13.9405 4.45335 14.0095 4.49945 14.0676 4.55756L19.0676 9.55756C19.1258 9.61561 19.172 9.68458 19.2035 9.76052C19.235 9.83645 19.2512 9.91785 19.2512 10.0001C19.2512 10.0823 19.235 10.1637 19.2035 10.2396C19.172 10.3155 19.1258 10.3845 19.0676 10.4426L14.0676 15.4426C14.0095 15.5007 13.9405 15.5468 13.8646 15.5782C13.7887 15.6097 13.7073 15.6258 13.6251 15.6258C13.5429 15.6258 13.4615 15.6097 13.3856 15.5782C13.3097 15.5468 13.2407 15.5007 13.1826 15.4426C13.1245 15.3844 13.0784 15.3155 13.0469 15.2395C13.0155 15.1636 12.9993 15.0822 12.9993 15.0001C12.9993 14.9179 13.0155 14.8365 13.0469 14.7606C13.0784 14.6847 13.1245 14.6157 13.1826 14.5576L17.1164 10.6251H2.3751C2.20934 10.6251 2.05037 10.5592 1.93316 10.442C1.81595 10.3248 1.7501 10.1658 1.7501 10.0001Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    @endforeach

</div> --}}


<swiper-container class="mySwiper" init="false" id="directors">
    @foreach ($directors as $director)
        <swiper-slide>

            <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between "
                style="border-radius: 5px;
border: 0.5px solid var(--blue-1, #0C1167);
background: var(--white, #FFF);
height: 400px">
                <img style="height: 230px;" src="{{ $director['image_url'] }}" alt="Shoes" class="p-2 rounded-xl" />
                <h2 class="text-[16px] font-semibold">{{ $director['name'] }}</h2>
                <p class="w-full text-center">{{ $director['designation'] }}</p>
                {{-- <small>{{$director['lastDegree']}}</small> --}}
                <div class="flex justify-center w-full py-3">
                    <a href="{{ route('directors.id', ['id' => $director['id']]) }}"
                        style="border-radius: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; width: 100px; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                        <span>আরো</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.7501 10.0001C1.7501 9.8343 1.81595 9.67533 1.93316 9.55812C2.05037 9.44091 2.20934 9.37506 2.3751 9.37506H17.1164L13.1826 5.44256C13.1245 5.38445 13.0784 5.31546 13.0469 5.23954C13.0155 5.16361 12.9993 5.08224 12.9993 5.00006C12.9993 4.91788 13.0155 4.8365 13.0469 4.76058C13.0784 4.68465 13.1245 4.61567 13.1826 4.55756C13.2407 4.49945 13.3097 4.45335 13.3856 4.4219C13.4615 4.39045 13.5429 4.37427 13.6251 4.37427C13.7073 4.37427 13.7887 4.39045 13.8646 4.4219C13.9405 4.45335 14.0095 4.49945 14.0676 4.55756L19.0676 9.55756C19.1258 9.61561 19.172 9.68458 19.2035 9.76052C19.235 9.83645 19.2512 9.91785 19.2512 10.0001C19.2512 10.0823 19.235 10.1637 19.2035 10.2396C19.172 10.3155 19.1258 10.3845 19.0676 10.4426L14.0676 15.4426C14.0095 15.5007 13.9405 15.5468 13.8646 15.5782C13.7887 15.6097 13.7073 15.6258 13.6251 15.6258C13.5429 15.6258 13.4615 15.6097 13.3856 15.5782C13.3097 15.5468 13.2407 15.5007 13.1826 15.4426C13.1245 15.3844 13.0784 15.3155 13.0469 15.2395C13.0155 15.1636 12.9993 15.0822 12.9993 15.0001C12.9993 14.9179 13.0155 14.8365 13.0469 14.7606C13.0784 14.6847 13.1245 14.6157 13.1826 14.5576L17.1164 10.6251H2.3751C2.20934 10.6251 2.05037 10.5592 1.93316 10.442C1.81595 10.3248 1.7501 10.1658 1.7501 10.0001Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>

        </swiper-slide>
    @endforeach

    {{--     
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
    <swiper-slide>Slide 4</swiper-slide>
    <swiper-slide>Slide 5</swiper-slide>
    <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide> --}}
</swiper-container>
