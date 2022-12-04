

<x-layout >
  {{-- Start of body --}}
  <div class="h-screen bg-zinc-900">
      <div class="md:flex">
          <div class="w-screen h-screen mt-40 ml-8 text-center md:h-2/3 md:w-1/2">
              <p class="text-4xl text-orange-600 font-bold md:text-7xl">いらっしゃいませ!</p>
              <p class="text-white text-xl mb-4">Welcome to my website!</p>
              <p class="text-white text-lg text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt modi officiis, est earum quos voluptates ratione? Quos esse, hic voluptatum placeat ratione aut a suscipit, architecto reiciendis quo nam doloribus eligendi sapiente. Magnam velit eius cumque eligendi ipsam, mollitia sequi repellat illo, consequuntur maiores totam, reprehenderit modi tenetur in perferendis.</p>
              {{-- <a class="w-40 text-xl text-orange-600 border-2 border-solid border-orange-600 " href="#">
                  <span>Learn more!</span>
              </a> --}}
              <button class="learn-more">
                  <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Learn More</span>
              </button>
          </div>
          <div class="w-screen h-screen mt-8  md:h-2/3 md:w-1/2"">
              <img src="{{asset('/images/logo2.png')}}" alt="">
          </div>
      </div>    
  </div>
  {{--End of body  --}}
</x-layout>