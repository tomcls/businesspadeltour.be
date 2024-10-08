<?php
namespace App\Traits\Wordpress;

use App\Data\AutocompleteData;

trait WithWordpress
{
    public function formatArticleSuggestions($suggestions)
    {
        $result = [];
        foreach ($suggestions as  $post) {
            $autocomplete = AutocompleteData::from([
                'id' => $post->articleId,
                'title' => htmlspecialchars( $post->title,ENT_QUOTES),
                'subtitle' => ' ',
                'image' => $post->image,
            ]);
            $result[] = $autocomplete;
        }
        return $result;
    }

    public function formatReportageSuggestions($suggestions)
    {
        $result = [];
        foreach ($suggestions as  $post) {
            $autocomplete = AutocompleteData::from([
                'id' => $post->reportageId,
                'title' => htmlspecialchars( $post->title,ENT_QUOTES),
                'subtitle' => ' ',//$post->subtitle,
                'image' => $post->image,
            ]);
            $result[] = $autocomplete;
        }
        return $result;
    }
}
