
@props(['title'])
<div id="sub_header" class="flex flex-col items-center justify-between h-3/5">


    <img id="bg-image" src="{{secure_asset('./images/header.jpg')}}"  alt="">

    <x-nav />




    <div id="Subheader_thingy" class="flex items-center justify-between absolute p-4 z-10 border-2 border-slate-500 tablet:w-2/3 phone:w-4/5 phone:mt-10">
        <a href="{{route('home.index')}}">
            <h1 class="text-6xl laptop:text-5xl tablet:text-4xl phone:text-3xl text-slate-200">
            <b class="font-light">Floorssy</b>  <i class="text-amber-400 ">.</i>
            </h1>
        </a>
         <img src="{{secure_asset('images/icons/right.png')}}" class="mx-5 phone:mx-2" width="40px" alt="">
        <h2 class="text-amber-400 tablet:text-xl phone:text-sm text-2xl">
            {{$title}}
        </h2>
    </div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>