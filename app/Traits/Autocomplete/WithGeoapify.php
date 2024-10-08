<?php

namespace App\Traits\Autocomplete;

use App\Data\AutocompleteData;
use geoPHP;

trait WithGeoapify
{
    public function formatSuggestions($suggestions)
    {
        $result = [];
        
        foreach ($suggestions as  $v) {
            $title = null;
            $subtitle = null;
            $title = htmlspecialchars( $v->state. "  ".($v->county ?? null ). ' '.($v->city ?? null),ENT_QUOTES);
            $subtitle = htmlspecialchars($v->country." type:".$v->resultType,ENT_QUOTES);
            $autocomplete = AutocompleteData::from([
                'id' => $v->id,
                'title' => $title,
                'subtitle' => $subtitle,
                'position'=>['lat'=>$v->lat,'lon'=>$v->lon],
            ]);
            $result[] = $autocomplete;
        }
        if(!count($result)) {
            $o = AutocompleteData::from([
                'title' => 'Nothing found',
                'subtitle' => 'Please try another location',
            ]);
            $result[] = $o;
        }
        return $result;
    }
    public function toWKT ($polygon) {
        $geometry = geoPHP::load(json_encode($polygon), 'json');
        return $geometry->out('wkt');
    }
    public function toJSON ($polygon) {
        $geometry = geoPHP::load($polygon,'wkt');
        return $geometry->out('json');
    }
}