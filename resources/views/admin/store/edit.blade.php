@extends('layouts.admin.app')
@section('content')
<div id="content" class="main-content">
  @include('components.alerts.app')
  <div class="layout-px-spacing">
    <div class="account-settings-container layout-top-spacing">
      <div class="breadcrumb-five">
        <ul class="breadcrumb">
          <li class="mb-2"><a href="{{ url('/admin') }}">ホーム</a></li>
          <li class="mb-2"><a href="{{ url('/admin/store') }}">店舗一覧</a></li>
          <li class="active mb-2"><a href="">店舗編集</a></li>
        </ul>
      </div>
      <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
              <form action="/admin/store/update/{{ $store->id }}" method="post" class="section general-info">
                @csrf
                <div class="info">
                  <h6>店舗編集</h6>
                  @include('admin.store._form', ['isEdit' => true])
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
