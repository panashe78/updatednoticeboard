
    <h1>Edit Profile</h1>

    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT for update -->

        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <label for="national_id_number">National ID Number</label>
            <input id="national_id_number" name="national_id_number" type="text" value="{{ old('national_id_number', $user->national_id_number) }}">
        </div>

        <div>
            <label for="dob">Date of Birth</label>
            <input id="dob" name="dob" type="date" value="{{ old('dob', $user->dob) }}">
        </div>

        <div>
            <label for="profile_photo">Profile Photo</label>
            <input id="profile_photo" name="profile_photo" type="file" accept="image/*">
        </div>

        <div>
            <label for="national_id_photo">National ID Photo</label>
            <input id="national_id_photo" name="national_id_photo" type="file" accept="image/*">
        </div>

        <button type="submit">Update</button>
    </form>
