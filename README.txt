
Update Version 1.0.  This update includes a number of enhancements and bug fixes to V1.3.4 of Camera

NOTE: This update is provided by Geoff Squires, and NOT by the original author of Camera, therefor don't expect him
to know about the alterations that have been made


** This version is not supported by me. I simply took the additions posted to the google groups and combined them into one package.**


RELEASE NOTES:


- compatible with JQuery 1.10.2 - requires 3rd party to determin browser for loader type.  This can cause problems with old versions of IE
  The default loader has been changed to bar. Working on alternative compatible options.



- new functionality / option: advthumbnail 
  
  Used to disable or enable a hover effect over thumbnails, whereby the thumbnails do not advance while in hover state.

  default: true  (thumbnails advance regardless)
           false (thumbnails do not advance while mouse is hovering )

	

- new functionality: keyboard use. Allows right and left arrow to act as clicking on prev and next arrows.



- bug fix / new functionality: single image

  JS supports specific options for single image. options can be changed to determine effect on default appearance when single image is present, like pagination, thumbnails, auto advance, etc.



- new functionality: directory read.  Reads all images (jpg, jpeg, gif, png, bmp) from a specified directory on the server.

  option: readDir - directory on the server holding the images (relative to the getDir.php file)
  option: readThumbs(optional) - directory on the server holding the thumbnails (relative to the getDir.php file)

  Absolute addressing is not permitted (i.e. www.website.com/images/), as the PHP file executes on the server. The default setup assumes a directory structure similar to this:

	http://YOURDOMAIN.com

		basic.html
			
			dir:scripts
			
				getDir.php
				camera_updateV1_0.js

			dir:images
				
				img_1.jpg

  This assumes that the beginning of the images directory branch begins in the same directory as the scripts branch. If this is different, the JS will need to be changed.

  The JS MUST be altered for this to work.It must include the location of the getDir.php file on the server. It is set to a default and non-functional value in the release.

  This will NOT work on a local machine, unless you have a server running.



- a few minor bug fixes, code cleanup, redundancy elimination, etc. (ongoing)

