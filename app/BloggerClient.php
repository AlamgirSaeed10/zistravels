<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Google\Client;
use Google_Service_Blogger;
use Illuminate\Support\HtmlString;

class BloggerClient extends Model
{
    protected $guarded = [];

    public static function getAllBlogPosts($blogId)
    {
        $client = new Client();
        $client->setApplicationName('Applications of Bitcoin scripts');
        $client->setDeveloperKey(env('GOOGLE_API_KEY'));

        $service = new Google_Service_Blogger($client);

        try {
            $posts = $service->posts->listPosts($blogId);
            $formattedPosts = [];

            foreach ($posts as $post) {
                $title = $post->getTitle();
                $content = $post->getContent();
                $link = $post->getUrl();
                $images = [];
                preg_match_all('/<img[^>]+>/i', $content, $imageTags);
                foreach ($imageTags[0] as $imageTag) {
                    preg_match('/src="([^"]+)/i', $imageTag, $image);
                    if (isset($image[1])) {
                        $images[] = $image[1];
                    }
                }

                // Convert HTML content to plain format
                $plainContent = new HtmlString($content);
                $plainContent = strip_tags($plainContent);

                $formattedPost = [
                    'title' => $title,
                    'content' => $plainContent,
                    'link' => $link,
                    'images' => $images,
                ];

                $formattedPosts[] = $formattedPost;
            }

            return $formattedPosts;
        }  catch (\Exception $e) {
            return $e;
        }
    }
}
