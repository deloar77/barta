
    

    <!-- Main modal -->
    <div id="static-modal"  tabindex="-1" aria-hidden="true" class=" modal  overflow-y-auto overflow-x-hidden   z-50 justify-center items-center w-full  max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                
                <!-- Modal body -->
               <form method="POST" action="{{url("/CreateComment/{$user_id}/{$post_id}")}}">
                @csrf
                <div class="p-4 md:p-5 space-y-4">
                   {{$user_id}}
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your comment</label>
                    <textarea name="comment" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your comment here..."></textarea>
                      {{$post_id}}
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="static-modal" type="button" class="close-modal text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">cancel</button>
                        <button data-modal-hide="static-modal" type="submit" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">submit</button>
                    </div>
               </form>
            </div>
        </div>
      </div>

      {{-- comments details--}}
      
      <div class="flex justify-center">
        
  
        <div class="p-10  bg-gray-200 text-gray-700 mt-2">
       @if ($isComment)
       @foreach ($comments as $comment )
       @if ($comment->post_id==$post_id)
       <div class="relative w-[370px] overflow-hidden">
        <input type="checkbox"
        class="absolute top-0  inset-x-0
        h-12 w-full cursor-pointer
        opacity-0 z-10
        peer
         "
        >
        <div class="
        bg-blue-200
        h-12 w-full
        flex items-center pl-5 font-semibold
        ">
         <h3>
          comment
        </h3>
        </div>
        <!--arrow icon -->
        <div class="
          absolute top-3 right-3
          transition-transform duration-500
          rotate-0 peer-checked:rotate-180
         ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
          
        </div>
    
        <!--content -->
        <div class="
        bg-white overflow-hidden 
        transition-all duration-500
        max-h-0 peer-checked:max-h-40
        ">
        <div class="p-4">
        <p>
          {{$comment->content}}
        </p>
        </div>
    
        </div>
    
      </div>
      
       
  
       @endif
         
       @endforeach
         
       @endif
          
        
        </div>
        
        
        </div>

  
<script>
    const modal = document.querySelector('.modal')
    const showModal = document.querySelector('.show-modal')
    const closeModal = document.querySelector('.close-modal')
    showModal.addEventListener('click',function(){
      modal.classList.remove('hidden')
    })
    closeModal.addEventListener('click',function(){
      modal.classList.add('hidden')
    })
  </script>


  