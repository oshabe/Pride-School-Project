<?php

namespace App\Http\Controllers;

use App\Models\FeesStatus;
use Illuminate\Http\Request;
use App\Models\schoolClass;
use App\Models\Year;
use App\Models\Term;
use App\Models\student;
use App\Models\schoolFees;
use App\Models\StudentClass;

class StudentController extends Controller
{
    //

    public function welcome()
    {
        // $otherCount = Resident::where('created_by',auth()->user()->id)->where('r_gender', 'Others')->count();
        // $lc1=Village::where('email',auth()->user()->email)->first();

       $allClasses = schoolClass::get();

       $allClassStudents = Year::join('school_classes','school_classes.id','years.class_id')
       ->join('students','students.class_id','school_classes.id')
       ->join('school_fees','school_fees.student_id','students.id')
       ->where('years.status','Active')
       ->select('school_classes.name as name','school_classes.id as id','school_fees.payment_status as pStatus')
       ->get();

    //    $allClassStudents = FeesStatus::join('terms','terms.id','fees_statuses.term_id')
    //    ->join('years','years.id','terms.year_id')
    //    ->join('school_classes','school_classes.id','years.class_id')
    //    ->where('years.status','Active')
    //    ->select('school_classes.name as name','school_classes.id as id','fees_statuses.fees_status as pStatus')
    //    ->get()->last();

        $allStudents = student::join('school_classes','school_classes.id','students.class_id')
        ->select('students.name as name','school_classes.name as class','students.id as id')
        ->get();

        foreach ($allStudents as $student) {
            $statusFee = SchoolFees::where('student_id', $student->id)
                ->orderBy('id', 'desc')
                ->first();
        
            $student->statusFee = $statusFee; // Attach the last status fee to the student
        }

        return view('welcome',compact('allClasses','allStudents','allClassStudents'));
    }

    public function oneClass($id)
    {
        $selectedClass = schoolClass::where('id', $id)->get()->first();
        //dd($selectedClass);
        // $lc1=Village::where('email',auth()->user()->email)->first();

        //$allCategory = Category::get();
        $allClasses = schoolClass::get();
        $allyears = Year::where('class_id', $id)->get();
        $allterms = Term::where('class_id', $id)->get();
        $allSelectStudent = student::get();

        $allStudents = StudentClass::join('students','students.id','student_classes.student_id')
        ->select('students.name as name','students.status as status','students.created_at as created_at','students.id as id','student_classes.year_id as year_id','students.roll_number as roll_number')
        ->where('student_classes.class_id', $id)
        ->get();
        //dd($allStudents);

        // $allFeesStudents = SchoolFees::join('students','students.id','school_fees.student_id')
        // ->select('students.id as id','school_fees.payment_status as payment_status','school_fees.amount_payed as amount_payed')
        // ->get()->last();
        // //dd($allFeesStudents);

        

        return view('student.single_class',compact('allClasses','selectedClass','allyears','allterms','allStudents','allSelectStudent'));
    }

