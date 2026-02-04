<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="{{ url('welcome', []) }}" method="get">
        <label for="">First name:</label><br><br>
        <input type="text" name="first_name" required><br><br>

        <label for="">Last name:</label><br><br>
        <input type="text" name="last_name" required><br><br>

        <label for="">Gender</label><br><br>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>

        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br>

        <input type="radio" id="other" name="gender" value="Other" required>
        <label for="other">Other</label><br><br>

        <label for="kebangsaaan">Nationality:</label><br><br>
        <select name="kebangsaan" id="kebangsaan" required>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
        </select><br><br>

        <label for="">Language Spoken:</label><br><br>

        <input type="checkbox" id="bahasa1" name="bahasa" value="Bahasa Indonesia" required>
        <label for="bahasa">Bahasa Indonesia</label><br>

        <input type="checkbox" id="bahasa2" name="bahasa" value="English">
        <label for="bahasa">English</label><br>

        <input type="checkbox" id="bahasa3" name="bahasa" value="Other">

        <label for="">Other</label><br><br>

        <label for="">Bio:</label><br><br>
        <textarea name="" id="" rows="10" cols="40" required></textarea><br><br>

        <button type="submit"><a href="{{ url('welcome', []) }}"></a>Submit</button>
    </form>
</body>

</html>