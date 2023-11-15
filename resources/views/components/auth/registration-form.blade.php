<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <a
        href="./"
        class="text-center text-6xl font-bold text-gray-900"
        ><h1>Barta</h1></a
      >
      <h1
        class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
        Create a new account
      </h1>
      {{print_r($errors->all())}}
      @if ($errors->any())
        @foreach ($errors->all() as $error)
        <ul>
          <li>{{$error}}</li>
        </ul>
            
        @endforeach
        
      @endif
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form
      
        class="space-y-6"
        action="/user-registration"
        novalidate
        method="POST">
        @csrf
        <!-- First Name -->
        <div>
          <label
            for="first_name"
            class="block text-sm font-medium leading-6 text-gray-900"
            >First Name</label
          >
          <div class="mt-2">
            <input
              id="first_name"
              name="first_name"
              type="text"
              value="{{old('first_name')}}"
              autocomplete="first_name"
              placeholder="Muhammad"
              required
              class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm 
              ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 
              focus:ring-inset focus:ring-black 
              sm:text-sm sm:leading-6 @error('first_name')
                border-red-900
              @enderror" />
              @error('first_name')
              <p>{{$error}}</p>
                
              @enderror
          </div>
        </div>

        <!-- First Name -->
        <div>
          <label
            for="last_name"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Last Name</label
          >
          <div class="mt-2">
            <input
              id="last_name"
              name="last_name"
              type="text"
              autocomplete="last_name"
              placeholder="Alp Arslan"
              required
              class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
              @error('last_name')
              <p>{{$error}}</p>
                
              @enderror
            </div>
        </div>
        <!--username -->
        <div>
          <label
            for="username"
            class="block text-sm font-medium leading-6 text-gray-900"
            >username</label
          >
          <div class="mt-2">
            <input
              id="username"
              name="username"
              type="text"
              autocomplete="username"
              placeholder="@username"
              required
              class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
              @error('username')
              <p>{{$error}}</p>
                
              @enderror
            </div>
        </div>

        <!-- Email -->
        <div>
          <label
            for="email"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Email address</label
          >
          <div class="mt-2">
            <input
              id="email"
              name="email"
              type="email"
              autocomplete="email"
              placeholder="alp.arslan@mail.com"
              required
              class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
              @error('email')
              <p>{{$error}}</p>
                
              @enderror
            </div>
        </div>

        <!-- Password -->
        <div>
          <label
            for="password"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Password</label
          >
          <div class="mt-2">
            <input
              id="password"
              name="password"
              type="password"
              autocomplete="current-password"
              placeholder="••••••••"
              required
              class="block w-full rounded-md border-0 p-2 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
              @error('password')
              <p>{{$error}}</p>
                
              @enderror
         
            </div>
        </div>

        <div>
          <button
            type="submit"
            class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
            Register
          </button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Already a member?
        <a
          href="./LoginPage"
          class="font-semibold leading-6 text-black hover:text-black"
          >Sign In</a
        >
      </p>
    </div>
  </div>