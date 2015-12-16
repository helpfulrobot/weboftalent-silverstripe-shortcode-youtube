#YouTube ShortCode Handler
This module allows YouTube videos to be entered as short codes.  It is based on the SSBits tutorial http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/ and adpated to work with Silverstripe 3.

##Functionality
Videos can be entered into a page using the YouTube code (the v parameter in a YouTube URL).
```
[YouTube id='_yY3Gu8HbzE']
```
The following parameters are also permitted:
* _autoplay_ - set this value to anything, e.g. 1 or true, to enable autoplay on the embedded video
- _caption_ - Text to display after an embedded video.  This can either be passed as an attribute or as follows ```[YouTube id='_yY3Gu8HbzE']This is the caption[/YouTube]```
- _height_ - set the height of the video
- _width_ - set the width of the video


## Build Info
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/build-status/master)
