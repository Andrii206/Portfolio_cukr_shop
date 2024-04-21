<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const PRICE = 'price';
    public const CATEGORY_ID = 'category_id';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::PRICE => [$this, 'price'],
            self::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function price(Builder $builder, $order = 'asc')
    {
        $builder->orderBy('price', $order);
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}

?>