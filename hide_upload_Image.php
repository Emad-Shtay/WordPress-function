<?php

add_filter( 'media_view_strings', 'custom_media_uploader' );
function custom_media_uploader( $strings ) {
       unset( $strings['uploadFilesTitle'] ); //Upload Files
 return $strings;

}

?>