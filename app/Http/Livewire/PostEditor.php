<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostEditor extends Component
{
    public string $link;
    public string $salutation;
    public string $title;
    public string $body;
    public $userTimezone;
    public $localTime;
    public $scheduledStart;
    protected array $displayTimezones = [
        [
            'timezone' => 'Europe/Lisbon',
            'text' => 'Lisbon',
        ],
        [
            'timezone' => 'America/New_York',
            'text' => 'New York',
        ],
        [
            'timezone' => 'Asia/Kolkata',
            'text' => 'Ahmedabad',
        ],
    ];
    public string $result;

    public function mount()
    {
        $this->link = 'https://www.youtube.com/watch?v=CarrLUR3oeE';
        $this->salutation = 'Hey everyone!! 🤩';
        $this->title = 'Building a Twitter helper for Content Creators';
        $this->body = <<<EOT
        This app/tool/widget is a post-body generator.
        As a streamer, I want to share the schedule of my stream with the world, so probably I'm making a Tweet or other social media post.
        It helps with formatting, structure consistency, timezones, stream link, and eventually images, as well!
        EOT;
    }

    public function setBrowserTimezone($timezone)
    {
        ray($timezone);
    }

    public function render()
    {
        $this->localTime = now()->tz($this->userTimezone);

        return view('livewire.post-editor');
    }
}
