@extends('layouts.app')
@include('layouts.navbar')
@section('content')
    <table style="margin-left: auto;margin-right:auto">
        <thead>
            <tr></tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr class="items-center content-center">
                
                    <td>
                        <form method="GET" action="{{url("/FindUser/{$user->id}")}}">
                            @csrf
                           
                            <button class="bg-teal-100 rounded-sm hover:bg-teal-200" type="submit">{{$user->fname}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection