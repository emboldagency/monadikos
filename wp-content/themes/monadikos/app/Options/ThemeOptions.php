<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('theme_options');

        $fields
            ->addImage('header_logo')
            ->addImage('footer_logo')
            ->addWysiwyg('sale_banner')
            ->addRepeater('header_icons')
                ->addImage('icon')
                ->addLink('icon_link');


        return $fields->build();
    }
}
