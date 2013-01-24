<?php

class YouTubeShortCodeHandler {

    // taken from http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/ and adapted for SS3
    public static function parse_youtube( $arguments, $caption = null, $parser = null ) {
//  public static function link_shortcode_handler($arguments, $content = null, $parser = null) {

        error_log("YT SHORT CODE PARSER");
        // first things first, if we dont have a video ID, then we don't need to
        // go any further
        if ( empty( $arguments['id'] ) ) {
            return;
        }

        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['YouTubeID'] = $arguments['id'];
        //play the video on page load
        $customise['autoplay'] = false;
        //set the caption
        $customise['caption'] = $caption ? Convert::raw2xml( $caption ) : false;
        //set dimensions
        $customise['width'] = 640;
        $customise['height'] = 385;

        //overide the defaults with the arguments supplied
        $customise = array_merge( $customise, $arguments );

        //get our YouTube template
        $template = new SSViewer( 'YouTube' );

        //return the customised template
        return $template->process( new ArrayData( $customise ) );

    }
}
?>