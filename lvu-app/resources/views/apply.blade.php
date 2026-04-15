<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Online | Lumina Verde University</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0, 77, 64, 0.78), rgba(0, 77, 64, 0.78)),
                        url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1600&q=80') no-repeat center center / cover;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .apply-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 15px;
        }

        .apply-card {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.96);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
            overflow: hidden;
        }

        .apply-header {
            background-color: #097969;
            color: #FFD700;
            padding: 30px;
            text-align: center;
        }

        .apply-header h1 {
            margin: 0;
            font-weight: 700;
        }

        .apply-header p {
            margin-top: 10px;
            margin-bottom: 0;
            color: #f5f5f5;
        }

        .apply-body {
            padding: 35px;
        }

        .form-label {
            font-weight: 600;
            color: #004D40;
        }

        .btn-lvu {
            background-color: #097969;
            color: #fff;
            border: none;
        }

        .btn-lvu:hover {
            background-color: #065f52;
            color: #fff;
        }

        .btn-outline-lvu {
            border: 1px solid #097969;
            color: #097969;
        }

        .btn-outline-lvu:hover {
            background-color: #097969;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="apply-wrapper">
        <div class="apply-card">
            <div class="apply-header">
                <h1>Apply Online</h1>
                <p>Lumina Verde University — Admissions Application Form</p>
            </div>

            <div class="apply-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Please fix the following:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('apply.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Middle Name</label>
                            <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Birth Date</label>
                            <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Academic Level</label>
                            <select name="academic_level" class="form-select">
                                <option value="">Select Level</option>
                                <option value="Undergraduate" {{ old('academic_level') == 'Undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                                <option value="Graduate" {{ old('academic_level') == 'Graduate' ? 'selected' : '' }}>Graduate</option>
                                <option value="College" {{ old('academic_level') == 'College' ? 'selected' : '' }}>College</option>
                                <option value="Professional Certification" {{ old('academic_level') == 'Professional Certification' ? 'selected' : '' }}>Professional Certification</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Program Applied For</label>
                            <input type="text" name="program_applied" class="form-control" value="{{ old('program_applied') }}">
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-lvu px-4">Submit Application</button>
                        <a href="http://127.0.0.1:5500/index.html" class="btn btn-outline-lvu px-4">Back to Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>