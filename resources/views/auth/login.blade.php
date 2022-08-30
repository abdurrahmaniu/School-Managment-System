<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!---Link TAILWIND With HTML--->
	<script src="https://cdn.tailwindcss.com"></script>
	<!---Link CSS With HTML--->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3">
	<title>Login</title>
</head>
<body>
	<!---Login HTML Code START--->
	<div class="h-screen flex">
		<div class="flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center">
		  <div>
			<h1 class="text-white font-bold text-4xl font-sans">Welcome To</h1>
			<p class="text-white mt-1">School Managment System</p>
		  </div>
		</div>
		<div class="flex w-1/2 justify-center items-center bg-white">
		  <form class="bg-white" action="loginToTheDashboard" method="POST">
			@if (Session::has('fail'))
			<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
			  <strong class="font-bold">Sorry,</strong>
			  <span class="block sm:inline">{{Session::get('fail')}}</span>
			  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
			  </span>
			</div>
			@endif <br>
			@error('password')
			  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
				  <strong class="font-bold">Sorry,</strong>
				  <span class="block sm:inline">{{$message}}</span>
				  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
				  </span>
				</div>
			 @enderror <br>
			  @csrf
			<h1 class="text-gray-800 font-bold text-2xl mb-1">Welcome</h1>
			<p class="text-sm font-normal text-gray-600 mb-7">Please Login</p>
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
			  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
			  </svg>
			  <input class="pl-2 outline-none border-none" type="email" name="email" placeholder="Email Address" required/>
			</div>
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl">
			  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
			  </svg>
			  <input class="pl-2 outline-none border-none" type="password" name="password" id="" placeholder="Password" required/>
			</div>
			<button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
			<span class="text-sm ml-2 hover:text-blue-500 cursor-pointer"><a href="signup">Create an account !</a></span>
		  </form>
		</div>
	  </div>
	  <!---Login HTML Code END--->
</body>
</html>