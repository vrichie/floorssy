<nav class="w-4/5 phone:w-11/12 my-20 relative text-slate-100 font-light bg-neutral-900/50 h-20 flex flex-row items-center">
    <div class="basis-1/5 ml-4  phone:basis-3/5" >
        <a href="{{route('home.index')}}">

        <b class="text-2xl">
              Floorssy          
        </b>
        <i class="text-amber-400 text-4xl">.</i>       
        </a>

    </div>

    <div class="basis-3/5 text-slate-100 " id="links">
        <ul class="flex w-full justify-evenly">
            <a href="{{route('home.about')}}">
                <li>
                    About us
                </li>
            </a>

            <a href="{{route('home.gallery')}}">
                <li>
                    Gallery
                </li>
            </a>

            <a href="{{route('home.pricing')}}">
                <li>
                    Pricing
                </li>
            </a>

            <a href="{{route('home.contacts')}}">
                <li>
                    Contacts
                </li>
            </a>
        </ul>
    </div>

    <div class="basis-1/5 phone:basis-2/5" >

        <ul class="flex w-full justify-evenly">
            <a href="">
                <li>
                    <img src="{{ asset('images/icons/twitter.png') }}" width="20px" height="20px" alt="">
                </li>
            </a>

            <a href="">
                <li>
                    <img src="{{ asset('images/icons/fb.png') }}" width="20px" height="20px" alt="">
                </li>
            </a>

            <a href="">
                <li>
                    <img src="{{ asset('images/icons/pinterest.png') }}" width="20px" height="20px" alt="">
                </li>
            </a>

            <a href="">
                <li>
                    <img src="{{ asset('images/icons/ig.png') }}" width="20px" height="20px" alt="">
                </li>
            </a>
        </ul>
    </div>




    <div id="menu" class="absolute bg-neutral-900/70 w-full top-full h-14 z-50 flex flex-col items-center justify-evenly">

        <ul class="flex w-full justify-evenly  items-center ">
            <a href="{{route('home.about')}}">
                <li>
                    About us
                </li>
            </a>

            <a href="{{route('home.gallery')}}">
                <li>
                    Gallery
                </li>
            </a>

            <a href="{{route('home.pricing')}}">
                <li>
                    Pricing
                </li>
            </a>

            <a href="{{route('home.contacts')}}">
                <li>
                    Contacts
                </li>
            </a>
        </ul>

    </div> 



        <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</nav>

