<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>TP 6 | {{ Route::currentRouteName() }}</title>
</head>
<body>
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-blue-200 rounded-lg p-3 shadow-lg w-2/6">
            <form action="{{ route('imageUpload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="font-semibold text-center text-2xl mb-4">Image Upload</h2>
                <div>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-500 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg id="icon" class="mx-auto h-12 w-12 text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="mt-8 mb-2">
                                <img id="img_preview" class="hidden w-4/6 mx-auto">
                            </div>
                            <div class="flex justify-center text-sm text-gray-600">
                                <label for="image_upload" class="relative cursor-pointer rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="image_upload" name="image_upload" type="file" class="sr-only" onchange="previewImage()">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">JPG up to 500KB</p>
                        </div>
                    </div>
                </div>
                {{-- <input type="file" name="image_upload" id="image_upload" accept="jpg" onchange="previewImage()"/> --}}
                <div class="flex justify-center mt-4">
                    <button type="submit" name="submitButton" class="rounded-md bg-blue-500 hover:bg-blue-600 text-white px-3 py-2">Save</button>
                </div>
            </form>
            <div class="text-center">
                @if (!empty($message))
                    {{ $message }}
                @endif
                @error('image_upload')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image_upload');
            const imgPreview = document.querySelector('#img_preview');
            const icon = document.querySelector('#icon');

            icon.style.display = 'none';
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>
</html>