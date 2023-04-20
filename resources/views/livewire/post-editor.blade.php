<div
    wire:init="$set('userTimezone', Intl.DateTimeFormat().resolvedOptions().timeZone)"
    class="select-none"
>
    <div class="flex w-full">
        <div class="w-1/2">
            Inputs

            <div>
                Localtime: {{ $localTime  }} <br>
                User timezone: {{ $userTimezone }}
                <div class="my-6">
                    <span>Salutation</span>
                    <input class="ring-1" wire:model.lazy="salutation">
                </div>

                <div class="my-6">
                    <label>
                        <span>Title</span>
                        <input class="ring-1" wire:model.lazy="title">
                    </label>
                </div>

                <div class="my-6">
                    <label>
                        <span>Body</span>
                        <textarea wire:model.lazy="body"></textarea>
                    </label>
                </div>

                <div class="my-6">
                    <label>
                        <span>Schedule</span>
                        <input type="datetime-local" wire:model.lazy="scheduledStart">
                        <select></select>
                    </label>
                </div>

            </div>
        </div>
        <div class="w-1/2">
            <div>
                Result <br><br><br>
            </div>
            <div class="select-all">
                {{ $salutation }} <br><br>
                🚀 {{ $title }} <br><br>
                {{ $body }} <br><br>
                <ul>
                    @foreach($this->displayTimezones as $timezone)
                        <li wire:key="timezone-{{ $timezone['text'] }}">
                            <span class="w-[100px]">{{ $timezone['text'] }}</span>
                            <span>{{ now()->tz($timezone['timezone'])->format(': g:i a') }}</span>
                        </li>
                    @endforeach
                </ul>

                <br>
                Link 👇<br>
                🎥 {{ $link }}
            </div>
        </div>
    </div>
</div>
