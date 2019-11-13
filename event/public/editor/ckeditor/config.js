/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    config.language = 'vi';
    config.uiColor = '#AADC6E';
    config.allowedContent = true;
    config.fullPage = true;
};
CKEDITOR.config.allowedContent = true;

CKEDITOR.editorConfig = function(config) {
    config.filebrowserBrowseUrl = 'editor/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = 'editor/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = 'editor/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
