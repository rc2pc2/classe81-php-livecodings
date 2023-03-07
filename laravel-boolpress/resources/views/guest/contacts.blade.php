
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('guest.contacts.store') }}" method="POST" class="p-5" enctype="multipart/form-data" >
                @csrf
                @method('POST')

                @if($errors->any())
                <div class="error-wrapper">
                    <div class="alert alert-danger ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif



                <div class="mb-3">
                    <label for="contact_name" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="contact_name" placeholder="Insert your name" name="name" value="{{ old('name') }}">
                </div>


                <div class="mb-3">
                    <label for="contact_email" class="form-label">
                        Email
                    </label>
                    <input type="text" class="form-control" id="contact_email" placeholder="Insert your email" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="contact_message" class="form-label">
                        Message:
                    </label>
                    <textarea class="form-control" id="contact_message" rows="10" name="message">{{ old('message') }}</textarea>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Send contact form
                    </button>
                </div>
            </form>

        </div>




    </div>


</div>
@endsection
