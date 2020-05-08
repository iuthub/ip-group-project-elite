@extends('layouts/main')
@section('content')
    <div class="wrap">
      @include('partials/navbar')
        <section class="ReservationBg">
          <div class="container">
            <div class="row">
              <div class="reservation height">
                <div class="reservationTitle">
                  <h1>Reservation</h1>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="reserve-form">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="SelectPeople" class="col-sm-2 control-label">
                      People
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </label>
                    <select class="form-control col-sm-8" id="SelectPeople">
                      <option value="1">1 people</option>
                      <option value="2">2 people</option>
                      <option value="3">3 people</option>
                      <option value="4">4 people</option>
                      <option value="10">10 people</option>
                    </select>
                  </div>
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Time
                      <i class="fa fa-clock" aria-hidden="true"></i>
                    </label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="hh:mm" class="form-control">
                    </div>
                  </div>
                  
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Date
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="products-btn reserve-btn">
                    <a class="creative" href="products.html">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Book</a
                    >
                </div>
                </form>
                <div class="reserve-img">
                  <img src="img/reserve_bg.png" alt="">
                </div>
              </div>

            </div>
          </div>
        </section>
     @include('partials/footer')
  </div>
  @endsection   