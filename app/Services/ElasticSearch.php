<?php

namespace App\Services;

class ElasticSearch extends BaseService
{
    protected $imageName = 'elasticsearch';
    protected $defaultPort = 9200;
    protected $prompts = [
        [
            'shortname' => 'volume',
            'prompt' => 'What is the Docker volume name?',
            'default' => 'elastic_data',
        ],
    ];

    protected $installTemplate = '-p "$port":9200 \
        -e "discovery.type=single-node"  \
        -v "$volume":/usr/share/elasticsearch/data \
        "$organization"/"$image_name":"$tag"';
}
