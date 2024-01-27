jQuery(document).ready(function($) {

    // 1. editor added js
    $('#editor').summernote({
        height: 500,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
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
                $('.image-container').html("<img src='" + imageUrl + "' alt='Generated Image' style='width: 200px; margin-bottom: 20px;'> <input type='hidden' value='" + imageUrl + "' name='generate_image_url' >");
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
        const userInput = $('.content_on_show').html();
    
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
                $('.note-editable p').html(assistantMessage);
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
  form_validation(3, 4);

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
  previous_step(4, 3);

  // 5. toggle button
  $('.image_generator_btn input').on('change', function() {
    $('.ai_image').toggleClass('show');
    $('.upload_image').toggleClass('hide');
  });

  // 6. preview script
  $('.title_on_change').on('input', function() {
    var title_value = $(this).val();
    $('.title_on_show').html(title_value);
  });
  $('#step_2_next_btn').on('click', function() {
    var content_value = $('.note-editable').html();
    $('.content_on_show').html(content_value);
    grammer_button_show();
  });
  $('#step_3_next_btn').on('click', function() {
      var img_copy = $('#preview_img').clone();
      $('.upload_on_image').html(img_copy);
  });

  // 7. co author multiselect
  $('.co_author_check').on('change', function(){
    var selectedValues = $('.co_author_check:checked').map(function() {
        return this.value;
    }).get();

    if (selectedValues.length <= 5) {
        $('.coauthor_hidden_input').val(selectedValues.join(','));
    } else {
        alert("You can select up to 5 values.");
        $(this).prop('checked', false);
    }
  });

  // 8. category multiselect
  $('.category_check').on('change', function(){
    var selectedValues = $('.category_check:checked').map(function() {
        return this.value;
    }).get();

    $('.category_hidden_input').val(selectedValues.join(','));
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

    var output2 = document.getElementById('preview_img2');


    output2.src = URL.createObjectURL(event.target.files[0]);
    output2.onload = function() {
        URL.revokeObjectURL(output2.src) // free memory
    }
};


// counterup js 
document.addEventListener('DOMContentLoaded', function () {
  const counterUp = window.counterUp.default;

  const callback = entries => {
      entries.forEach(entry => {
          const el = entry.target;
          if (entry.isIntersecting && !el.classList.contains('is-visible')) {
              counterUp(el, {
                  duration: 2000,
                  delay: 16,
              });
              el.classList.add('is-visible');
          }
      });
  };

  const IO = new IntersectionObserver(callback, { threshold: 1 });

  // Select all elements with class "counter" and observe each of them
  const elements = document.querySelectorAll('.counter');
  elements.forEach(el => {
      IO.observe(el);
  });
});