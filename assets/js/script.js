jQuery(document).ready(function($) {

    // 1. editor added js
    $('#editor').summernote({
        height: 500
    });   

    // 2. image generator api script
    var apiKey = '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';
    var url = 'https://api.openai.com/v1/images/generations';
    $('#generate_button').on('click', function(e) {
        e.preventDefault();
        var promptText = $('#image_generator_text').val();
        
        var data = {
            "model": "dall-e-3",
            "prompt": promptText,
            "n": 1,
            "size": "1024x1024"
        };
        $('#loadeer').show();
        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + apiKey
            },
            data: JSON.stringify(data),
            success: function(response) {
              if (response.data && response.data[0].url) {
                var imageUrl = response.data[0].url;
                // Display the image in HTML
                $('#image-container').html("<img src='" + imageUrl + "' alt='Generated Image'> <input type='hidden' value='" + imageUrl + "' name='generate_image_url' >");
              } else {
                console.log("Error: Unable to extract image URL from the response.");
              }
              $('#loadeer').hide();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
                $('#loadeer').hide();
            }
        });
    });


    $('#grammer_check_button').on('click', function () {
        const userInput = $('#editor').val();
    
        const data = {
          model: 'gpt-3.5-turbo',
          messages: [
            {
              role: 'system',
              content: 'You will be provided with statements, and your task is to convert them to standard English.',
            },
            {
              role: 'user',
              content: userInput,
            },
          ],
          temperature: 0.7,
          max_tokens: 64,
          top_p: 1,
        };
    
        $.ajax({
          url: 'https://api.openai.com/v1/chat/completions',
          type: 'POST',
          contentType: 'application/json',
          headers: {
            Authorization: `Bearer ${apiKey}`,
          },
          data: JSON.stringify(data),
          success: function (response) {
            if (response.choices && response.choices.length > 0) {
                const assistantMessage = response.choices[0].message.content;
                $('#editor').val(assistantMessage);
                $('.note-editable p').text(assistantMessage);
            }
          },
          error: function (error) {
            console.error('Error:', error);
            // Handle errors here
          },
        });
    });


    // 3. step article
    function form_validation(id1, id2){
      $(`#step_${id1}_next_btn`).on('click', function(e) {
          e.preventDefault();
          
          $(`#step${id1}`).hide();
          $(`#step${id2}`).show();
      });
  }
  form_validation(1, 2);
  form_validation(2, 3);

  // 4. Previous Step
    function previous_step(id1, id2){
      $(`#step_${id1}_prev_btn`).on('click', function(e) {
        e.preventDefault();
    
        $(`#step${id1}`).hide();
        $(`#step${id2}`).show();
      });
  }
  previous_step(2, 1);
  previous_step(3, 2);

  // 5. toggle button
  $('.image_generator_btn input').on('change', function() {
    $('.ai_image').toggleClass('show');
    $('.upload_image').toggleClass('hide');
  });

});


// Upload Preview Js
var loadFile = function(event) {
            
    var input = event.target;
    var file = input.files[0];
    var type = file.type;

   var output = document.getElementById('preview_img');


    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};