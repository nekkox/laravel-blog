<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    private string $text;
    private string $time;
    private array $result;

    public function __construct(string $text = "AlertBeco", string $time = null)
    {
        $this->text = $text;
        $this->time = $time ?? Carbon::now()->toDateTimeString();
        //$this->withAttributes(["name"=>"Vegos"]);
        $this->result = $this->createItem();

        //ddd($this->attributes);
    }

    /**
     * Get the view / contents that represent the component.
     */
    private function createItem() : array{
        return ["text"=>$this->text, "time" => $this->time];
}

    public function render(): View|Closure|string
    {
        return view('components.alert', ['alertData'=>$this->result] );
    }
}
