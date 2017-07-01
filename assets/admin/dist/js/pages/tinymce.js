tinymce.init({
  selector: 'kasusposisi',
  height: 250,
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

tinymce.init({
  selector: "textarea1",
  height: 250,
  toolbar: "mybutton",
  menubar: false,
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],
  
  setup: function(editor) {
    editor.addButton('mybutton', {
      type: 'splitbutton',
      text: 'Tindakan:',
      icon: false,
      onclick: function() {
        editor.insertContent('&nbsp;<strong>You clicked the button!</strong>');
      },
      menu: [{
        text: 'Dihentikan',
        onclick: function() {
          editor.insertContent('&nbsp;<strong>Perkara dihentikan berdasarkan : </strong>');
        }
      }, {
        text: 'Dialihkan',
        onclick: function() {
          editor.insertContent('&nbsp;<STRONG>Perkara dialihkan ke :</STRONG>');
        }
      }]
    });
  }
});

