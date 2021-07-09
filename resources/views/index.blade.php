@extends('layouts.base')

@section('main-content')

  <section class="h-screen flex justify-center sm:p p-2" >
    <div class="absolute top-0 left-0 h-full w-full " style="background-image:url('img/bg.jpg');background-size:cover;opacity:0.3"></div>
    <div class="relative max-w-sm sm:max-w-md mx-auto bg-white rounded-lg shadow-md py-5 px-2 sm:px-6 ">
      <div class="flex justify-center">
	<img class="h-8 mr-1" alt="" src="img/ci_logo_alpha.png"/>
	<div class="div">
	  <p class="font-bold text-primary-500 uppercase tracking-wider" style="font-size:10px">Charicha</p>
	  <p class="font-bold text-primary-700 tracking-widest uppercase" style="font-size:10px">Institute</p>	  
	</div>
      </div>

      <img class="h-44 mx-auto" alt="" src="img/ci_pc.svg"/>

      <h1 class="text-2xl sm:text-3xl font-bold text-yellow-500 text-center uppercase">Under Construction</h1>
      <p class="text-yellow-400 text-center">Our website is in under construction</p>

      <div class="flex p-2 justify-between mt-10 mb-20">
	<div class="w-16 sm:w-20 p-1 sm:p-2 bg-primary-700 text-center rounded-md shadow-sm">
	  <p class="text-2xl text-center text-white" id="dayTimer"> 10 </p>
	  <p class="text-white text-center text-xs"> Days </p>
	</div>
	<div class="w-16 sm:w-20 p-1 sm:p-2 bg-primary-700 text-center rounded-md shadow-sm">
	  <p class="text-2xl text-center text-white" id="hourTimer"> 17 </p>
	  <p class="text-white text-center text-xs"> Hours </p>
	</div>
	<div class="w-16 sm:w-20 p-1 sm:p-2 bg-primary-700 text-center rounded-md shadow-sm">
	  <p class="text-2xl text-center text-white" id="minuteTimer"> 45 </p>
	  <p class="text-white text-center text-xs"> Minutes </p>
	</div>
	<div class="w-16 sm:w-20 p-1 sm:p-2 bg-primary-700 text-center rounded-md shadow-sm">
	  <p class="text-2xl text-center text-white" id="secondTimer"> 23 </p>
	  <p class="text-white text-center text-xs"> Seconds </p>
	</div>
      </div>
      
      @if(Session::has('status'))
	<div class="p-2">
	  <div class="rounded-lg border border-green-500 w-full text-sm text-green-500 p-2"> Thank you! You'll be notified when the site gets live.</div>
	</div>	
      @endif

      <form action="{{ route('addSub') }}" method="POST" class="md:flex p-2 justify-center">
	@csrf
	<input class="appearance-none bg-transparent rounded-lg border border-primary-500 w-full text-gray-700 mr-3 p-2 leading-tight focus:outline-none"
	       name="email" type="text" value="" placeholder="mymail@gmail.com"/>
	<button class="md:flex-shrink-0 w-full md:w-auto my-2 p-2 md:my-0 rounded-lg bg-primary-700 hover:bg-primary-500 active:bg-primary-900 text-sm text-white"
		id="notifyButton">Notify Me</button>
      </form>

      <hr>
      <div class="p-4 text-center">
	<p class="text-xs font-light text-gray-400">
	  &copy; Copyright 2021 | Charicha Institute
	</p>
      </div>
    </div>
  </section>

@endsection
