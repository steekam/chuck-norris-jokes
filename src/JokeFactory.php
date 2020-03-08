<?php

namespace Steekam\ChuckNorrisJokes;

class JokeFactory
{
    protected array $jokes = [
        "The dinosaurs looked at Chuck Norris the wrong way once ...ONCE.",
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        "The chief export of Chuck Norris is pain.",
        "Chuck Norris recently had the idea to sell his urine as a canned beverage. We know this beverage as Red Bull.",
        "On the 7th day, God rested ... Chuck Norris took over."
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) $this->jokes = $jokes;
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}