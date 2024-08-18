@extends('layouts.user')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions or need assistance, feel free to reach out to us using the form below or email us directly at <a href="/contact">info@musically.com</a>.</p>

    <div class="contact-form mt-4">
        <form action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn2">Send Message</button>
        </form>
    </div>
</div>
@endsection
