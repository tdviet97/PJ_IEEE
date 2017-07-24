function yourFunction() {
    var form = document.getElementById('uploadform');
    form.submit(function() { return false; });
    var fullPath = document.getElementById('pdf1').value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
    }


    $.ajax({
        type: "POST",
        url: "readpdf/gettext",
        data: { file: filename },
        dataType: "text",
        success: function(data) {

        }
    }); // you ha



}