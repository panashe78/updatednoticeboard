
<h1>Edit Chef</h1>

<form action="{{ route('chefs.update', $chef) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $chef->name }}" required>
    <input type="file" name="profile_photo">
    <textarea name="experience" required>{{ $chef->experience }}</textarea>
    <select name="restaurant_id" required>
        @foreach($restaurants as $restaurant)
            <option value="{{ $restaurant->id }}" {{ $restaurant->id == $chef->restaurant_id ? 'selected' : '' }}>
                {{ $restaurant->name }}
            </option>
        @endforeach
    </select>
    <input type="number" name="rating" value="{{ $chef->rating }}" min="0" max="5">
    <button type="submit">Update</button>
</form>
