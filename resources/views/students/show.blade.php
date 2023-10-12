    @extends('layaut.base')
    @section('title', "Student | $student->name")
    @section('container')

    <main class="container">
        <div class="row">

            <h1 class="alert alert-success text-center"><i class="fa-solid fa-user"> </i> {{$student->name}}</h1>
        </div>

        <div class="row">


            <div class="card my-3">

                <div class="row g-8">
                    <div class="col md-4">

                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6cw2QdGsvlmrVVwvyNW90GyN7nMi8ykuVLg&usqp=CAU" class="card-img-top" alt="...">
                    </div>

                    <div class="col md-4">
                        <div class="card-body">

                            <h5 class="card-title">{{$student->name}}</h5>
                            <p class="card-title"><b> Student:</b> {{$student->id_personal_date}}</p>
                            <p class="card-text"><b>Document_Number:</b> {{$student->document_number}}</p>
                            <p class="card-text"><b>Sex:</b> {{$student->sex}}</p>
                            <p class="card-text"><b>Marital_status:</b> {{$student->marital_status}}</p>
                            <p class="card-text"><b>Date_of_birth:</b> {{$student->date_of_birth}}</p>
                            <p class="card-text"><b>Residence_address:</b> {{$student->residence_address}}</p>
                            <p class="card-text"><b>Stratum:</b> {{$student->stratum}}</p>
                            <p class="card-text"><b>Residence_type:</b> {{$student->residence_type}}</p>
                            <p class="card-text"><b>Height:</b> {{$student->height}}</p>
                            <p class="card-text"><b>Institutional_email:</b> {{$student->institutional_email}}</p>
                            <p class="card-text"><b>Cell_phone_number:</b>{{$student->cell_phone_number}}</p>




                        </div>

                    </div>

                </div>

            </div>
        </div>
        </div>
        <div class="d-grid gap-2 mt-1">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    </main>