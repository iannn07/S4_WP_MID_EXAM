@extends('layouts.admin_portfolio')
@section('navigation_left')
<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ route('admin.portfolio') }}">
        <span class="align-middle">Ian Admin</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-header">
            Pages
        </li>

        <li class="sidebar-item" id="dashboard" onclick="selectChannel(this)">
            <a class="sidebar-link" href="{{ route('admin.portfolio') }}">
                <i class="align-middle" data-feather="sliders"></i> <span
                    class="align-middle">Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item" id="profile" onclick="selectChannel(this)">
            <a class="sidebar-link" href="{{ route('admin.profile') }}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
        </li>

        <li class="sidebar-header">
            Edit Profile
        </li>

        <li class="sidebar-item active" id="btn" onclick="selectChannel(this)">
            <a class="sidebar-link" href="{{ route('admin.edit') }}">
                <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Edit
                    Journey</span>
            </a>
        </li>
    </ul>
</div>
@endsection
@section('admin_content')
    <div class="float-left">
        <main class="content iframe-wrapper d-flex justify-content-center">
            <iframe src="{{ route('journey.index') }}"></iframe>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/"
                                target="_blank"><strong>AdminKit</strong></a> -
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                    Template</strong></a> &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('admin_script')
@endsection
