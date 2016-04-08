@extends('templates.app')

@section('title')
Royal Dunfermline Tombs
@endsection

@section('content')


<div class="container">
  <!-- Main header image here -->
  <div class="row" style="margin-bottom: 10px;">
    <img class="img-responsive" src="/images/abbey.jpg" alt="Dunfermine Abbey" style="max-width:100%;" />
  </div>
  <div class="row" style="min-height: 100px;">
    <div class="col-md-3">
        <img class="img-responsive" src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="placeholder" />
    </div>
    <div class="col-md-9">
        <h4 style="padding-top: 50px;">Learn about the history of the Tombs with our timeline <a href="/past">click here</a>.</h4>
    </div>
  </div>
  <div class="row" style="min-height: 100px; padding: 10px 0px;">
    <div class="col-md-3">
        <img class="img-responsive" src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="placeholder" />

    </div>
    <div class="col-md-9">
        <h4 style="padding-top: 50px;">Learn about the Abbey and Tombs now in their current state and find out how to visit <a href="/present">click here</a>.</h4>
    </div>
  </div>
  <div class="row" style="min-height: 100px;">
    <div class="col-md-3">
        <img class="img-responsive" src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="placeholder" />
    </div>
    <div class="col-md-9">
        <h4 style="padding-top: 50px;">Learn about what's next for the Tombs here in Dunfermline <a href="/future">click here</a>.</h4>
    </div>
  </div>
</div>
@endsection
