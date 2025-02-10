@extends('layouts.main')

@section('main-section')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Member List</div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($members as $member)
                               <tr>
                                <td scope="col">{{$i++}}</td>
                                <td scope="col">{{$member['member_name']}}</td>
                                <td scope="col">{{$member['email']}}</td>
                                <td scope="col">{{$member['dob']}}</td>
                                <td scope="col">
                                    @if ($member['gender']=='M')
                                        Male
                                    @elseif($member['gender']=='F')
                                        Female
                                    @else
                                        Others
                                    @endif
                                </td>
                                <td scope="col">
                                    @if ($member['status']==1)
                                        <span class="badge bg-success">Active</span>                                        
                                    @else
                                        <span class="badge bg-danger">In-active</span>
                                    @endif
                                    <a href="{{route('member.status',$member['member_id'])}}"><i class="fa fa-refresh"></i></a>
                                </td>
                                <td scope="col">
                                    <a
                                        name=""
                                        id=""
                                        class="btn btn-sm btn-primary"
                                        href="{{route('member.edit',$member['member_id'])}}"
                                        role="button"
                                        >Edit</a
                                    >
                                    <a
                                        name=""
                                        id=""
                                        class="btn btn-sm btn-danger"
                                        href="{{route('member.delete',$member['member_id'])}}"
                                        role="button"
                                        onclick="return confirm('Are you sure?')"
                                        >Delete</a
                                    >
                                    
                                </td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection