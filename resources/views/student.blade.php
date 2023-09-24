<x-app-layout>

<x-app-layout>

{{-- <style>
  /* Compiled dark classes from Tailwind */
  .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
    border-color: rgba(55, 65, 81);
  }
  .dark .dark\:bg-gray-50 {
    background-color: rgba(249, 250, 251);
  }
  .dark .dark\:bg-gray-100 {
    background-color: rgba(243, 244, 246);
  }
  .dark .dark\:bg-gray-600 {
    background-color: rgba(75, 85, 99);
  }
  .dark .dark\:bg-gray-700 {
    background-color: rgba(55, 65, 81);
  }
  .dark .dark\:bg-gray-800 {
    background-color: rgba(31, 41, 55);
  }
  .dark .dark\:bg-gray-900 {
    background-color: rgba(17, 24, 39);
  }
  .dark .dark\:bg-red-700 {
    background-color: rgba(185, 28, 28);
  }
  .dark .dark\:bg-green-700 {
    background-color: rgba(4, 120, 87);
  }
  .dark .dark\:hover\:bg-gray-200:hover {
    background-color: rgba(229, 231, 235);
  }
  .dark .dark\:hover\:bg-gray-600:hover {
    background-color: rgba(75, 85, 99);
  }
  .dark .dark\:hover\:bg-gray-700:hover {
    background-color: rgba(55, 65, 81);
  }
  .dark .dark\:hover\:bg-gray-900:hover {
    background-color: rgba(17, 24, 39);
  }
  .dark .dark\:border-gray-100 {
    border-color: rgba(243, 244, 246);
  }
  .dark .dark\:border-gray-400 {
    border-color: rgba(156, 163, 175);
  }
  .dark .dark\:border-gray-500 {
    border-color: rgba(107, 114, 128);
  }
  .dark .dark\:border-gray-600 {
    border-color: rgba(75, 85, 99);
  }
  .dark .dark\:border-gray-700 {
    border-color: rgba(55, 65, 81);
  }
  .dark .dark\:border-gray-900 {
    border-color: rgba(17, 24, 39);
  }
  .dark .dark\:hover\:border-gray-800:hover {
    border-color: rgba(31, 41, 55);
  }
  .dark .dark\:text-white {
    color: rgba(255, 255, 255);
  }
  .dark .dark\:text-gray-50 {
    color: rgba(249, 250, 251);
  }
  .dark .dark\:text-gray-100 {
    color: rgba(243, 244, 246);
  }
  .dark .dark\:text-gray-200 {
    color: rgba(229, 231, 235);
  }
  .dark .dark\:text-gray-400 {
    color: rgba(156, 163, 175);
  }
  .dark .dark\:text-gray-500 {
    color: rgba(107, 114, 128);
  }
  .dark .dark\:text-gray-700 {
    color: rgba(55, 65, 81);
  }
  .dark .dark\:text-gray-800 {
    color: rgba(31, 41, 55);
  }
  .dark .dark\:text-red-100 {
    color: rgba(254, 226, 226);
  }
  .dark .dark\:text-green-100 {
    color: rgba(209, 250, 229);
  }
  .dark .dark\:text-blue-400 {
    color: rgba(96, 165, 250);
  }
  .dark .group:hover .dark\:group-hover\:text-gray-500 {
    color: rgba(107, 114, 128);
  }
  .dark .group:focus .dark\:group-focus\:text-gray-700 {
    color: rgba(55, 65, 81);
  }
  .dark .dark\:hover\:text-gray-100:hover {
    color: rgba(243, 244, 246);
  }
  .dark .dark\:hover\:text-blue-500:hover {
    color: rgba(59, 130, 246);
  }

  /* Custom style */
  .header-right {
      width: calc(100% - 3.5rem);
  }
  .sidebar:hover {
      width: 16rem;
  }
  @media only screen and (min-width: 768px) {
      .header-right {
          width: calc(100% - 16rem);
      }        
  }
</style> --}}
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-100 text-black dark:text-white">

        <!-- Sidebar -->
        <div class="fixed top-20 left-2 w-14 hover:w-64 md:w-64 bg-blue-500  h-full text-white transition-all duration-300 border-none z-10 sidebar rounded-r-lg">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-md font-dark tracking-wide text-blue-500 uppercase">Welcome {{ Auth::user()->name }}</div>
                    </div>
                    </li>
                    <br>
                    <li>
                    <a href="{{ route('student') }}" class="relative flex flex-row items-center h-11 focus:outline-none dark:hover:bg-gray-600 text-black-600 hover:text-black-800 border-l-4 border-transparent hover:border-black-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('studentcalendar') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Calendar</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('studentsubjects') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Subjects</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('studentsub') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Submissions</span>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                    </a>
                    </li>


    
                    
                </ul>

                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
                </div>
            </div>
            <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
          <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Breeze Admin</title>
