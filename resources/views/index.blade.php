    @section('title') Home @endsection

    @extends('layouts.master');
    @section('main');
    <x-users-table :users="$users"/>
    @endsection
