$(document).ready(function() {
    // Event handler for the button click
    $("#saveButton").click(function() {
        var selectedImages = {
            shirts: [],
            skirts: [],
            trousers: [],
            suits: []
        };

        // Retrieve the selected images
        $("#shirts img.selected").each(function() {
            selectedImages.shirts.push($(this).attr("src"));
        });

        $("#skirts img.selected").each(function() {
            selectedImages.skirts.push($(this).attr("src"));
        });

        $("#trousers img.selected").each(function() {
            selectedImages.trousers.push($(this).attr("src"));
        });

        $("#suits img.selected").each(function() {
            selectedImages.suits.push($(this).attr("src"));
        });

        // Send the selected images to the server using AJAX
        $.ajax({
            type: "POST",
            url: "deletepicture.php",
            data: selectedImages,
            success: function(response) {
                console.log(response);
                // Handle the response from the server
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                // Handle the error
            }
        });
    });

    // Event handler for image click
    $(".shirts img, .skirts img, .trousers img, .suits img").click(function() {
        $(this).toggleClass("selected");
    });
});
