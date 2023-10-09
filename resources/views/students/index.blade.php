@extends('layaut.base')
@section('title')
@endsection

@section('content')
    <main class="container">
        <h1 class="alert alert-success text-center"><i class="fa-solid fa-user">Personal Data Students</i></h1>
        <div class="row">
            <div class="col d-grid">
               <a class="btn btn-primary" href="/students/create">Create</a>
            </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Action</th>
                <th scope="col">Code_student</th>
                <th scope="col">Document_Number</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Marital_status</th>
                <th scope="col">Date_of_birth</th>
                <th scope="col">Residence_address</th>
                <th scope="col">Stratum</th>
                <th scope="col">Residence_type</th>
                <th scope="col">Height</th>
                <th scope="col">Institutional_email</th>
                <th scope="col">Cell_phone_number</th>



            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>

                    <td><a class="btn btn-success" href="{{route('students.edit',$student)}}">Edit</td>
                    <td> {{$student->id_personal_date}}</td>    
                    <td> {{$student->document_number}}</td>
                    <td> {{$student->name}}</td>
                    <td> {{$student->sex}}</td>
                    <td> {{$student->marital_status}}</td>
                    <td> {{$student->date_of_birth}}</td>
                    <td> {{$student->residence_address}}</td>
                    <td> {{$student->stratum}}</td>
                    <td> {{$student->residence_type}}</td>
                    <td> {{$student->height}}</td>
                    <td> {{$student->institutional_email}}</td>
                    <td> {{$student->cell_phone_number}}</td>
                    


                </tr>
            @endforeach
            </tbody>
        </table>
        
    </main>
@endsection

