@if(session('success'))
    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger border-0 alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row">
    <!-- Post Code Field -->
    <input type="hidden" name="hidden_id" value="{{ $post->id }}">
    <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="post_code" class="col-sm-2 col-form-label">Post Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="post_code" id="post_code" value="{{ old('post_code') ?? $post->post_code }}" required>
            @error('post_code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Post Name Field -->
    <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="post_name" class="col-sm-2 col-form-label">Post Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="post_name" id="post_name" value="{{ old('post_name') ?? $post->post_name }}" required>
            @error('post_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Post Summary Field -->
    <div class="mb-3 col-lg-12">
        <label for="post_summary" class="col-sm-2 col-form-label">Post Summary</label>
        <div class="col-sm-12">
            <textarea class="form-control" name="post_summary" id="post_summary" rows="3" required>{{ old('post_summary') ?? $post->post_summary }}</textarea>
            @error('post_summary')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Post Details Field -->
    <div class="mb-3 col-lg-12">
        <label for="post_details" class="col-sm-2 col-form-label">Post Details</label>
        <div class="col-sm-12">
            <textarea class="form-control" name="post_details" id="post_details" rows="5" required>{{ old('post_details') ?? $post->post_details }}</textarea>
            @error('post_details')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Feature Image Field -->
    <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="feature_image" class="col-sm-4 col-form-label">Feature Image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="feature_image" id="feature_image" onchange="loadFile(event)">

            @if(isset($post->feature_image))
            <!-- Display current image if it exists -->
            <img src="{{ asset('backend/image/' . old('feature_image', $post->feature_image)) }}" alt="Feature Image" id="output" class="img-thumbnail mt-2" style="width: 150px; height: auto;">
            @else
            <!-- Placeholder image when no image exists -->
            <img id="output" class="img-thumbnail mt-2" style="width: 150px; height: auto; display: none;">
            @endif

            @error('feature_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <!-- Status Field -->
    {{-- <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-select" name="status" id="status" required>
                <option value="">Select Status</option>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div> --}}

    <!-- Post Feature Field -->
    <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="post_feature" class="col-sm-4 col-form-label">Post Feature</label>
        <div class="col-sm-10">
            <input type="checkbox" name="post_feature" id="post_feature" value="1" {{ old('post_feature') ? 'checked' : '' }}>
            <label for="post_feature">Feature this post</label>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-3 col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <label for="submit" class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">{{ $buttonTitle }}</button>
        </div>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.display = 'block'; // Make sure the image is visible after selection
        output.onload = function() {
            URL.revokeObjectURL(output.src); // Free up memory after image is loaded
        }
    };
</script>
