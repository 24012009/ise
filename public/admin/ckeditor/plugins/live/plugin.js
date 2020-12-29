path=CKEDITOR.basePath;
CKEDITOR.dialog.add( 'liveDialog',path + 'plugins/live/dialogs/live.js' );
CKEDITOR.plugins.add( 'live', {
    icons: 'live',
    init: function( editor ) {
        // Register the command.
        editor.addCommand( 'live', new CKEDITOR.dialogCommand( 'liveDialog' ) );
        editor.ui.addButton('Live',{
            label: 'Live',
            command: 'live',
            toolbar: 'insert'
        })
    }
});

