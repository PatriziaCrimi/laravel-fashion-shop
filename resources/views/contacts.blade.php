@extends('layouts.app')

@section('page-title', 'Contacts')

@section('section')
  <section id="contacts" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>{{$title}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <ul>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
          </ul>
        </div>
        <div class="col-6">
          <ul>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-6">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>   {{-- Closing Section-Contacts container --}}
  </section>
@endsection
