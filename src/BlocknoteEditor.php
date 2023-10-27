<?php

namespace Jubeki\FilamentBlocknote;

use Filament\Forms\Components\Concerns\HasFileAttachments;
use Filament\Forms\Components\Contracts\HasFileAttachments as HasFileAttachmentsContract;
use Filament\Forms\Components\Field;

class BlocknoteEditor extends Field implements HasFileAttachmentsContract
{
    use HasFileAttachments;

    protected string $view = 'filament-blocknote::editor';
}
