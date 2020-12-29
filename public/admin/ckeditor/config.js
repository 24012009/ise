/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
CKEDITOR.dtd.$removeEmpty.i = 0;
CKEDITOR.dtd.$removeEmpty.span = 0;
CKEDITOR.timestamp='ABCD';
CKEDITOR.editorConfig = function( config ) {
    config.extraPlugins = 'image';
    config.extraPlugins = 'justify';
    config.extraPlugins = 'html5video,widget,widgetselection,clipboard,lineutils';
    config.extraPlugins = 'collapsibleItem';
    config.extraPlugins = 'btbutton,lineutils,widget,colorbutton';
    config.extraPlugins = 'colorbutton,panelbutton,button,floatpanel,panel';

    config.allowedContent = true;
    config.extraAllowedContent = 'div(*)';
};
