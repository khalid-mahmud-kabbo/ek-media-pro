@extends('publisher.layout.master')
@section('title', isset($title) ? $title : 'Publisher Edit Placement')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    {{-- <div id="table-url" data-url="{{ route('admin.blog') }}"></div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Placement')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Edit Placement')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <h1>Publisher Edit Placement</h1>

            </div>
        </div>
    </div>
    <!--Row-->
    {{-- @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/blog.js')}}"></script>
    @endpush --}}
@endsection
