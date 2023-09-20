@extends('frontend/layouts/based')
@section('title')
   Contact us
@endsection


@section('content')
<section class="contact-section">
    <div class="contact-page">
<form action="" style="background-image: url({{ asset("logo/logo.jpeg") }})">
    <label for="">Full Name</label>
    <input type="text" placeholder="Full Name" required>
    <label for="">Subject</label>
    <input type="text" placeholder="Subject" required>
    <label for="">Message</label>
    <textarea name="" placeholder="Message" required id="" cols="30" rows="10"></textarea>
    <button>Send Message</button>
</form>
    </div>
</section>
@endsection