    public function index($id)
    {
        // $otherCount = Resident::where('created_by',auth()->user()->id)->where('r_gender', 'Others')->count();
        // $lc1=Village::where('email',auth()->user()->email)->first();

        $allClasses = schoolClass::get();
        $selectedStudent = student::where('id', $id)->get()->first();

        $theYears=Year::join('students','students.year_id','years.id')
        ->join('school_classes','school_classes.id','students.class_id')
        ->select('years.Year as year','school_classes.name as class_name','years.id as id')
        ->where('students.id',$id)
        ->get();

        $theterms=Year::join('terms','terms.year_id','years.id')
        ->select('terms.term as term','terms.id as id','years.id as yearId')
        ->get();

        $theFees=student::join('school_fees','school_fees.student_id','students.id')
        ->join('terms','terms.id','school_fees.term_id')
        ->join('years','years.id','terms.year_id')
        ->select('terms.term as term','school_fees.amount_payed as amount','school_fees.date as date','years.id as year_id')
        ->where('students.id',$id)
        ->get();
        //dd($theFees);

        //$allyears = Year::join('students')->where('class_id', $id)->get();
        $theYearStudent=StudentClass::join('years','years.id','student_classes.year_id')
        ->join('school_classes','school_classes.id','years.class_id')
        ->select('years.Year as year','years.id as id','school_classes.name as class','school_classes.id as classYearId')
        ->where('student_classes.student_id',$id)
        //->where('years.status','Active')
        ->get();
        //dd($theYearStudent);

        $yearTerm=Year::join('terms','terms.year_id','years.id')
        ->select('terms.term as term','terms.id as id','years.id as yearId')
        ->get();


        $schoolFeesStatus=schoolFees::join('terms','terms.id','school_fees.term_id')
        ->select('terms.id as termId','school_fees.payment_status as status')
        ->where('school_fees.student_id',$id)
        ->get()->last();
        //dd($schoolFeesStatus);




        return view('student.single_student',compact('schoolFeesStatus','yearTerm','allClasses','selectedStudent','theYears','theterms','theFees','theYearStudent'));
    }

    public function saveCreatedYear(Request $request)
    {
        //dd($request);
        
        // Update existing active years to inactive
        Year::where('status', 'Active')->where('class_id',$request->yearClass)->update(['status' => 'Inactive']);

        // Create the new year with active status
        Year::create([
            'Year' => $request->year,
            'class_id' => $request->yearClass,
            'status' => 'Active',
            'created_by' => 'Adminstrator',
            'updated_by' => 'Null',
            // You can set other fields like status, created_by, etc.
        ]);

        return response()->json(['message' => 'Year saved successfully!']);

    }

    public function saveCreatedTerm(Request $request)
    {
        //dd($request);

        // Update existing active term to inactive
        Term::where('status', 'Active')->where('class_id',$request->selectedClass_id)->update(['status' => 'Inactive']);

        Term::Create([
            'term' => $request->selectTerm,
            'term_amount'=>$request->payment,
            'class_id' => $request->selectedClass_id,
            'year_id' => $request->yearIdInput,
            'date' => $request->termdate,
            'status' => 'Active',
            'created_by' =>'Adminstrator',
            'updated_by'=>'Null',
            // You can set other fields like status, created_by, etc.
        ]);

    }

    public function saveCreatedStudent(Request $request)
    {
        
        // Check if student name already exists
        $existingStudent = Student::where('name', $request->studentName)->first();
        //dd($existingStudent);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        do {
            // Generate a random string of 5 characters
            $rollNumber = '';
            for ($i = 0; $i < 5; $i++) {
                $rollNumber .= $characters[rand(0, $charactersLength - 1)];
            }

            // Check if the roll number already exists
            $rollNumberCheck = Student::where('roll_number', $rollNumber)->first();
        } while ($rollNumberCheck);


