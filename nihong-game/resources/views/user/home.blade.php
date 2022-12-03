
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">

    {{-- CDN for tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                          sm: '360px',
                          md: '768px',
                          lg: '976px',
                          xl: '1440px',
                        },
                extend: {
                    colors: {
                    primary: 'hsla(13, 100%, 48%)', // #ffc300
                    primaryLight: 'hsl(46, 100%, 80%)', 	// #ffe799
                    primaryDark: 'hsl(46, 100%, 45%)', //	#e6b000
                    secondary: 'hsl(219, 46%, 24%)',  // #213559
                    secondaryLight:  'hsl(218, 31%, 31%)', // #374968
                            }
                        },
                    },
                 };
      </script>
    

    <title>Welcome</title>
</head>
<body>

<div class="relative bg-zinc-900">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="#">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto sm:h-12" src="{{asset('/images/logo.png')}}" alt="">
        </a>
      </div>
      <div class="-my-2 -mr-2 md:hidden">
        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/bars-3 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    <div class="hidden space-x-10 md:flex text-orange-600 ">
        <a class="font-japFont whitespace-nowrap text-base font-medium " href="">Home</a>
        <a class="whitespace-nowrap text-base font-medium " href="">Vocabs</a>
        <a class="whitespace-nowrap text-base font-medium " href="">Activities</a>
        <a class="whitespace-nowrap text-base font-medium " href="">User</a>
    </div>
      <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
        <a href="#" class="whitespace-nowrap text-base font-medium text-orange-600">Sign in</a>
        <a href="#" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
      </div>
    </div>
  </div>
</div>
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
            <img src="{{asset('/images/logo.png')}}" alt="">
        </div>
    </div>
    
    
</div>


</body>
</html>