<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductApi extends Controller
{
    public function index()
    {
        return "{\"data\":[{\"id\":1,\"name\":\"Zboncak, Bednar and Medhurst\",\"price\":4433},{\"id\":2,\"name\":\"Durgan-Schmeler\",\"price\":4630},{\"id\":3,\"name\":\"Schulist-Cole\",\"price\":2130},{\"id\":4,\"name\":\"Daugherty, Pouros and Bergnaum\",\"price\":8855},{\"id\":5,\"name\":\"Koelpin, Beahan and Sporer\",\"price\":7545},{\"id\":6,\"name\":\"Leannon-Leannon\",\"price\":7080},{\"id\":7,\"name\":\"Erdman and Sons\",\"price\":1716},{\"id\":8,\"name\":\"Wisoky and Sons\",\"price\":8656},{\"id\":9,\"name\":\"ttt\",\"price\":100},{\"id\":10,\"name\":\"ttt\",\"price\":200},{\"id\":11,\"name\":\"test\",\"price\":100},{\"id\":12,\"name\":\"helado\",\"price\":1000},{\"id\":13,\"name\":\"Tv mejor\",\"price\":1000},{\"id\":17,\"name\":\"aaa\",\"price\":13}],\"collection-data\":{\"id\":\"SKU678743\",\"link\":\"http:\\/\\/localhost\\/laravelcourse\\/public\\/product\\/create\"}}";
    }
}