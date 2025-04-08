<x-app>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-start">
            <!-- Left side: Form -->
            <div class="col-md-6">
                <h2 class="mb-4">Create New Record</h2>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('student.store') }}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Full Name</label>
                        <input style="width: 100%" type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="age" class="form-label">Age</label>
                        <input style="width: 100%" type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required>
                        @error('age')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input style="width: 100%" type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gender" class="form-label">Gender</label>
                        <select style="width: 100%" name="gender" id="gender" class="form-control" required>
                            <option value="">-- Select Gender --</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ route('welcome') }}" role="button">
                        Cancel
                    </a>
                </form>
            </div>

            <!-- Right side: Student list -->
            <div class="col-md-6">
                <h4 class="mb-4">Student Records</h4>
                @foreach ($studs as $stud)
                    <div class="mb-2 p-3 border rounded shadow-sm d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $stud->name }}</strong><br>
                            <small>{{ $stud->age }} years old, {{ $stud->address }} ({{ $stud->gender }})</small>
                        </div>
                        <div>
                            <a href="{{ route('student.edit', ['student' => $stud->id]) }}" class="btn btn-sm btn-outline-secondary me-2">Edit</a>
                            <a href="{{ route('student.destroy', ['student' => $stud->id]) }}" class="btn btn-sm btn-outline-danger"
                               onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app>
