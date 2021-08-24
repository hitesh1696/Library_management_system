<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Library;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLibraryRequest;

class LibraryController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $books = Book::all();
        $logs = Library::all();
        return view('libraries.index',['students' => $students, 'books' => $books,'logs' => $logs]);
    }
   
    public function issuestore(StoreLibraryRequest $request)
    {
        $student_name = Student::where('id', $request->student_id)->get()->first();
        $lib = Library::where('student_id', $request->student_id)->where('book_id', $request->book_id)->count();
        
        if($lib > 0)
        {
            return redirect()->route('library')->with('message', $student_name->first_name.' '.$student_name->last_name .'Already have this book');
        }
        else
        {
            $student = Library::create([
                'book_id' => $request->book_id,
                'student_id' => $request->student_id,
                'date_of_issue' => $request->date_of_issue
            ]);
        }
        return redirect()->route('library')->with('message', 'Book Allocated Successfully to '.$student_name->first_name.' '.$student_name->last_name);
    }

    public function returnstore(Request $request)
    {
        $students =  $request->validate([
            'student_id' => 'required',
            'book_id' => 'required',
            'date_of_return' => 'required'
        ]);
        $issue_date = Library::where('student_id', $request->student_id)->where('book_id', $request->book_id)->get()->first();
        if($issue_date->date_of_issue != $request->date_of_return)
        {
            $lib = Library::where('student_id', $request->student_id)->where('book_id', $request->book_id)->update(['date_of_return' => $request->date_of_return]);
            return redirect()->route('library')->with('message', 'Book Returned Successfully');
        }
        else
        {
            return redirect()->route('library')->with('message', "This Book Collected Today, You can't return it today, Return it after 7 days");
        }
    }
   

    public function logs()
    {  
        $students = Student::all();
        $books = Book::all();
        $logs = Library::all();
        return view('libraries.logs',['students' => $students, 'books' => $books,'logs' => $logs]);
    }
}
