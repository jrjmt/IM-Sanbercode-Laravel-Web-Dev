@extends('layouts.master')
@section ('title')
    Register
@endsection

@section('content')
    <form action="{{ route('welcome') }}" method="POST">
    @csrf

        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label>Nationality</label><br><br>
            <select name="nationality"><br>
                <option>Indonesian</option>
                <option>Singapore</option>
                <option>Malaysian</option>
                <option>Australian</option>
                </select><br><br>

        <label>Language Spoken:</label><br>
            <input type="checkbox" name="lang[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
            <input type="checkbox" name="lang[]" value="English">English<br>
            <input type="checkbox" name="lang[]" value="Other">Other<br><br>

        <label>Bio:</label><br>
            <textarea name="bio" rows="8" cols="40" required></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
@endsection