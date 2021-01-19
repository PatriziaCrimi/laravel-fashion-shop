@extends('layouts.app')

@section('page-title', 'Homepage')

@section('section')
  <section id="home" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>{{$title}}</h1>
        </div>
      </div>
    </div>   {{-- Closing Section-Home container --}}
  </section>
@endsection
