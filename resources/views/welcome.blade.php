<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pride : DashBoard</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-none">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                    <h1 class="text-gray-400 font-semibold"> Pride Primary School</h1>
                </div>
                <div>
                    <form class="d-flex" id="searchForm">
                        <input class="form-control me-2" id="searchInput" type="search" placeholder="Search by students name" aria-label="Search">
                    </form>
                    <div id="searchResults" style="border: 1px solid #ddd;border-radius: 4px;padding: 3px;max-height: 200px;overflow-y: auto;"></div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-3">
                            <div class="p-4 sm:rounded-lg shadow">
                                <div class="flex items-center bg-success sm:rounded-lg p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Students at Nil</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm mb-2">
                                        This statistics shows all students in different classes that have finished all the school fees, <strong>Year 2024, Term two</strong>
                                    </div>
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($allClasses as $allClasse)
                                                <tr>
                                                    <td class="text-sm"><strong>{{ $allClasse->name }}</strong></td>
                                                    <td>
                                                        <?php
                                                            $studentIdCount = 0;
                                                            foreach ($allClassStudents as $studentClass) {
                                                                if ($studentClass->id === $allClasse->id && $studentClass->pStatus === 'Nil') { // Check for class ID and zero balance
                                                                $studentIdCount++;
                                                                }
                                                            }
                                                            echo $studentIdCount . ' pupils';
                                                        ?>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="/Class/{{ $allClasse->id }}" class="fs-9"><u><i>more details</i></u></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="p-4 sm:rounded-lg shadow">
                                <div class="flex items-center bg-warning sm:rounded-lg p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Students with Balances</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm mb-2">
                                        This statistics shows all students in different classes that still have school fees balance,<strong>Year 2024, Term two</strong>
                                    </div>
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($allClasses as $allClasse)
                                                <tr>
                                                    <td class="text-sm"><strong>{{ $allClasse->name }}</strong></td>
                                                    <td>
                                                        <?php
                                                            $studentIdCount = 0;
                                                            foreach ($allClassStudents as $studentClass) {
                                                                if ($studentClass->id === $allClasse->id && $studentClass->pStatus === 'Pending') { // Check for class ID and zero balance
                                                                $studentIdCount++;
                                                                }
                                                            }
                                                            echo $studentIdCount . ' pupils';
                                                        ?>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="/Class/{{ $allClasse->id }}" class="fs-9"><u><i>more details</i></u></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="p-4 sm:rounded-lg shadow">
                                <div class="flex items-center bg-danger sm:rounded-lg p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Fees Defaulters</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm mb-2">
                                        This statistics shows all students in different classes that have not yet payed any single coin<strong>Year 2024, Term two</strong>
                                    </div>
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($allClasses as $allClasse)
                                                <tr>
                                                    <td class="text-sm"><strong>{{ $allClasse->name }}</strong></td>
                                                    <td>
                                                        <?php
                                                            $studentIdCount = 0;
                                                            foreach ($allClassStudents as $studentClass) {
                                                                if ($studentClass->id === $allClasse->id &&  ($studentClass->pStatus=='pending' || $studentClass->pStatus === 'Nil')) { // Check for class ID and zero balance
                                                                $studentIdCount++;
                                                                }
                                                            }
                                                            echo $studentIdCount . ' pupils';
                                                        ?>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="/Class/{{ $allClasse->id }}" class="fs-9"><u><i>more details</i></u></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Others Statistics</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as 
                                    <a href="https://forge.laravel.com" class="underline">Forge</a>,
                                     <a href="https://vapor.laravel.com" class="underline">Vapor</a>, 
                                     <a href="https://nova.laravel.com" class="underline">Nova</a>, and
                                      <a href="https://envoyer.io" class="underline">Envoyer</a>
                                      <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-sm"><strong>Primary one:</strong></td>
                                                <td>34 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary two:</strong></td>
                                                <td>14 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary three:</strong></td>
                                                <td>34 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary four:</strong></td>
                                                <td>80 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary five:</strong></td>
                                                <td>56 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary six:</strong></td>
                                                <td>45 pupils</td>
                                            </tr>
                                            <tr>
                                                <td class="text-sm"><strong>Primary seven:</strong></td>
                                                <td>60 pupils</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary One</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 100 pupils in primary one</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">                                         
                                            @foreach ($allStudents as $student)
                                                @if ($student->class === 'Primary One')
                                                    @if ($student->statusFee)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->iteration }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--begin::Name=-->
                                                            <td>
                                                                <div class="">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$student->name}}</span>
                                                                </div>
                                                            </td>
                                                            <!--end::Name=-->
                                                            <!--begin::Date=-->                                                      
                                                            @if ($student->statusFee)
                                                                <td>
                                                                    @if ($student->statusFee->payment_status === 'Pending')
                                                                        <span class="text-warning">{{$student->statusFee->payment_status}}</span>
                                                                    @elseif ($student->statusFee->payment_status === 'Nil')
                                                                        <span class="text-success">{{$student->statusFee->payment_status}}</span>
                                                                    @else
                                                                        <span class="text-danger">No Payment</span>
                                                                    @endif
                                                                </td>
                                                            @else
                                                                <td><span class="text-danger">Not Paid</span></td>
                                                            @endif
                                                            <!--begin::Action=-->
                                                            <td class="text-end">
                                                                <a href="/Student/{{$student->id}}" class=" fs-9"><u><i>More details</i></u></a>
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr> 
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary Two</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 120 pupils in primary two</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            
                                            @foreach ($allStudents as $student)
                                                @if ($student->class === 'Primary Two')
                                                    @if ($student->statusFee)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->iteration }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--begin::Name=-->
                                                            <td>
                                                                <div class="">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$student->name}}</span>
                                                                </div>
                                                            </td>
                                                            <!--end::Name=-->
                                                            <!--begin::Date=-->                                                      
                                                            @if ($student->statusFee)
                                                                <td>
                                                                    @if ($student->statusFee->payment_status === 'Pending')
                                                                        <span class="text-warning">{{$student->statusFee->payment_status}}</span>
                                                                    @elseif ($student->statusFee->payment_status === 'Nil')
                                                                        <span class="text-success">{{$student->statusFee->payment_status}}</span>
                                                                    @else
                                                                        <span class="text-danger">No Payment</span>
                                                                    @endif
                                                                </td>
                                                            @else
                                                                <td><span class="text-danger">Not Paid</span></td>
                                                            @endif
                                                            <!--begin::Action=-->
                                                            <td class="text-end">
                                                                <a href="/Student/{{$student->id}}" class=" fs-9"><u><i>More details</i></u></a>
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr> 
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary Three</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 500 pupils in primary three</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach($allStudents as $allStudent)
                                                @if ($allStudent->class === 'Primary Three')
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->index}}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--begin::Name=-->
                                                        <td>
                                                            <div class="">
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Date=-->
                                                        <td><span class="text-success">Nil</span></td>
                                                        <!--end::Date=-->
                                                        <!--begin::Action=-->
                                                        <td class="text-end">
                                                            <a href="/Student/{{$allStudent->id}}" class=" fs-9"><u><i>more details</i></u></a>
                                                        </td>
                                                        <!--end::Action=-->
                                                    </tr>  
                                                 @endif
                                            @endforeach                         
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary Four</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 220 pupils in primary four</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="min-w-125px">Total</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach($allStudents as $allStudent)
                                                @if ($allStudent->class === 'Primary Four')
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->index}}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--begin::Name=-->
                                                        <td>
                                                            <div class="">
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Date=-->
                                                        <td><span class="text-success">Nil</span></td>
                                                        <!--end::Date=-->
                                                        <td>100,000</td>
                                                        <!--begin::Action=-->
                                                        <td class="text-end">
                                                            <a href="/Student/{{$allStudent->id}}" class=" fs-9"><u><i>more details</i></u></a>
                                                        </td>
                                                        <!--end::Action=-->
                                                    </tr>  
                                                 @endif
                                            @endforeach                         
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary Five</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 100 pupils in primary five</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="min-w-125px">Total</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach($allStudents as $allStudent)
                                                @if ($allStudent->class === 'Primary Five')
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->index}}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--begin::Name=-->
                                                        <td>
                                                            <div class="">
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Date=-->
                                                        <td><span class="text-success">Nil</span></td>
                                                        <!--end::Date=-->
                                                        <td>100,000</td>
                                                        <!--begin::Action=-->
                                                        <td class="text-end">
                                                            <a href="/Student/{{$allStudent->id}}" class=" fs-9"><u><i>more details</i></u></a>
                                                        </td>
                                                        <!--end::Action=-->
                                                    </tr>  
                                                 @endif
                                            @endforeach                         
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="col">
                        <!--begin::Col-->
                        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <!--begin::Timeline widget 3-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-center flex-column">
                                        <span class="card-label fw-bold text-dark">Primary Six</span>
                                    </h3>
                                    <span class="text-gray-400 fs-8">there over 300 pupils in primary six</span>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-7 scroll-y h-50px">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                                <th class="ps-4 min-w-125px rounded-start">N0</th>
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="min-w-125px">Total</th>
                                                <th class="text-end min-w-70px"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach($allStudents as $allStudent)
                                                @if ($allStudent->class === 'Primary Six')
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->index}}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--begin::Name=-->
                                                        <td>
                                                            <div class="">
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Date=-->
                                                        <td><span class="text-success">Nil</span></td>
                                                        <!--end::Date=-->
                                                        <td>100,000</td>
                                                        <!--begin::Action=-->
                                                        <td class="text-end">
                                                            <a href="/Student/{{$allStudent->id}}" class=" fs-9"><u><i>more details</i></u></a>
                                                        </td>
                                                        <!--end::Action=-->
                                                    </tr>  
                                                 @endif
                                            @endforeach                         
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <!--begin::Timeline widget 3-->
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-2">
                            <h3 class="card-title align-items-center flex-column">
                                <span class="card-label fw-bold text-dark">Primary Seven</span>
                            </h3>
                            <span class="text-gray-400 fs-8">there over 70 pupils in primary seven</span>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-7 scroll-y h-50px">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
                                        <th class="ps-4 min-w-125px rounded-start">N0</th>
                                        <th class="min-w-125px">Name</th>
                                        <th class="min-w-125px">Status</th>
                                        <th class="min-w-125px">Total</th>
                                        <th class="text-end min-w-70px"></th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($allStudents as $allStudent)
                                        @if ($allStudent->class === 'Primary Seven')
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $loop->index}}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--begin::Name=-->
                                                <td>
                                                    <div class="">
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                    </div>
                                                </td>
                                                <!--end::Name=-->
                                                <!--begin::Date=-->
                                                <td><span class="text-success">Nil</span></td>
                                                <!--end::Date=-->
                                                <td>100,000</td>
                                                <!--begin::Action=-->
                                                <td class="text-end">
                                                    <a href="/Student/{{$allStudent->id}}" class=" fs-9"><u><i>more details</i></u></a>
                                                </td>
                                                <!--end::Action=-->
                                            </tr>  
                                            @endif
                                    @endforeach                         
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Timeline widget 3-->
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                pride@gmail.com
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                pride@twitter.com
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Pride Primary School Version (V9.0.101)
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script>


            $(document).ready(function() {
                //start search Student
                $('#searchInput').keyup(function() {
                    const searchTerm = $(this).val().trim(); // Get search term and trim whitespace

                    // Only proceed if the search term is not empty
                    if (searchTerm) {
                    $.ajax({
                        url: '/search-students', // Replace with your server-side endpoint
                        dataType: 'json',
                        data: { q: searchTerm }, // Send search term as query parameter
                        success: function(data) {
                        $('#searchResults').html(''); // Clear previous results

                        // Build the table of results (refer to previous explanation)

                        if (data.length > 0) {
                            // Display results if data is found
                            const table = $('<table>');
                            table.addClass('table table-striped'); // Add Bootstrap classes for styling (optional)
                            const tableHeader = $('<thead><tr></tr></thead>');
                            tableHeader.append('<th>Name</th><th>Roll Number</th><th>Class</th><th>Year</th><th></th>');
                            table.append(tableHeader);

                            const tableBody = $('<tbody></tbody>');
                            $.each(data, function(index, student) {
                            const tableRow = $('<tr></tr>');

                            // Wrap student name in a link to details page
                            tableRow.append($('<td>').append($('<a>').text(student.name).attr('href', `/Student/${student.id}`)));

                            tableRow.append($('<td>').text(student.roll_number)); // Assuming "roll_number" is the property
                            tableRow.append($('<td>').text(student.class)); // Assuming "class" is the property
                            tableRow.append($('<td>').text(student.year)); // Assuming "year" is the property
                            tableRow.append($('<td>').append($('<a>').text('More details').attr('href', `/Student/${student.id}`)));

                            tableBody.append(tableRow);
                            });
                            table.append(tableBody);
                            $('#searchResults').append(table);
                        } else {
                            $('#searchResults').text('No results found.');
                        }
                        },
                        error: function(error) {
                        console.error(error);
                        }
                    });
                    } else {
                    // Clear search results if search term is empty
                    $('#searchResults').html('');
                    }
                });
                //End Search student
            });

        </script>

    </body>
</html>
