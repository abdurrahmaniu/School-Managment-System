<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---Link Tailwind With HTML5--->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Class</title>
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
          <h1 class="text-3xl font-bold text-indigo-600">Class</h1>
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
        <div class="flex space-x-4">
          <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
            <div>
              <span class="text-sm font-semibold text-gray-400">Total Users</span>
              <h1 class="text-2xl font-bold">{{$totalAccounts}}</h1>
            </div>
            <div>
              <img src="https://img.icons8.com/doodle/50/000000/group.png"/>
            </div>
          </div>
          <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
            <div>
              <span class="text-sm font-semibold text-gray-400">Total Students</span>
              <h1 class="text-2xl font-bold">{{$totalStudents}}</h1>
            </div>
            <div>
              <img src="https://img.icons8.com/doodle/48/000000/user.png"/>
            </div>
          </div>
          <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
            <div>
              <span class="text-sm font-semibold text-gray-400">Total Teachers</span>
              <h1 class="text-2xl font-bold">{{$totalTeachers}}</h1>
            </div>
            <div>
              <img src="https://img.icons8.com/external-konkapp-flat-konkapp/48/000000/external-teacher-back-to-school-konkapp-flat-konkapp.png"/>
            </div>
          </div>
          <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
            <div>
             <a href="addNewClass"><span class="text-sm font-semibold text-gray-400">Add New Class</span></a>
            </div>
            <div>
                <a href="addNewClass"><img src="https://img.icons8.com/material-outlined/24/000000/plus--v1.png"/></a>
            </div>
          </div>
        </div>
        <div class="flex mt-10 justify-center">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                      <th class="py-3 px-6 text-left">ID</th>
                      <th class="py-3 px-6 text-center">Class</th>
                      <th class="py-3 px-6 text-center">Group</th>
                      <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                  @foreach (\App\Models\Classes::all() as $classes)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                          {{$classes->id}}
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                              {{$classes->class}}
                            </div>
                        </td>
                     <td class="py-3 px-6 text-center">
                      {{$classes->group}}
                   </td> 
                   <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                          <form action="/class/{{$classes->id}}/class" method="GET"> 
                            @csrf
                            @method('PUT')
                              <button type="submit" name="updateBTN">
                                <img src="https://img.icons8.com/material-outlined/24/000000/pencil--v2.png"/>
                              </button>
                            </form>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                          <form action="/class/{{$classes->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                              <img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/>
                            </button>
                          </form>
                        </div> 
                    </div>
                    </td> 
                    </tr>
                     @endforeach 
                 </tbody>
            </table>
        </div>
        <div></div>
        <div></div>
      </div>
      <div></div>
      <div></div>
    </div>
  </div>
</body>
</html>
