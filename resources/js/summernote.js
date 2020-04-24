/**
 * Include summernote wysiwysg lib.
 */

try {
    window.summernote = require('summernote');

    $(document).ready(function() {
        $('#summernote').summernote();
    });
} catch (e) {}
