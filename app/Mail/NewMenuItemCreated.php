<?php

namespace App\Mail;

use App\Models\Menu;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMenuItemCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $menuItem;

    public function __construct(Menu $menuItem)
    {
        $this->menuItem = $menuItem;
    }

    public function build()
    {
        return $this->subject('New Menu Item Created!')
                    ->view('emails.new_menu_item_created'); // Create this view
    }
}