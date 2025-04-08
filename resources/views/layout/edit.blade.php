<x-app>
    <div class="container mt-5">
        @if(isset($editStudent))
        <form action="{{ route('student.update',['student'=>$editStudent->id]) }}" method="post">
            @method('put')
            @else
            <form action="{{ route('student.store') }}" method="post">

                @endif
                @csrf


                <div class="row justify-content-center align-items-start">
                    <!-- Left side: Form -->
                    <div class="col-md-6">
                        <h2 class="mb-4">Update Student Record</h2>

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif


                        <div class="mb-4">
                            <label for="name" class="form-label">Full Name</label>
                            <input style="width: 100%" type="text" name="name" class="form-control"
                                value="{{ old('name', $editStudent->name ) }}" placeholder="Enter name" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="age" class="form-label">Age</label>
                            <input style="width: 100%" type="number" name="age" class="form-control"
                                value="{{ old('age', $editStudent->age) }}" required>
                            @error('age')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label">Address</label>
                            <input style="width: 100%" type="text" name="address" class="form-control"
                                value="{{ old('address', $editStudent->address) }}" required>
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select style="width: 100%" name="gender" class="form-control" required>
                                <option value="">-- Select Gender --</option>
                                <option value="male" {{ old('gender', $editStudent->gender)=='male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $editStudent->gender)=='female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender', $editStudent->gender)=='other' ? 'selected' : '' }}>Other</option>
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
        @foreach ($student as $studs)
        <div class="mb-2 p-3 border rounded shadow-sm d-flex justify-content-between align-items-center">
            <div>
                <strong>{{ $studs->name }}</strong><br>
                <small>{{ $studs->age }} years old, {{ $studs->address }} ({{ $studs->gender }})</small>
            </div>
            <div>
                <a href="{{ route('student.edit', ['student' => $studs->id]) }}"
                    class="btn btn-sm btn-outline-secondary me-2">Edit</a>
                <a href="{{ route('student.destroy', ['student' => $studs->id]) }}" class="btn btn-sm btn-outline-danger"
                    onclick="return confirm('Are you sure?')">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    </div>
</x-app>