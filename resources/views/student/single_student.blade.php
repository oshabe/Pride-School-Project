<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$selectedStudent->name}}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
<body class="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-none">
        <div class="container-fluid">
            <div>
                <button class="btn btn-dark rounded-pill me-2">Zuck</button>
                <a class="navbar-brand" href="#"><b>Online Shop</b></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Category">Categories</a>
                    </li>
                    @guest <!-- Check if the user is a guest (not logged in) -->
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link">Register</a>
                        </li>
                    @endguest
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Settings
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <button class="btn btn-danger btn-sm align-item-ceter" style="width: 100%;">{{ __('Logout') }}</button>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main style="margin-top: 70px;" class="mb-5">
        <div class="container">
            <div>
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2" id="searchInput" type="search" placeholder="Search by students name" aria-label="Search">
                </form>
                <div id="searchResults" style="border: 1px solid #ddd;border-radius: 4px;padding: 3px;max-height: 200px;overflow-y: auto;"></div>
            </div>
            <div>
                @foreach($theYearStudent as $theYearStudents)
                    <div class=" rounded shadow row p-2"> 
                        <div class="col-6 col-md-3 col-lg-3">
                            <div> 
                                <h4>
                                    {{$selectedStudent->name}}
                                </h4>
                            </div>
                            
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td><strong>Class:</strong></td>
                                        <td>
                                            {{$theYearStudents->class}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Year:</strong></td>
                                        <td>{{$theYearStudents->year}}</td>
                                    </tr>
                                    @foreach($yearTerm as $yearTerms)
                                        @if($theYearStudents->id === $yearTerms->yearId)
                                            <tr>
                                                <td><strong>{{$yearTerms->term}}</strong></td> 
                                                @if($schoolFeesStatus && $schoolFeesStatus->termId === $yearTerms->id)
                                                    <td>{{ $schoolFeesStatus->status }}</td>
                                                @endif
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-light col-12 col-md-12 col-lg-9">
                            <div class="col-md-12 p-1">
                                <h4 class="d-flex justify-content-between">
                                    <div>
                                        <span>Mode of Payment</span>
                                        <span class="text-gray-500 fw-bold">: Year {{$theYearStudents->year}}</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-2 addPayment" data-theyear-id="{{ $theYearStudents->id }}" data-theclass-id="{{ $theYearStudents->classYearId }}"> Add Payment</button>
                                    </div>
                                </h4>
                                <table class="table table-striped">
                                    <tbody> 
                                        @foreach($theFees as $theFee)
                                            @if($theFee && $theFee->year_id === $theYearStudents->id)
                                            <tr>
                                                        <td><strong>{{$theFee->term}}</strong></td>
                                                        <td>
                                                            {{$theFee->amount}}
                                                        </td>
                                                        <td>
                                                        {{$theFee->date}}
                                                        </td>
                                                    </tr> 
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPaymentModalLabel">Add Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addPaymentForm" action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="amountInput" class="col-sm-3 col-form-label">Amount:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="amountInput" name="amount" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="statusSelect" class="col-sm-3 col-form-label">Select Term:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="termSelect" name="termSelect" required>
                                    <option value="">Select Term</option>
                                    <!-- Options will be appended here dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dateInput" class="col-sm-3 col-form-label">Date:</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="dateInput" name="date" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="statusSelect" class="col-sm-3 col-form-label">Status:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="statusSelect" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="Nil">Nil</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="studentIdInput" class="col-sm-3 col-form-label d-none">Student ID (Hidden):</label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" id="studentIdInput" value="{{$selectedStudent->id}}" name="student_id">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="addPaymentForm" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
            $(document).ready(function() {

                //start payment

                $(".addPayment").click(function() {

                    var selectYear = $(this).data('theyear-id');
                    // $('#yearIdInput').val(selectYearId);

                    var selectClass = $(this).data('theclass-id');

                    $.ajax({
                        url: '/check/term',
                        type: 'Get',
                        data: {
                            classIdInput: selectYear,
                            yearInput: selectClass,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            // Clear existing options
                            $("#termSelect").empty();

                            // Add default option
                            $("#termSelect").append('<option value="">Select Term</option>');

                            // Add options from the response
                            $.each(response, function(index, term) {
                                $("#termSelect").append('<option value="' + term.id + '">' + term.term + '</option>');
                            });
                        },
                        error: function (xhr, status, error) {
                            console.log(xhr.responseText); 
                        }
                    });

                    $("#addPaymentModal").modal('show');
                });

                $('#addPaymentForm').on('submit', function(e) {
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
data-
                //end payment

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

