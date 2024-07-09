@extends('layout.default')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach ($repositories as $repository)
    <div class="col-span-1 block rounded-lg bg-white shadow-secondary-1">
        <a href="{{ $repository->url }}" target="_blank">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
        </a>
        <div class="p-6 text-surface">
            <h5 class="mb-2 text-xl font-medium leading-tight">{{ $repository->name }}</h5>
            <p class="mb-4 text-base">
                {{ $repository->description }}
            </p>
            <a href="{{ $repository->url }}" target="_blank">
                <button type="button" class="inline-block rounded bg-[#222831] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2" data-twe-ripple-init data-twe-ripple-color="light">
                    go to repo
                </button>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection