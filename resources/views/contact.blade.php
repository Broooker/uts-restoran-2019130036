@extends('layouts.master5')
@section('title', 'Contact')
@section('content')
    <h1>Contact Us</h1><br>
    <div class="container">
        <div class="text">Give Me Some Message</div>
        <form action="#">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Nama Depan</label>
                </div>
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Nama Belakang</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Alamat Email</label>
                </div>
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Nama Website</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" required></textarea>
                    <div class="underline"></div>
                    <label for="">Tulis Pesan Anda</label>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit">
                </div>
            </div>
        </form>
    </div>
@endsection
