<script type="text/javascript">
tinymce.init({
  selector: 'kasusposisi',
  height: 350,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>

  <script type="text/javascript">
tinymce.init({
  selector: "disposisi",
  height: 500,
  toolbar: "mybutton",
  menubar: false,
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],
  
  setup: function(editor) {
    editor.addButton('mybutton', {
      type: 'splitbutton',
      text: 'My button',
      icon: false,
      onclick: function() {
        editor.insertContent('&nbsp;<strong>You clicked the button!</strong>');
      },
      menu: [{
        text: 'Menu item 1',
        onclick: function() {
          editor.insertContent('&nbsp;<em>You clicked menu item 1!</em>');
        }
      }, {
        text: 'Menu item 2',
        onclick: function() {
          editor.insertContent('&nbsp;You clicked menu item 2!');
        }
      }]
    });
  }
});
  </script>
