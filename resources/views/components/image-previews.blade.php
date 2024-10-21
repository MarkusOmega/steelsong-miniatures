<div class="mt-5 d-flex">
    @foreach($product->getMedia() as $media)
        <div class="image-preview mx-2" style="position:relative;">
            <img src="{{ $media->getUrl() }}" alt="product image" >
            <a id="delete-{{ $media->id }}" data-id="{{ $media->id }}" class="image-delete-button" href="#" style="position:absolute; top: 15px; right: 15px; border-radius: 5px; background:red; color: #ffffff; text-decoration: none; padding: 5px;">delete</a>
        </div>
    @endforeach
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function (e) {
        var allButtons = document.querySelectorAll('[id^="delete-"]');
        
        for (var i = 0; i < allButtons.length; i++) {
            allButtons[i].addEventListener('click', function (e) {
                e.preventDefault();

                // Get the data to send
                let data = e.target.getAttribute('data-id');

                // Prepare the request
                let xhr = new XMLHttpRequest();
                let url = "{{ route('media.destroy', ['media' => "data"]) }}";  // Laravel route URL

                xhr.open("POST", url, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                // Add CSRF token for Laravel
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Handle the response
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Success: Display the response
                        let response = JSON.parse(xhr.responseText);
                        alert(response.message);

                        e.target.parentNode.remove();
                    } else if (xhr.readyState === 4) {
                        // Error handling
                        alert('Error: ' + xhr.responseText);
                    }
                };

                // Send the data
                xhr.send("data=" + encodeURIComponent(data) + "&_token=" + token);
            });
        }

    });
</script>