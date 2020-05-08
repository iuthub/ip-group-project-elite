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
    <section class="Contacts">
        <div class="contacts">
          <div class="container">
            <div class="row">
              <div class="contactsTitle">
                <h1>Contacts</h1>
              </div>
              <div class="contactsAndAdd col-md-6">
                <div class="contactAdress">
                  <h4>Address</h4>
                  <h5>street Ziyolilar,Tashkent</h5>
                </div>
                <div class="contactTel">
                  <h4>
                    Phone Numbers
                  </h4>
                  <h5>
                    +998 97 777 77 77
                  </h5>
                  <h5>
                    +998 71 000 00 00
                  </h5>
                </div>
              </div>
              <div class="contactForms col-md-6">
                <h2>Leave Comments</h2>
                <form>
                  <input
                    class="sign-name"
                    type="text"
                    name=""
                    id=""
                    placeholder="Name"
                  />
                  <input
                    class="sign-email"
                    type="email"
                    name=""
                    id=""
                    placeholder="Email"
                  />
                  <input
                    class="sign-sms"
                    type="text"
                    name=""
                    id=""
                    placeholder="Message"
                  />
                </form>
                <div class="products-btn contact-btn">
                  <h4><a href="#">Send</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     @include('partials/footer')
  </div>
  @endsection   