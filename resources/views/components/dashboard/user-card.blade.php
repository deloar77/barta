<div class="flex justify-center mt-12 ">
    <div class="bg-gray-100 max-w-md flex flex-col justify-center items-center p-2 rounded border border-black">
        <img class="block h-32 w-32 rounded-full" src="{{$user->profile->image?asset('/storage/profile/'.$user->profile->image):asset('img/profile.jpeg')}}" alt="">
        <h1>{{$user->fname}}</h1>
        <p>ethics</p>
       
        <p>{{$user->id}}</p>
        {{-- {{$user->profile->image}} --}}
       
    
        <div class="flex mb-6 mt-6 space-x-2">
            <div>
                <span  class="block font-bold">number of posts</span>
                <span  class="block">post</span>
            </div>
            <div>
                <span  class="block font-bold">number of friends</span>
                <span  class="block">friends</span>
            </div>
            <div>
                <span class="block font-bold">number of followers</span>
                <span  class="block">followers</span>
            </div>
        </div>
         <div class="flex">
            
                <svg class="h-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                  </svg>
                 <a href="{{url('ProfileEditPage')}}"> <span>edit profile</span></a>
                
                  
            
         </div>
    
    </div>
</div>
