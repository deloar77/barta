<nav class="m-4">
    <div class="m-4 p-4 mx-auto bg-gray-200">
      <div class="flex justify-between ml-32">
  
        <div class="flex space-x-4">
  
          <!-logo->
          <div>
            <a href="{{url('/homefeed')}}" class="flex items-center">
              <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              <span class="font-bold">Barta</span>
            </a>
          </div>
       <!- primary nav->
        <div class=" hidden md:flex items-center space-x-2 space-y-1">
          <a href="" class="block text-gray-700 hover:text-gray-900">Discover</a>
          <a href="{{url("/dashboard")}}"  class="block text-gray-700 hover:text-gray-900">dashboard</a>
          <form method="GET" action="{{url('/search')}}">
            @csrf
            <input type="search" name="query" placeholder="search user">
            <button class="w-5" type="submit">search</button>
          </form>
          
          
        </div>
        </div>
  
  
        <!- secodary nav-->
        <div  class="hidden md:flex items-center space-x-4 ml-0 mr-32" >
          <a href="" class="block text-gray-700 hover:text-gray-900">Create Post</a>
          <a class="block text-gray-700 hover:text-gray-900" href="">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
              
          </a>
          <a class="block text-gray-700 hover:text-gray-900" href="">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
              </svg>
              
          </a>
          <a class="block text-gray-700 hover:text-gray-900" href="{{url('./dashboard')}}"  class="block text-gray-700 hover:text-gray-900">
            <img class="h-6 w-6" src="{{asset('img/profile.jpeg')}}" alt="">
          </a>
          <a href="{{route('logout')}}">Logout</a>
        </div>
        <!- mobile button->
        <div class="md:hidden flex items-center" >
          <button class="mobile-menu-button">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg>
            
          </button>
        </div>
        
      </div>
      
    </div>
  
     <!- mobile menue goes here->
     <div class="mobile-menu hidden" >
            <a href="" class="block py-2 px-2 text-sm text-blue-400 hover:text-blue-900 font-medium">Feature</a>
            <a href="" class="block py-2 px-2 text-sm text-blue-400 hover:text-blue-900">Pricing</a>
            <a href="" class="block py-2 px-2 text-sm text-blue-400 hover:text-blue-900">Login</a>
            <a href="" class="block py-2 px-2 text-sm text-blue-400 hover:text-blue-900">SignUp</a>
     </div>
  </nav>
     
  <script>
    const btn = document.querySelector('button.mobile-menu-button')
    const menu =document.querySelector('.mobile-menu')
    btn.addEventListener("click",()=>{
      menu.classList.toggle("hidden")
    })
  </script>