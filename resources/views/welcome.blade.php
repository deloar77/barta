<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  
<nav class="m-4">
  <div class="m-4 p-4 mx-auto bg-gray-200">
    <div class="flex justify-between">

      <div class="flex space-x-4">

        <!-logo->
        <div>
          <a href="" class="flex items-center">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            <span>Barta</span>
          </a>
        </div>
     <!- primary nav->
      <div class=" hidden md:flex items-center space-x-2">
        <a href="" class="block text-gray-700">Features</a>
        <a href="" class="block text-gray-700">pricing</a>
      </div>
      </div>


      <!- secodary nav-->
      <div  class="hidden md:flex items-center space-x-4 ml-0" >
        <a href="" class="text-red-400 hover:text-red-900">Login</a>
        <a href="" class="text-red-400 hover:text-red-900">SignUp</a>
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

</body>
</html>
<script>
  const btn = document.querySelector('button.mobile-menu-button')
  const menu =document.querySelector('.mobile-menu')
  btn.addEventListener("click",()=>{
    menu.classList.toggle("hidden")
  })
</script>