/* If statement removed from social_sharing_toolkit.php - around line 720 */


if (current_theme_supports('post-thumbnails')) {
					if ($media = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))) {
			  			if (is_array($media)) {
			  				$media = $media[0];
			  			} else {
			  				$media = '';	
			  			}
					}
				}