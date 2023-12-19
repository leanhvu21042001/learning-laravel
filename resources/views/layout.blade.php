<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  @yield('title')
</head>

<body class="container mx-auto font-serif">
  <div class="bg-white text-black font-serif">
    <div id="nav">
      <nav class="flex flex-row justify-between h-16 items-center shadow-md">
        <div class="px-5 text-2xl">
          <a href="{{ route('posts.index') }}"> My Blog </a>
        </div>
        <div class="hidden lg:flex content-between space-x-10 px-10 text-lg">
          <a href="{{ route('posts.create') }}" class="hover:underline hover:underline-offset-1">New Post</a>
          <a href="https://github.com/ericnanhu" class="hover:underline hover:underline-offset-1">GitHub</a>
        </div>
      </nav>
    </div>

    @yield('content')

    <footer class="bg-gray-700 text-white">
      <div
        class="flex justify-center items-center sm:justify-between flex-wrap lg:max-w-screen-2xl mx-auto px-4 sm:px-8 py-10">
        {{-- <p class="font-serif text-center mb-3 sm:mb-0">
            Copyright ©
            <a href="https://www.ericsdevblog.com/" class="hover:underline"
              >Eric Hu</a
            >
          </p> --}}

        {{-- <div class="flex justify-center space-x-4">. . .</div> --}}
        
      </div>
    </footer>
  </div>
</body>

</html>
