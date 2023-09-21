@extends('admin.layouts.admin-master')

@section('content')
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
        <tr>
            <th colspan="2" class="text-left">
                @if(isset($setting))
                    <a href="{{route('settings.edit',$setting->id)}}" class="float-right btn btn-primary">Update</a>
                @else
                    <a href="{{route('settings.create')}}" class="float-right btn btn-primary">Create</a>
                @endif
                <h5>Website Settings</h5>
            </th>
        </tr>
        </thead>
        <tr>
            <th>Name <small>(Bangla)</small> </th>
            <td>{{$setting->bn_name ?? ''}}</td>
        </tr>
        <tr>
            <th>Name <small>(english)</small> </th>
            <td>{{$setting->en_name ?? ''}}</td>
        </tr>

        <tr>
            <th>Institute Logo</th>
            <td><img src="{{$setting->logo ?? ''}}" width="80px" alt=""></td>
        </tr>

        <tr>
            <th>Address</th>
            <td>{{$setting->full_address ?? ''}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$setting->email ?? ''}}</td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>{{$setting->phone ?? ''}}</td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>{{$setting->facebook ?? ''}}</td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>{{$setting->youtube ?? ''}}</td>
        </tr>

        <tr>
            <th>Institute Code</th>
            <td>{{$setting->code ?? ''}}</td>
        </tr>

        <tr>
            <th>Details</th>
            <td>{!! $setting->details ?? '' !!}</td>
        </tr>

        <tr>
            <th>Institute Map</th>
            <td style="max-width: 1000px;overflow: hidden" >{{$setting->map ?? ''}}</td>
        </tr>
    </table>

@endsection
