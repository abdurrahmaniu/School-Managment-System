<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---Link Tailwind With HTML5--->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Settings</title>
</head>
<body>
<div class="min-h-screen flex">
    <div class="py-12 px-10 w-1/4">
      <div class="flex space-2 items-center border-b-2 pb-4">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <div class="ml-3">
          <h1 class="text-3xl font-bold text-indigo-600">STUDENTS</h1>
          <p class="text-center text-sm text-indigo-600 mt-1 font-serif">DASHBOARD</p>
        </div>
      </div>
      <div class="flex items-center space-x-4 mt-6 p-2 bg-indigo-600 rounded-md">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" />
          </svg>
        </div>
        <div>
          <p class="text-lg text-white font-semibold">Dashboard</p>
        </div>
      </div>
      <div class="mt-8">
        <ul class="space-y-10">
          <li>
            <a href="MainDashboard" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-student-female-profession-vitaliy-gorbachev-flat-vitaly-gorbachev-1.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"/>
              Students</a
            >
          </li>
          <li>
            <a href="teachers" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                <img src="https://img.icons8.com/external-icongeek26-flat-icongeek26/64/000000/external-teacher-education-icongeek26-flat-icongeek26.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"/>
              Teachers</a
            >
          </li>
          <li>
            <a href="subject" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                <img src="https://img.icons8.com/fluency/48/000000/books.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"/>
              Subjects</a
            >
          </li>
          <li>
            <a href="class" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                <img src="https://img.icons8.com/external-flat-02-chattapat-/64/000000/external-class-back-to-school-flat-02-chattapat-.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"/>
              Class</a
            >
          </li>
          <li>
            <a href="settings" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                <img src="https://img.icons8.com/color/48/000000/settings.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" /> 
              Settings</a
            >
          </li>
        </ul>
      </div>
      <div class="flex mt-20 space-x-4 items-center">
        <div>
            <img src="https://img.icons8.com/external-kmg-design-flat-kmg-design/32/000000/external-log-out-user-interface-kmg-design-flat-kmg-design.png" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"/>
        </div>
        <a href="logout" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
      </div>
    </div>
    <div class="bg-indigo-50 flex-grow py-12 px-10">
      <div class="flex justify-between">
        <div>
          <h4 class="text-sm font-bold text-indigo-600">Hi @if (Session::has('loginName'))
            {{Session::get('loginName')}},
        @endif</h4>
          <h1 class="text-4xl font-bold text-indigo-900 mt-">Welcome to School Managment System!</h1>
        </div>
        <div>
          <div class="flex items-center border rounded-lg bg-white w-max py-2 px-4 space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input class="outline-none" type="text" placeholder="Search" />
          </div>
        </div>
      </div>
      <div>
    <div class="min-h-screen pt-2 font-mono my-16">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Account Setting</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" action="/settings/{{$account->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Full Name</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' name="fullName" value="{{$account->fullName}}" required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Username</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' name="username" value="{{$account->username}}" required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Email</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='email' name="email" value="{{$account->email}}" required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>password</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='password' name="password" value="{{$account->password}}" placeholder="Enter Your Password...." required>
                        </div>
                            <div class="flex justify-end">
                                <button class="appearance-none bg-indigo-600 text-white px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
