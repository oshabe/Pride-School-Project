


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pride : {{$selectedClass->name}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
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
                <div>
                    <form class="d-flex" id="searchForm">
                        <input class="form-control me-2" id="searchInput" type="search" placeholder="Search by students name" aria-label="Search">
                    </form>
                    <div id="searchResults" style="border: 1px solid #ddd;border-radius: 4px;padding: 3px;max-height: 200px;overflow-y: auto;"></div>
                </div>
                <main class="mb-5">
                    <div class="">
                        <div class="rounded shadow row p-2">
                            <div class="d-flex justify-content-between"> 
                                <h3>
                                    {{$selectedClass->name}}
                                </h3>
                                <div>
                                    <button class="btn btn-primary addYear me-2"> Add Year</button>
                                </div>
                            </div>
                        </div>
                        @foreach($allyears as $allyear)
                            <div>
                                <div class=" rounded shadow row mt-3 p-2">
                                    <div class="d-flex justify-content-between"> 
                                        <h3 class="fw-bold">
                                            {{$selectedClass->name}}
                                            <span class="text-gray-500 fw-bold">: Year ({{$allyear->Year}})</span>
                                        </h3>
                                        <div>
                                            <button class="btn btn-primary addTerm me-2" data-selectedyear-id="{{ $allyear->id }}"> Add term</button>
                                            <button class="btn btn-primary addStudent" data-studentyear-id="{{ $allyear->id }}"> Add Student</button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            @foreach($allterms as $allterm)
                                                @if($allterm->year_id === $allyear->id)
                                                <div class="col col-md-4 col-lg-4">                       
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td><strong>Term :</strong></td>
                                                                <td>{{$allterm->term}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Year:</strong></td>
                                                                <td>{{$allterm->date}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Amount:</strong></td>
                                                                <td>{{$allterm->term_amount}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Status:</strong></td>
                                                                <td>{{$allterm->status}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                            <!--begin::Timeline widget 3-->
                                            <div class="card">
                                                <!--begin::Header-->
                                                <div class="card-header border-0 pt-2">
                                                    <h4 class="card-title align-items-center flex-column">
                                                        <span class="card-label fw-bold">
                                                            @php
                                                                $totalCount = $allStudents->filter(function($student) use ($allyear) {
                                                                    return $student->year_id === $allyear->id;
                                                                })->count();
                                                            @endphp
                                                            {{ $totalCount }} {{$selectedClass->name}} Students 
                                                            <span class="text-gray-500 fw-bold">: Year ({{$allyear->Year}})</span>
                                                        </span>
                                                    </h4>
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
                                                                <th class="min-w-125px">Roll_N0</th>
                                                                <th class="min-w-125px">Students Status</th>
                                                                <th class="min-w-125px">Date</th>
                                                                <th class="text-end min-w-70px"></th>
                                                            </tr>
                                                            <!--end::Table row-->
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody class="fw-semibold text-gray-600">
                                                            @foreach($allStudents as $allStudent)
                                                                @if($allStudent->year_id === $allyear->id)
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
                                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$allStudent->name}}</span>
                                                                            </div>
                                                                        </td>
                                                                        <!--end::Name=-->
                                                                        <td>{{$allStudent->roll_number}}</td>
                                                                        <!--begin::Date=-->
                                                                        <td><span>{{$allStudent->status}}</span></td>
                                                                        <!--end::Date=-->
                                                                        <td>{{ \Carbon\Carbon::parse($allStudent->created_at)->isoFormat('MMMM Do YYYY') }}</td>
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        <!-- start create year -->

            <div class="modal fade" id="addYearModal" tabindex="-1" aria-labelledby="addYearModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered"> <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addYearModalLabel">Add Year</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addYearForm" action="{{ route('year.store') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <div class="form-group row mb-4"> 
                                <label for="yearInput" class="col-sm-4 col-form-label">Year:</label> 
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="yearInput" name="year" placeholder="Enter Year">
                                </div>
                            </div>

                            <div class="form-group row mb-4"> 
                                <label for="primaryClassInput" class="col-sm-4 col-form-label d-none">Primary Class:</label> 
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="yearClass" value="{{$selectedClass->id}}" name="yearClass">
                                </div>
                            </div>
                            <div class="text-center"> 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" form="addYearForm" class="btn btn-primary">Save</button> 
                            </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- end create year -->

        <!-- start create term -->
            <div class="modal fade" id="termModal" tabindex="-1" aria-labelledby="termModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termModalLabel">Add Term</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="termForm" action="{{ route('term.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="termSelect" class="col-sm-3 col-form-label">Term:</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="termSelect" name="selectTerm" required>
                                        <option value="">Select Term</option>
                                        <option value="Term One">Term One</option>
                                        <option value="Term Two">Term Two</option>
                                        <option value="Term Three">Term Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="paymentInput" class="col-sm-3 col-form-label">Payment:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="paymentInput" name="payment" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="dateInput" class="col-sm-3 col-form-label">Date:</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control" id="termdate" name="termdate" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="classIdInput" class="col-sm-3 col-form-label d-none">Class ID (Hidden):</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" id="selectedClass_id" name="selectedClass_id" value="{{$selectedClass->id}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="yearIdInput" class="col-sm-3 col-form-label d-none">Year ID (Hidden):</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" id="yearIdInput" name="yearIdInput">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" form="termForm" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <!-- end create term -->

        <!-- start create student -->
            <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addStudentForm" action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="classIdInput" class="col-sm-3 col-form-label d-none">Class ID (Hidden):</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" id="classIdInput" name="class_id" value="{{$selectedClass->id}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="yearIdInput" class="col-sm-3 col-form-label d-none">Year ID (Hidden):</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" value="year 2024" id="yearStudentIdInput" name="yearStudentIdInput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="studentNameInput" class="col-sm-3 col-form-label">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="studentNameInput" name="studentName" list="options" placeholder="Choose or enter a name" required>
                                    <datalist id="options">
                                        @foreach($allSelectStudent as $allStudent)
                                            <option value="{{$allStudent->name}}">{{$allStudent->roll_number}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" form="addStudentForm" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <!-- end create student -->


        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script>
            $(document).ready(function() {

                //start year

                    $(".addYear").click(function() {
                        $("#addYearModal").modal('show');
                    });

                    $('#addYearForm').on('submit', function(e) {
                        e.preventDefault(); // Prevent the form from submitting normally

                        // Get form data
                        var formData = new FormData(this);

                        // Send Ajax request
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            processData: false, // Prevent jQuery from automatically transforming the data into a query string
                            contentType: false, // Prevent jQuery from setting the content type
                            success: function(response) {
                                // Handle the success response here
                                console.log(response);
                                window.location.reload();
                            },
                            error: function(xhr, status, error) {
                                // Handle errors here
                                console.error(xhr.responseText);
                            }
                        });
                    });

                //end year

                //start term
                    $(".addTerm").click(function() {
                        var selectYearId = $(this).data('selectedyear-id');
                        $('#yearIdInput').val(selectYearId); 

                        $("#termModal").modal('show');
                    });

                    $('#termForm').on('submit', function(e) {
                        e.preventDefault(); // Prevent the form from submitting normally

                        // Get form data
                        var formData = new FormData(this);

                        // Send Ajax request
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            processData: false, // Prevent jQuery from automatically transforming the data into a query string
                            contentType: false, // Prevent jQuery from setting the content type
                            success: function(response) {
                                // Handle the success response here
                                console.log(response);
                                window.location.reload();
                            },
                            error: function(xhr, status, error) {
                                // Handle errors here
                                console.error(xhr.responseText);
                            }
                        });
                    });
                //end term

                //start student
                    $(".addStudent").click(function() {
                        var studentYearId = $(this).data('studentyear-id');
                        $('#yearStudentIdInput').val(studentYearId); 

                        $("#addStudentModal").modal('show');
                    });

                    // $("#emojionearea1").focusout(function(){
                    //     //alert('Please select');
                    //     if($(this).val()==''){
                    //         // $("#emojionearea1").addClass('is-invalid');
                    //         // $("#emojionearea1").removeClass('is-valid');
                    //         // $("#submitNewPost").prop('disabled',true);
                    //     }else{
                    //         // $("#emojionearea1").prop('disabled',false);
                    //         // $("#emojionearea1").addClass('is-valid');
                    //         // $("#emojionearea1").removeClass('is-invalid');

                    //         $.ajax({
                    //             url: '/check/student',
                    //             type: 'Post',
                    //             data: {
                    //                 classIdInput: $("#classIdInput").val(),
                    //                 yearStudentIdInput: $("#yearStudentIdInput").val(),
                    //                 studentNameInput: $("#studentNameInput").val(),
                    //                 _token: '{{ csrf_token() }}'
                    //             },
                    //             success: function (response) {
                    //                 console.log(response); 
                    //                 window.location.reload();
                    //             },
                    //             error: function (xhr, status, error) {
                    //                 console.log(xhr.responseText); 
                    //             }
                    //         });
                    //     }
                    // })


                    $('#addStudentForm').on('submit', function(e) {
                        e.preventDefault();

                        // Get form data
                        var formData = new FormData(this);

                        // Send Ajax request
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                            if (response.message) {
                                // Display the message (success or error)
                                alert(response.message);

                                // Optionally, reload the page on success (replace with your desired action)
                                if (response.message === 'Student saved successfully!') {
                                window.location.reload();
                                }
                            } else {
                                console.error('Unexpected response format:', response);
                            }
                            },
                            error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            }
                        });
                    });

                //end student

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