<link rel="stylesheet" href="user/assets/vendors/mdi/css/materialdesignicons.min.css" />
<link rel="stylesheet" href="user/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
<link rel="stylesheet" href="user/assets/vendors/css/vendor.bundle.base.css" />
<link rel="stylesheet" href="user/assets/vendors/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="user/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
<link rel="stylesheet" href="user/assets/css/style.css" />
<link rel="shortcut icon" href="user/assets/images/favicon.png" />

            


        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
    
          <!-- Social Traffic -->
          {{-- <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-blue-600  w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Upcomig Events</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                  <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Event</th>
                      <th class="px-4 bg-gray-100 bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Date</th>
                      <th class="px-4 bg-gray-100 bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Amouunt of tickets left</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Extravaganza</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">9th Sept</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">70%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                              <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Tantalize</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1st Dec</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">40%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                              <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Halloween Night</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">20th Oct</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">45%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                              <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Christmas Night</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">20th Dec</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> --}}
          
          <!-- ./Social Traffic -->
          {{-- <div class="row">

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Doughnut chart</h4>
                  <canvas id="doughnutChart" style="height: 250px;"></canvas>
                </div>
                </div>
                </div>
              </div>

              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height: 230px;"></canvas>
                  </div>
                </div>
              </div>

              

            </div>
          </div> --}}


          <!-- Recent Activities -->
          <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent Activities</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                  <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                </div>
              </div>
              <div class="block w-full">
                <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  Today
                </div>
                <ul class="my-1">
                  <li class="flex px-4">
                    <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                      <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36"><path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path></svg>
                    </div>
                    <div class="flex-grow flex items-center border-b border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-2">
                      <div class="flex-grow flex justify-between items-center">
                        <div class="self-center">
                          <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Webinar</a> between <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Dr.Rohantha</a> and Ruth Mohotti.
                        </div>
                        <div class="flex-shrink-0 ml-2">
                          <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="flex px-4">
                    <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                      <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                    </div>
                    <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                      <div class="flex-grow flex justify-between items-center">
                        <div class="self-center">
                          The post <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Post Name</a> was removed by <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Mithurshan</a>
                        </div>
                        <div class="flex-shrink-0 ml-2">
                          <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  Yesterday
                </div>
                <ul class="my-1">
                  <li class="flex px-4">
                    <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                      <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36"><path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path></svg>
                    </div>
                    <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                      <div class="flex-grow flex justify-between items-center">
                        <div class="self-center">
                          <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">240+</a> users have subscribed to <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Newsletter #1</a>
                        </div>
                        <div class="flex-shrink-0 ml-2">
                          <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          
          </div>
          <!-- ./Recent Activities -->

          <!-- Task Summaries -->
        
        <!-- ./Task Summaries -->

        <div class="row">
          <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body px-0 overflow-auto">
                <h4 class="card-title pl-4">Submissions History</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="bg-light">
                      <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> Science Monthly Test </p>
                            </div>
                          </div>
                        </td>
                        <td>Science</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>77%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> IT Presenteation </p>
                            </div>
                          </div>
                        </td>
                        <td>IT</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>80%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> Health Science Research Report </p>
                            </div>
                          </div>
                        </td>
                        <td>Health Science & Studies</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>95%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> History 2021 MCQ Paper </p>
                            </div>
                          </div>
                        </td>
                        <td>History</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>90%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> Mathematics 2022 Past Paper </p>
                            </div>
                          </div>
                        </td>
                        <td>Mathematics</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>97%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="table-user-name ml-3">
                              <p class="mb-0 font-weight-medium"> Mathematics 2021 Past Paper </p>
                            </div>
                          </div>
                        </td>
                        <td>Science</td>
                        <td>
                          <div class="badge badge-inverse-success"> Completed </div>
                        </td>
                        <td>95%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <a class="text-black mt-3 d-block pl-4" href="#">
                  <span class="font-weight-medium h6">View all history</span>
                  <i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="card-title font-weight-medium"> Time Table </div>
                <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                  <div class="pt-2">
                    <h5 class="mb-0">Mathematics</h5>
                    <p class="mb-0 text-muted">Today</p>
                    <h6 class="mb-0">8.00 - 8.45am</h6>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                  <div class="pt-2">
                    <h5 class="mb-0">History</h5>
                    <p class="mb-0 text-muted">Today</p>
                    <h6 class="mb-0">8.45 - 9.30am</h6>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                  <div class="pt-2">
                    <h5 class="mb-0">Science</h5>
                    <p class="mb-0 text-muted">Today</p>
                    <h6 class="mb-0">9.30 - 10.15am</h6>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                  <div class="pt-2">
                    <h5 class="mb-0">English</h5>
                    <p class="mb-0 text-muted">Today</p>
                    <h6 class="mb-0">10.45 - 11.30am</h6>
                  </div>
                </div>
                <a class="text-black mt-3 d-block font-weight-medium h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- TODO Activities -->
        <div class="row">

          <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-black">To do Task List</h4>
                <p class="text-muted">Created by student001</p>
                <div class="list-wrapper">
                  <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> submit math quiz </label>
                        <span class="list-time">4 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> complete science presentation </label>
                        <span class="list-time">6 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> comlete history homework </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> sent email to classteacher </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="add-items d-flex flex-wrap flex-sm-nowrap">
                  <input type="text" class="form-control todo-list-input flex-grow" placeholder="Add task name" />
                  <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-black">Development Task List</h4>
                <p class="text-muted">Created by student001</p>
                <div class="list-wrapper">
                  <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> it presenteation </label>
                        <span class="list-time">4 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> check emails </label>
                        <span class="list-time">6 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> download monthly report </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" /> complete science mini test </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="add-items d-flex flex-wrap flex-sm-nowrap">
                  <input type="text" class="form-control todo-list-input flex-grow" placeholder="Add task name" />
                  <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-black">Finished Task List</h4>
                <p class="text-muted">Created by student001</p>
                <div class="list-wrapper">
                  <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" checked/> submit math quiz </label>
                        <span class="list-time">4 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" checked/> complete science presentation </label>
                        <span class="list-time">6 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" checked/> complete history homework </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" checked/> sent email to classteacher </label>
                        <span class="list-time">8 Hours Ago</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="add-items d-flex flex-wrap flex-sm-nowrap">
                  <input type="text" class="form-control todo-list-input flex-grow" placeholder="Add task name" />
                  <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ./TODO Activities -->

        <div class="row">
           <div class="col-xl-4 col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-black">Attendence</h4>
                <p class="text-muted pb-2">Jan 01 2019 - Dec 31 2019</p>
                <canvas id="surveyBar"></canvas>
                <div class="row border-bottom pb-3 pt-4 align-items-center mx-0">
                  <div class="col-sm-9 pl-0">
                    <div class="d-flex">
                      <div class="pl-2">
                        <h6 class="m-0">Weekly Attendance</h6>
                        <p class="m-0">Good</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 pl-0 pl-sm-3">
                    <div class="badge badge-inverse-success mt-3 mt-sm-0"> 85% </div>
                  </div>
                </div>
                <div class="row border-bottom pb-3 pt-4 align-items-center mx-0">
                  <div class="col-sm-9 pl-0">
                    <div class="d-flex">
                      <div class="pl-2">
                        <h6 class="m-0">Monthly Attendance</h6>
                        <p class="m-0">Good</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 pl-0 pl-sm-3">
                    <div class="badge badge-inverse-success mt-3 mt-sm-0"> 90% </div>
                  </div>
                </div>
                <div class="row py-3 align-items-center mx-0">
                  <div class="col-sm-9 pl-0">
                    <div class="d-flex">
                      <div class="pl-2">
                        <h6 class="m-0">Yearly Attendance</h6>
                        <p class="m-0">Good</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 pl-0 pl-sm-3">
                    <div class="badge badge-inverse-success mt-3 mt-sm-0"> 80% </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-xl-4 col-md-6 grid-margin stretch-card">
            <!--datepicker-->
            <div class="card">
              <div class="card-body">
                <div id="inline-datepicker" class="datepicker table-responsive"></div>
              </div>
            </div>
            <!--datepicker ends-->
          </div>
          <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="card-title font-weight-medium"> Upcomming Events </div>
                <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                  <img class="survey-img mb-lg-3" src="user/assets/images/dashboard/extravaganza.jpeg "style="height: 70px; width: 90px;" alt="" />
                  <div class="pt-2">
                    <h5 class="mb-0">Extravanganza</h5>
                    <p class="mb-0 text-muted">Havelock park</p>
                    <h5 class="mb-0">19th November</h5>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                  <img class="survey-img mb-lg-3" src="user/assets/images/dashboard/diwali.jpeg" style="height: 70px; width: 90px;" alt="" />
                  <div class="pt-2">
                    <h5 class="mb-0">Diwali Festival</h5>
                    <p class="mb-0 text-muted">School Main Hall</p>
                    <h5 class="mb-0">22nd september</h5>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                  <img class="survey-img mb-lg-3" src="user/assets/images/dashboard/acosticnight.jpeg" style="height: 70px; width: 90px;" alt="" />
                  <div class="pt-2">
                    <h5 class="mb-0">Acoustic Night</h5>
                    <p class="mb-0 text-muted">The Thabrobane</p>
                    <h5 class="mb-0">13th october</h5>
                  </div>
                </div>
                <div class="d-flex flex-wrap border-bottom py-2 justify-content-between">
                  <img class="survey-img mb-lg-3" src="user/assets/images/dashboard/halloween.jpeg" style="height: 70px; width: 90px;" alt="" />
                  <div class="pt-2">
                    <h5 class="mb-0">Halloween Night</h5>
                    <p class="mb-0 text-muted">School Main Hall</p>
                    <h5 class="mb-0">13th November</h5>
                  </div>
                </div>
                <a class="text-black mt-3 d-block font-weight-medium h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>


    </div>
 </div>

 
 




 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
   <script src="user/assets/vendors/js/vendor.bundle.base.js"></script>
   <!-- endinject -->
   <!-- Plugin js for this page -->
   <script src="user/assets/vendors/chart.js/Chart.min.js"></script>
   <script src="user/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.resize.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.categories.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.stack.js"></script>
   <script src="user/assets/vendors/flot/jquery.flot.pie.js"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="user/assets/js/off-canvas.js"></script>
   <script src="user/assets/js/hoverable-collapse.js"></script>
   <script src="user/assets/js/misc.js"></script>
   <!-- endinject -->
   <!-- Custom js for this page -->
   <script src="user/assets/js/dashboard.js"></script>
   <script src="../../user//assets/js/chart.js"></script>
   <!-- End custom js for this page -->

</x-app-layout>

</x-app-layout>
