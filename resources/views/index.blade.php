<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="mt-5 col-8 mx-auto">
            <div class="card mt-5 shadow border-1 border-primary">
                <div class="card-header text-center h4 bg-primary rounded text-light">
                    Comment Section
                </div>
                <div class="card-body">
                    <div class="p-3">
                        <form action="{{ route('home.post.comment') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="comment" class="form-label">Comment:</label>
                                <textarea name="comment" id="comment" class="form-control" rows="3">{{ old('comment') }}</textarea>
                                @error('comment')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-sm">Post</button>
                            </div>
                        </form>
                    </div>

                    <hr>
                    {{-- @if ($comments != empty($comments))
                         @forelse ($comments as $index => $comment)
                            <div class="card shadow shadow-primary bg-transparent mb-2">
                                <div class="card-header bg-transparent">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span class="h6">{{ $comment['name'] }}</span> -
                                            <em>{{ $comment['time'] }}</em>
                                        </div>
                                        <div>
                                            <button class="bg-transparent text-danger border-0">X</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{ $comment['body'] }}
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="card shadow shadow-primary bg-transparent mb-2">
                            <div class="card-header bg-transparent">
                                <div class="card-body text-center">
                                    Sorry No Comments Yet
                                </div>
                            </div>
                        </div>
                        @endforelse
                    @endif --}}



                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
