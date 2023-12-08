
<div class="flex justify-center mt-12">
    <div class="flex flex-col max-w-md bg-gray-200 rounded p-2 border border-black">
    <form action="{{url('PostCreate')}}" method="POST" enctype="multipart/form-data"
    class="w-full"
    >
     @csrf
    <div class="flex items-start space-x-3">
        <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="{{asset('img/profile.jpeg')}}" alt="">
        </div>
        <div>
            <textarea class="block w-full border-none outline-none" name="content" id="" cols="45" rows="2" placeholder="whats going on">
       
            </textarea>
        </div>
    </div>

    
    <div class="flex justify-between mt-12">
        <div class="flex space-x-2">
       <!-- Upload Picture Button -->
       <div>
        <input
          type="file"
          name="picture"
          id="picture"
          class="hidden" />

        <label
          for="picture"
          class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">
          <span class="sr-only">Picture</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
        </label>
      </div>
      <!-- /Upload Picture Button -->

      <!-- GIF Button -->
      <button
        type="button"
        class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">
        <span class="sr-only">GIF</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
        </svg>
      </button>
      <!-- /GIF Button -->

      <!-- Emoji Button -->
      <button
        type="button"
        class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">
        <span class="sr-only">Emoji</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
        </svg>
      </button>
      <!-- /Emoji Button -->

        </div>
        <div>
           
            <button
            type="submit"
            class="-m-2 mb-0 flex gap-2 text-xs items-center rounded-full px-4 py-2 font-semibold bg-gray-800 hover:bg-black text-white">
            Post
          </button>
          <!-- /Post Button -->

        </div>

    </div>




   </form>
    
    </div>
    
    
</div>

@if ($ifPost)
@foreach ($posts as $post )
  
<div class="flex justify-center mt-12">
  <div class="flex flex-col max-w-md bg-gray-200 rounded p-2 border border-black">
    <form action="{{url("/PostEditPage/{$post->id}")}} method="GET" enctype="multipart/form-data"
    class="w-full"
    >
     @csrf
  
  <div class="flex items-start space-x-3">
      <div class="flex-shrink-0">
          <img class="h-6 w-6 rounded-full" src="{{asset('/public/post/'.$post->image)}}" alt="">
      </div>
      <div>
          <textarea class="block w-full border-none outline-none" name="content" id="" cols="45" rows="2" placeholder="whats going on">
            {{$post->content}} 
          </textarea>
      </div>
  </div>

  
  <div class="flex justify-between  mt-12">
      <div class="flex  space-x-2">
     <!-- Upload Picture Button -->
     <div class="flex ">
      <input
        type="file"
        name="picture"
        id="picture"
        class="hidden" />

      <label
        for="picture"
        class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">
        <span class="sr-only">Picture</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
      </label>
    </div>
    <!-- /Upload Picture Button -->

    <!-- GIF Button -->
    <button
      type="button"
      class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">
      <span class="sr-only">GIF</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
      </svg>
    </button>
    <!-- /GIF Button -->

    <!-- Emoji Button -->
    <button
      type="button"
      class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">
      <span class="sr-only">Emoji</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
      </svg>
    </button>
    <!-- /Emoji Button -->
    {{-- comment form--}}
    <a href="{{url("/CommentPage/{$post->id}/".session('user_id'))}}">
    
      <button data-modal-target="static-modal" data-modal-toggle="static-modal" class=" show-modal block text-gray   font-medium rounded-lg text-sm px-5 py-1 text-center " type="button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
        </svg>
        
      </button>
    
    </a>
  
    
      </div>

      
      
      <div class="flex space-x-2">
        @if (session('user_id')===$post->user_id)
        <a type="button" class="block" href="{{url("/PostDelete/{$post->id}/{$post->user_id}")}}">delete</a>
      
        <button
        type="submit"
        class="-m-2 mb-0 flex gap-2 text-xs items-center rounded-full px-4 py-2 font-semibold bg-gray-400 hover:bg-black text-white">
        edit
      </button>
        @endif
        
        
        <!-- /Post Button -->

      </div>

  </div>


</form>


  
  </div>
  
  
</div>




@endforeach
  
@endif

