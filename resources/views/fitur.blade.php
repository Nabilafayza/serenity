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
        today is: <h4 id="activeDate">01 September 2023</h4>
      </div>
    </div>
    <div class="right-section col-lg-6">
        <br>
        <section name="journal">
          <div class="card">
            <div class="card-header"><b>Journal</b></div>
            <div id='journal-card' class="card-body">
              <!-- start generation here-->

              <!-- until here -->
            </div>
          </div>
          
          <div id="journalCard" class="collapse">
            <br>
            <div class="card">
              <div class="card-body">
                <b>New Journal:</b> <span id="newjournal-inputDate">20/05</span>
                <hr>
                <form id="form-newJournal">
                  <div class="form-group">
                    <label for="input-title">Title</label>
                    <input required autocomplete="off" type="text" class="form-control" id="input-title" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="input-journal">Write Something Here</label>
                    <textarea required class="form-control" id="input-journal" rows="3"></textarea>
                  </div>
                  <button id="btn-submit-newJournal" type="submit" class="btn btn-info btn-block">Add new journal entry </button>
                </form>
              </div>
            </div>
          </div>
          <br>
          <button type="btn-addJournal" class="btn btn-block btn-lg btn-outline-info" data-toggle="collapse" data-target="#journalCard">Write a Journal</button> 
        </section>
      </div>
@endsection