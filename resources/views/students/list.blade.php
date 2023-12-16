@extends('auth.layouts')
@section('content')

<main class="login-form">
    <div class="cotainer">
       
       
        
                
                       
                            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered " style="width:1250px; background-color:#ffffff; border:1px solid black;opacity:0.8;">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Class</th>
            <th>Roll Number</th>
            <th>Email</th>
            <th>Number</th>
            <th>Place</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td style="font-weight:bold">{{ ++$i }}</td>
            <td style="font-weight:bold">{{ $student->firstname }}</td>
            <td style="font-weight:bold">{{ $student->lastname }}</td>
            <td style="font-weight:bold">{{ $student->age }}</td>
            <td style="font-weight:bold">{{ $student->class }}</td>
            <td style="font-weight:bold">{{ $student->rollnumber }}</td>
            <td style="font-weight:bold">{{ $student->email }}</td>
            <td style="font-weight:bold">{{ $student->number }}</td>
            <td style="font-weight:bold">{{ $student->place }}</td>
            <td style="font-weight:bold">
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="{{ route('show.student',$student->id) }}" style="font-weight:bold">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('edit.student',$student->id) }}" style="font-weight:bold">Edit</a>
                    </form>
                    

                    <form action="{{ route('delect.student', $student->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" style="font-weight:bold">Delete</button>
</form>

               
           </td>
        </tr>

        
        @endforeach
    </table>
  
    <a href="{{ url('/form') }}" class="btn btn-dark btn-green" style="font-weight:bold; margin-top:12px; ">Create Student Record</a>

   
               
    </div>
    <script>
        function confirmUpdate() {
            return confirm("Are you sure you want to update?");
        }
    </script>
</main>

@endsection