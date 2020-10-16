<div>

    @php
    $breadcrumbs = explode(",",$breadcrumb);
    @endphp

    <div class="section-header">
        <h1>{{ $heading }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
            @foreach ($breadcrumbs as $breadcrumb)
            <div class="breadcrumb-item">{{ ucwords($breadcrumb) }}</div>
            @endforeach
        </div>
    </div>
</div>