@extends('layaut.base')
@section('title', 'Create')
@section('container')
<div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Create New Student </h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('students.store') }}" method="post" class="row">
                        @csrf
                        
                        <div class="col-6">
                            <label for="document_number" class="form-label">Document</label>
                            <input type="text" class="form-control" id="document_number" name="document_number">
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6">
                            <label for="sex" class="form-label">Sex</label>
                            <select name="sex" id="sex" class="form-select">
                              @foreach($sexs as $sex)
                                <option value="{{$sex}}">{{$sex}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <select name="marital_status" id="marital_status" class="form-select">
                              @foreach($maritals as $marital)
                                <option value="{{$marital}}">{{$marital}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                        </div>
                        <div class="col-6">
                            <label for="residence_address" class="form-label">Residence Address</label>
                            <input type="text" class="form-control" id="residence_address" name="residence_address">
                        </div>
                        <div class="col-6">
                            <label for="student_stratum" class="form-label">Stratum</label>
                            <select name="stratum" id="stratum" class="form-select">
                              @foreach($stratums as $stratum)
                                <option value="{{$stratum}}">{{$stratum}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="residence_type" class="form-label">Residence Type</label>
                            <select name="residence_type" id="residence_type" class="form-select">
                              @foreach($residence_types as $residence_type)
                                <option value="{{$residence_type}}">{{$residence_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="height" class="form-label">Height</label>
                            <div class="input-group">
                            <input type="number" class="form-control" id="height" name="height">
                            <span class="input-group-text" id="basic-addon2">CM</span>
                        </div>
                        </div>
                        <div class="col-6">
                            <label for="institutional_email" class="form-label">Institutional Email</label>
                            <input type="text" class="form-control" id="institutional_email" name="institutional_email">
                        </div>
                        <div class="col-6">
                            <label for="cell_phone_number" class="form-label">Cell Phone Number</label>
                            <input type="text" class="form-control" id="cell_phone_number" name="cell_phone_number">
                        </div>
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="d-grid gap-2 mt-1">
                                <a href="{{ route('students.index') }}" class="btn btn-info">Regresar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

