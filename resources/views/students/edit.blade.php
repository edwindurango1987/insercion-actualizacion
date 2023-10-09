@extends('layaut.base')
@section('title', 'Edit')
@section('container')

<div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Edit Student Code {{$student->id_personal_date}}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('students.update',$student) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        
                        <div class="col-6">
                            <label for="document_number" class="form-label">Document_Number</label>
                            <input type="text" class="form-control" id="document_number" name="document_number" value="{{$student->document_number}}"> 
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                        </div>
                        <div class="col-6">
                            <label for="sex" class="form-label">Sex</label>
                            <select name="sex" value="{{$student->sex}}" id="sex" class="form-select">
                              @foreach($sexs as $sex)

                              @if($sex == $student->sex)
                                <option value="{{$sex}}" selected >{{$sex}}</option>

                                @else

                                <option value="{{$sex}}">{{$sex}}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <select name="marital_status" id="marital_status" class="form-select">
                              @foreach($maritals as $marital)

                              @if($marital == $student->marital_status)
                                <option value="{{$marital}}" selected >{{$marital}}</option>

                                @else

                                <option value="{{$marital}}">{{$marital}}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="date_of_birth" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$student->date_of_birth}}" >
                        </div>
                        <div class="col-6">
                            <label for="residence_address" class="form-label">Residence Address</label>
                            <input type="text" class="form-control" id="residence_address" name="residence_address" value="{{$student->residence_address}}">
                        </div>
                        <div class="col-6">
                            <label for="stratum" class="form-label">Stratum</label>
                            <select name="stratum" id="stratum" class="form-select">
                              @foreach($stratums as $stratum)

                              @if($stratum == $student->stratum)
                                <option value="{{$stratum}}" selected >{{$stratum}}</option>

                                @else

                                <option value="{{$stratum}}">{{$stratum}}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="residence_type" class="form-label">Residence Type</label>
                            <select name="residence_type" id="residence_type" class="form-select">
                              @foreach($residence_types as $residence_type)

                              @if($residence_type == $student->residence_types)
                                <option value="{{$residence_type}}" selected >{{$residence_type}}</option>

                                @else

                                <option value="{{$residence_type}}">{{$residence_type}}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="height" class="form-label">Heigth</label>
                            <div class="input-group">
                                <input type="number" id="cow_height" name="height" value="{{$student->height}}" class="form-control" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">CM</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="institutional_email" class="form-label">Institutional Email</label>
                            <input type="text" class="form-control" id="institutional_email" name="institutional_email" value="{{$student->institutional_email}}">
                        </div>
                        <div class="col-6">
                            <label for="cell_phone_number" class="form-label">Cell Phone Number</label>
                            <input type="text" class="form-control" id="cell_phone_number" name="cell_phone_number" value="{{$student->cell_phone_number}}">
                        </div>
                        
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <div class="d-grid gap-2 mt-1">
                                <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
