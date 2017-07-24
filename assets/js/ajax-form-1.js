function yourFunction() {
    window.result = '';
    var file_data = $('#pdf1').prop('files')[0];
    var form_data = new FormData();
    form_data.append('icon', file_data);
    $.ajax({
        url: 'compare/getfile',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(php_script_response) {

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
                    result = data;
                    $('#compare').mergely('lhs', data);
                }
            });
        }
    });
    jQuery(function($) {

    });
}