<?php

namespace Steekam\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Steekam\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'The dinosaurs looked at Chuck Norris the wrong way once ...ONCE.',
            "Chuck Norris' tears cure cancer. Too bad he has never cried.",
            'The chief export of Chuck Norris is pain.',
            'Chuck Norris recently had the idea to sell his urine as a canned beverage. We know this beverage as Red Bull.',
            'On the 7th day, God rested ... Chuck Norris took over.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
