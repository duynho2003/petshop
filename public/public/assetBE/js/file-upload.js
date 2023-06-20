(function($) {
  'use strict';
  $(function() {
    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function(e) {
      if(this.files.length <= 1) {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      } else {
        $.each(this.files, (index, value) => {
          var fileName = value.name;
          $(this).parent().find('.filenames').append('<div class="name">' + fileName + '</div>');
        });
      };
    });
  });
})(jQuery);