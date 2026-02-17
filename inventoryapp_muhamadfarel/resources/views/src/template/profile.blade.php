<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - SEODash</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/seodashlogo.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="w-75">
      <form action="{{ $profile ? route('profiles.update', $profile->id) : route('profiles.store') }}" 
      method="POST" class="p-4 bg-white shadow rounded">
        @csrf
        @if($profile)
            @method('PUT')
        @endif

        <div class="text-center mb-4">
            <h2 class="fw-bold">SEODash</h2>
            <h5>Profile</h5>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Umur</label>
            <input type="number" name="age" id="age" class="form-control" 
                  value="{{ old('age', $profile->age ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Biografi</label>
            <textarea name="bio" id="bio" rows="4" class="form-control" required>{{ old('bio', $profile->bio ?? '') }}</textarea>
        </div>

        @if(session('success'))
          <div class="alert alert-success mt-2">
              {{ session('success') }}
          </div>
        @endif

        <button type="submit" class="btn btn-success w-100">
            {{ $profile ? 'Update' : 'Simpan' }}
        </button>

        <a href="{{ url()->previous() }}" class="btn btn-secondary w-100 mt-2">Kembali</a>
    </form>

    </div>
  </div>

  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

