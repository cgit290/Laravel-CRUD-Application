@extends('layouts.main')

@section('main-section')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{$title}}</div>
                <div class="card-body">

                    <form action="{{$url}}" method="POST">
                        @csrf
                        <x-input type="text" name="member_name" label="Name" value="{{ optional($member)->member_name }}"/>
                        <x-input type="email" name="email" label="Email" value="{{ optional($member)->email }}" />
                        <x-input type="date" name="dob" label="Date of Birth" value="{{ optional($member)->dob }}" />
                        <div class="mb-3">
                            <label for="Gender" class="form-label">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="M" {{optional($member)->gender=="M" ? 'selected' : ''}}>Male</option>
                                <option value="F" {{optional($member)->gender=="F" ? 'selected' : ''}}>Female</option>
                                <option value="O" {{optional($member)->gender=="O" ? 'selected' : ''}}>Others</option>
                            </select>
                            <span class="text-danger">
                                @error('gender')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        @if ($member=="")
                        <x-input type="password" name="password" label="Password" value=""/>
                        <x-input type="password" name="password_confirmation" label="Confirm Password" value=""/>
                        @endif
                        
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection