@extends('app')
@section('content')
<div class="sec-title text-center">
    <h1>Fitur</h1>
    <div class="border mar0auto">
        <span class="flaticon-shape"></span>
    </div>
</div>
<div id="content" class="container">
    <div class="jumbotron bg-dark text-white">
      <h1 class="display-4">Hello, User!</h1>
      <hr class="my-4">
      <p class="lead">Welcome to your daily jurnal, how do you feel today?</p>
    </div>
    
    <div class="card">
      <div class="card-body">
        today is: <h4 id="activeDate">31 December 2023</h4>
      </div>
    </div>
    <div class="right-section col-lg-6">
        <br>
        <section name="journal">
          <div class="card">
            <div class="card-header"><b>Journal</b></div>
            <div id='journal-card' class="card-body">
              <!-- start generation here-->

                </form>
@endsection