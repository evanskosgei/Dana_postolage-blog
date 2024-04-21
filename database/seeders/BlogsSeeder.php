<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Carbon;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
                'title' => 'Exploring the Wilderness',
                'text' => 'Embarking on a journey into the heart of nature, where the whispers of the wind and the rustle of leaves tell stories untold.',
                'author' => 'Elena Woods',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Unlocking Creativity',
                'text' => 'Diving into the depths of imagination, where colors merge and words dance, unlocking the door to a world of endless possibilities.',
                'author' => 'Oliver Blake',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'A Taste of Adventure',
                'text' => 'Venturing into uncharted territories, savoring the thrill of discovery with every step, as the unknown beckons with promises of excitement.',
                'author' => 'Sophia Rivera',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Reflections at Sunset',
                'text' => 'Basking in the golden hues of the setting sun, reflecting on the day\'s journey and embracing the tranquility that descends with twilight.',
                'author' => 'Liam Carter',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Whispers of the Past',
                'text' => 'Listening to the echoes of history, as ancient tales weave through time, reminding us of the legacy we carry and the paths we tread.',
                'author' => 'Isabella Cruz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Embracing Change',
                'text' => 'Navigating the winds of change, embracing the unknown with open arms, for in the dance of transformation lies the essence of growth.',
                'author' => 'Maxwell Hayes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'In Search of Serenity',
                'text' => 'Seeking solace amidst the chaos, finding peace in the gentle rhythm of nature\'s melody, where silence speaks louder than words.',
                'author' => 'Ava Bennett',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Capturing Moments',
                'text' => 'Freezing time in the frame of memory, capturing fleeting moments that shimmer like dewdrops in the morning sun, immortalizing the beauty of life.',
                'author' => 'Daniel Evans',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Echoes of Laughter',
                'text' => 'Echoes of laughter reverberate through the corridors of time, weaving a tapestry of joy that binds hearts and transcends the boundaries of age.',
                'author' => 'Emma Thompson',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Chasing Dreams',
                'text' => 'Chasing dreams across the horizon, where the sky meets the sea, fueled by passion and driven by determination, with each step a stride closer to destiny.',
                'author' => 'Noah Foster',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Harmony of Seasons',
                'text' => 'Witnessing the symphony of seasons, as nature orchestrates its ever-changing melody, painting the canvas of existence with hues of spring, summer, autumn, and winter.',
                'author' => 'Aria Rodriguez',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Lost in Wanderlust',
                'text' => 'Wandering through the labyrinth of wanderlust, where every path leads to discovery and every turn reveals a new chapter in the story of adventure.',
                'author' => 'Gabriel Martinez',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Savoring Simplicity',
                'text' => 'Embracing the beauty of simplicity in a world adorned with complexities, finding solace in the gentle rhythm of everyday life, where happiness lies in the little moments.',
                'author' => 'Emily Scott',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Whispers of Wisdom',
                'text' => 'Listening to the whispers of wisdom that echo through the corridors of time, as the voices of sages past guide us on the journey of self-discovery.',
                'author' => 'Nathan Johnson',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Blog::create([
                'title' => 'Embers of Hope',
                'text' => 'Nurturing the embers of hope amidst the darkness, for even in the bleakest of nights, the flame of resilience flickers, lighting the path to a brighter tomorrow.',
                'author' => 'Sophie Anderson',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
    }
}
