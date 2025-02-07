<?php
/**
 * Content Loop Pattern 6.
 *
 * @package Newspack_Blocks
 */

return array(
	'title'         => __( 'Content Loop Pattern 6', 'newspack-blocks' ),
	'content'       => "<!-- wp:columns {\"className\":\"is-style-default\"} -->\n<div class=\"wp-block-columns is-style-default\"><!-- wp:column {\"width\":25} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"><!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showAvatar\":false,\"postsToShow\":1,\"categories\":[],\"typeScale\":3,\"imageScale\":1} /-->\n\n<!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showImage\":false,\"showAuthor\":false,\"showAvatar\":false,\"mediaPosition\":\"left\",\"categories\":[],\"typeScale\":2,\"imageScale\":1} /--></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":25} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"><!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showAvatar\":false,\"postsToShow\":1,\"categories\":[],\"typeScale\":3,\"imageScale\":1} /-->\n\n<!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showImage\":false,\"showAuthor\":false,\"showAvatar\":false,\"mediaPosition\":\"left\",\"categories\":[],\"typeScale\":2,\"imageScale\":1} /--></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":25} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"><!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showAvatar\":false,\"postsToShow\":1,\"categories\":[],\"typeScale\":3,\"imageScale\":1,\"mobileStack\":true} /-->\n\n<!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showImage\":false,\"showAuthor\":false,\"showAvatar\":false,\"mediaPosition\":\"left\",\"categories\":[],\"typeScale\":2,\"imageScale\":1} /--></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":25} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"><!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showAvatar\":false,\"postsToShow\":1,\"categories\":[],\"typeScale\":3,\"imageScale\":1,\"mobileStack\":true} /-->\n\n<!-- wp:newspack-blocks/homepage-articles {\"className\":\"is-style-borders\",\"showExcerpt\":false,\"showImage\":false,\"showAuthor\":false,\"showAvatar\":false,\"mediaPosition\":\"left\",\"categories\":[],\"typeScale\":2,\"imageScale\":1} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
	'viewportWidth' => 1000,
	'categories'    => array( 'newspack-homepage-posts' ),
);
