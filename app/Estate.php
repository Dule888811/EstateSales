<?php

namespace App;

class Estate
{
    protected $fillable = [
        "estate_ad","ad_title","cities","hoods","estate_types","ads_id",
    ];

    protected $guarded = [];

    public function Ads()
    {
        return $this->belongsTo('App\Ads');
    }


}
