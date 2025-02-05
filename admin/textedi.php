   <textarea id="summernote" name="edittext" value=""><?php echo $fetch['courses_des']?><?php echo $fetch['about_des'] ?></textarea>
    <script>
      $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        width: 1000,
        tabsize: 1,
        height: 250,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
    </script>
