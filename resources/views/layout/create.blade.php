<x-app>
    <div class="container mt-5 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-left">
            <h2 class="mb-4">Create New Record</h2>

            <form action="{{ route('student.create') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">Full Name</label>
                    <input style="width: 400px" type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name" required>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="age" class="form-label">Age</label>
                    <input style="width: 400px" type="number" name="age" id="age" class="form-control" value="{{ old('age') }}"required>
                    @error('age')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="address" class="form-label">Address</label>
                    <input style="width: 400px" type="text" name="address" id="address" class="form-control" value="{{ old('address') }}"  required>
                    @error('address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select style="width: 400px" name="gender" id="gender" class="form-control" required>
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
            </form>
        </div>
    </div>
</x-app>
