<?php

namespace ReesMcIvor\Labels\Nova;

use App\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use ReesMcIvor\Labels\Models\Label;

class Labels extends Resource
{

    public static $model = Label::class;

    public static $title = 'name';

    public static $search = [
        'id',
        'name'
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            BelongsTo::make('Parent', 'parent', self::class)
                ->nullable()
                ->display('name'),
        ];
    }

    public function cards(NovaRequest $request)
    {
        return [];
    }

    public function filters(NovaRequest $request)
    {
        return [];
    }

    public function lenses(NovaRequest $request)
    {
        return [];
    }

    public function actions(NovaRequest $request)
    {
        return [];
    }
}
