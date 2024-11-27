
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
 </head>
<body>
<div class="container">
    <h1>Create a New Post</h1>

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->

    <!-- Form -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <!-- CSRF token for security -->

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <!-- Content -->
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>
</div>
</body>
</html>
