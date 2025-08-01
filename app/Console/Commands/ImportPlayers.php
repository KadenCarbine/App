<?php

namespace App\Console\Commands;

use App\Models\MLB\Player;
use App\Services\MlbTheShowService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportPlayers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-players';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(MlbTheShowService $mlb)
    {
        ['currentPage' => $currentPage, 'totalPages' => $totalPages] = $mlb->getDetails();

        while ($currentPage <= $totalPages) {
            foreach ($mlb->getList(['page' => $currentPage])['listings'] as $player) {
                $this->importOrUpdate($player);
            }
            ++$currentPage;
        }

    }

    public function importOrUpdate(array $player)
    {
        $playerItem = $player['item'];
        $uuid = $playerItem['uuid'];
        Player::updateOrCreate(['uuid' => $uuid], [
            'name' => $player['listing_name'],
            'type' => $playerItem['type'],
            'img' => $playerItem['img'],
            'baked_img' => $playerItem['baked_img'],
            'sc_baked_img' => $playerItem['sc_baked_img'],
            'short_desc' => $playerItem['short_description'],
            'rarity' => $playerItem['rarity'],
            'team' => $playerItem['team'],
            'team_short' => $playerItem['team_short_name'],
            'overall' => $playerItem['ovr'],
            'series' => $playerItem['series'],
            'series_texture' => $playerItem['series_texture_name'],
            'series_year' => $playerItem['series_year'],
            'position' => $playerItem['display_position'],
            'has_augment' => $playerItem['has_augment'],
            'augment_text' => $playerItem['augment_text'],
            'augment_end' => $playerItem['augment_end_date'],
            'has_matchup' => $playerItem['has_matchup'],
            'stars' => $playerItem['stars'],
            'trend' => $playerItem['trend'],
            'new_rank' => $playerItem['new_rank'],
            'has_rank_change' => $playerItem['has_rank_change'],
            'event' => $playerItem['event'],
            'set_name' => $playerItem['set_name'],
            'is_live_set' => $playerItem['is_live_set'],
            'ui_anim_index' => $playerItem['ui_anim_index'],
        ]);
    }
}
