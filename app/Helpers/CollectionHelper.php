<?php

namespace App\Helpers;

use Illuminate\Pagination\{LengthAwarePaginator, Paginator};
use Illuminate\Support\Collection;

class CollectionHelper{
    static public function paginate(
        $items,
        int $perPage=15,
        string $pageName='page',
        int $page=null
    ) {
        $page       = $page ?: Paginator::resolveCurrentPage();
        $options    = [
            'path'      => Paginator::resolveCurrentPath(),
            'pageName'  => $pageName,
        ];
        
        if(!($items instanceof Collection))
            $items = Collection::make($items);
        
        return new LengthAwarePaginator(
            $items->skip(($page-1) * $perPage)->take($perPage),
            $items->count(),
            $perPage,
            $page,
            $options,
        );
    }


    /**
     * Compare two collections for get neede
     * 
     * @return \Illuminate\Support\Collection
     */
    static public function getOrOld($newData, $oldData, array $properties=[]) :Collection
    {
        $new        = collect($newData);
        $old        = collect($oldData);
        $properties = empty($properties) ? $new->keys() : collect($properties);
        $result     = $properties->mapWithKeys(fn($item) => (
            [$item => $new[$item] ?? $old[$item] ?? null]
        ));

        return $result;
    }


    /**
     * Convert array/collection to fully object
     * 
     * @param array|\Illuminate\Support\Collection $data
     * @return object
     */
    static public function toObject($data) :object
    {
        return json_decode(json_encode($data));
    }
}