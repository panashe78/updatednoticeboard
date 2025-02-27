
<div class="container">
    <h1>Add Presenter</h1>
    <form action="{{ route('presenters.store', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Presenter Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="profile_photo">Profile Photo</label>
            <input type="file" class="form-control" id="profile_photo" name="profile_photo" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Presenter</button>
        <a href="{{ route('events.show', $event->id) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
