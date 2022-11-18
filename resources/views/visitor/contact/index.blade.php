@extends('visitor.theme')
@section("contact" , "colorlib-active")
@section("contents")
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> {{ $contact->address }}</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel:/{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="{{ $contact->website }}">{{ $contact->website }}</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="contact/create/message" method="POST" autocomplete="off" novalidate>
                        @method("GET")
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>




@endsection