        if ($existingStudent) {

            $checkStudentNameId = student::where('name', $request->studentName)->value('id');
            //dd($checkStudentNameId);

            $checkStudentClass = StudentClass::where('student_id', $checkStudentNameId)
            ->where('class_id', $request->class_id)
            ->where('year_id', $request->yearStudentIdInput)
            ->first();
            //dd($checkStudentClass);

            if ($checkStudentClass) {
                // Name Year and class exsist, send  message
                $firstStudent =student::Create([
                    'roll_number'=>$rollNumber,
                    'name' => $request->studentName,
                    'class_id' => $request->class_id,
                    'year_id' => $request->yearStudentIdInput,
                    'status' => 'Active',
                    'created_by' =>'Adminstrator',
                    'updated_by'=>'Null',
                    // You can set other fields like status, created_by, etc.
                ]);
                
                StudentClass::Create([
                    'student_id' => $firstStudent->id,
                    'class_id' => $request->class_id,
                    'year_id' => $request->yearStudentIdInput,
                    'status' => 'Active',
                    'created_by' =>'Adminstrator',
                    'updated_by'=>'Null',
                    // You can set other fields like status, created_by, etc.
                ]);

            }else{

                StudentClass::Create([
                    'student_id' => $checkStudentNameId,
                    'class_id' => $request->class_id,
                    'year_id' => $request->yearStudentIdInput,
                    'status' => 'Active',
                    'created_by' =>'Adminstrator',
                    'updated_by'=>'Null',
                    // You can set other fields like status, created_by, etc.
                ]);

            }

        }else{
            $firstS=student::Create([
                'roll_number'=>$rollNumber,
                'name' => $request->studentName,
                'class_id' => $request->class_id,
                'year_id' => $request->yearStudentIdInput,
                'status' => 'Active',
                'created_by' =>'Adminstrator',
                'updated_by'=>'Null',
                // You can set other fields like status, created_by, etc.
            ]);
            
            StudentClass::Create([
                'student_id' => $firstS->id,
                'class_id' => $request->class_id,
                'year_id' => $request->yearStudentIdInput,
                'status' => 'Active',
                'created_by' =>'Adminstrator',
                'updated_by'=>'Null',
                // You can set other fields like status, created_by, etc.
            ]);
        }

        // Name is new, proceed with saving the student (assuming you have logic for this)
        // ... your code to save the student ...

        return response()->json(['message' => 'Student saved successfully!']);
    }

    public function saveCreatedPayment(Request $request)
    {
        //dd($request);

        schoolFees::Create([
            'student_id' => $request->student_id,
            'term_id' => $request->termSelect,
            'amount_payed' => $request->amount,
            'date' => $request->date,
            'payment_status' => $request->status,
            'created_by' =>'Adminstrator',
            'updated_by'=>'Null',
            // You can set other fields like status, created_by, etc.
        ]);

        $existingStatusFees = FeesStatus::where('student_id', $request->student_id)
        ->where('term_id', $request->termSelect)
        ->orderBy('created_at', 'desc') // Ensure you get the last record based on creation date
        ->value('fees_status'); // Get the value of fees_status
        //dd($existingStatusFees);

        $totalAmount = schoolFees::where('student_id', $request->student_id)
        ->where('term_id', $request->termSelect)
        ->sum('amount_payed'); // Calculate the sum of amount_payed

        if ($existingStatusFees !== $request->status) {
            // Save the new record
            FeesStatus::create([
                'student_id' => $request->student_id,
                'term_id' => $request->termSelect,
                'fees_status' => $request->status,
                'total_Amount'=>$totalAmount, // Use the calculated total amount
                'status' => 'Active',
                'created_by' => 'Administrator', // Corrected spelling
                'updated_by' => 'Null',
                // You can set other fields like status, created_by, etc.
            ]);
        }else{
             // Update the existing record with the new total_Amount
            FeesStatus::where('student_id', $request->student_id)
            ->where('term_id', $request->termSelect)
            ->where('fees_status', $existingStatusFees)
            ->update(['total_Amount' => $totalAmount]);
        }
    }

    public function searchStudents(Request $request)
    {
        $searchTerm = strtolower($request->query('q'));

        // $students = Student::where('name', 'like', "%{$searchTerm}%")
        //     ->select('id', 'name') // Assuming you only need id and name
        //     ->get();

        $students=Year::join('students','students.year_id','years.id')
        ->join('school_classes','school_classes.id','students.class_id')
        ->select('students.name as name','students.id as id','students.roll_number as roll_number',
        'years.Year as year','school_classes.name as class')
        ->where('students.name', 'like', "%{$searchTerm}%")
        ->get();

        return response()->json($students);
    }

    public function checkTermYear(Request $request)
    {
        //dd($request);

        $checkTerm=Year::join('terms','terms.year_id','years.id')
        ->where('years.id',$request->yearInput)
        //->where('years.class_id',$request->classIdInput)
        ->select('terms.term as term','terms.id as id')
        ->get();

        //dd($checkTerm);
        return response()->json($checkTerm);
    }
}
