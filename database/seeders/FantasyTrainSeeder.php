<?php

namespace Database\Seeders;

use App\Models\Guest\FantasyTrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FantasyTrainSeeder extends Seeder
{

    public function run(): void {
        $fantasyTrains = [
            ['manga_anime' => 'My Hero Academia', 'agency' => 'UA Trains', 'departure_station' => 'UA High School', 'arrival_station' => 'Hosu City', 'departure_time' => '08:00:00', 'arrival_time' => '09:00:00', 'code_train' => 'MHA123', 'n_carriages' => 10, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Attack on Titan', 'agency' => 'Survey Corps Rail', 'departure_station' => 'Shiganshina District', 'arrival_station' => 'Wall Rose', 'departure_time' => '10:00:00', 'arrival_time' => '11:30:00', 'code_train' => 'AOT456', 'n_carriages' => 8, 'is_in_time' => false, 'is_canceled' => false],
            ['manga_anime' => 'Demon Slayer', 'agency' => 'Demon Slayer Corps', 'departure_station' => 'Fujikasane Mountain', 'arrival_station' => 'Asakusa', 'departure_time' => '07:30:00', 'arrival_time' => '09:00:00', 'code_train' => 'DS789', 'n_carriages' => 6, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Death Note', 'agency' => 'Kira Express', 'departure_station' => 'Tokyo', 'arrival_station' => 'Los Angeles', 'departure_time' => '12:00:00', 'arrival_time' => '22:00:00', 'code_train' => 'DN101', 'n_carriages' => 9, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'One Piece', 'agency' => 'Straw Hat Railways', 'departure_station' => 'East Blue', 'arrival_station' => 'Grand Line', 'departure_time' => '06:00:00', 'arrival_time' => '18:00:00', 'code_train' => 'OP112', 'n_carriages' => 11, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Hunter x Hunter', 'agency' => 'Hunter Association', 'departure_station' => 'Whale Island', 'arrival_station' => 'Yorknew City', 'departure_time' => '09:00:00', 'arrival_time' => '14:00:00', 'code_train' => 'HXH131', 'n_carriages' => 7, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Vinland Saga', 'agency' => 'Viking Routes', 'departure_station' => 'Reykjavik', 'arrival_station' => 'Vinland', 'departure_time' => '05:00:00', 'arrival_time' => '20:00:00', 'code_train' => 'VS142', 'n_carriages' => 10, 'is_in_time' => false, 'is_canceled' => false],
            ['manga_anime' => 'My Hero Academia', 'agency' => 'UA Trains', 'departure_station' => 'Musutafu', 'arrival_station' => 'Kamino Ward', 'departure_time' => '11:00:00', 'arrival_time' => '12:00:00', 'code_train' => 'MHA234', 'n_carriages' => 10, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Attack on Titan', 'agency' => 'Survey Corps Rail', 'departure_station' => 'Wall Rose', 'arrival_station' => 'Wall Maria', 'departure_time' => '13:00:00', 'arrival_time' => '15:00:00', 'code_train' => 'AOT567', 'n_carriages' => 8, 'is_in_time' => true, 'is_canceled' => true],
            ['manga_anime' => 'Demon Slayer', 'agency' => 'Demon Slayer Corps', 'departure_station' => 'Asakusa', 'arrival_station' => 'Natagumo Mountain', 'departure_time' => '08:00:00', 'arrival_time' => '10:00:00', 'code_train' => 'DS890', 'n_carriages' => 6, 'is_in_time' => false, 'is_canceled' => false],
            ['manga_anime' => 'Death Note', 'agency' => 'Kira Express', 'departure_station' => 'Los Angeles', 'arrival_station' => 'Tokyo', 'departure_time' => '22:00:00', 'arrival_time' => '08:00:00', 'code_train' => 'DN202', 'n_carriages' => 9, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'One Piece', 'agency' => 'Straw Hat Railways', 'departure_station' => 'Grand Line', 'arrival_station' => 'New World', 'departure_time' => '18:00:00', 'arrival_time' => '06:00:00', 'code_train' => 'OP223', 'n_carriages' => 11, 'is_in_time' => false, 'is_canceled' => true],
            ['manga_anime' => 'Hunter x Hunter', 'agency' => 'Hunter Association', 'departure_station' => 'Yorknew City', 'arrival_station' => 'Heaven Arena', 'departure_time' => '10:00:00', 'arrival_time' => '13:00:00', 'code_train' => 'HXH232', 'n_carriages' => 7, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Vinland Saga', 'agency' => 'Viking Routes', 'departure_station' => 'Vinland', 'arrival_station' => 'Reykjavik', 'departure_time' => '20:00:00', 'arrival_time' => '05:00:00', 'code_train' => 'VS253', 'n_carriages' => 10, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'My Hero Academia', 'agency' => 'UA Trains', 'departure_station' => 'Kamino Ward', 'arrival_station' => 'Tartarus', 'departure_time' => '14:00:00', 'arrival_time' => '15:00:00', 'code_train' => 'MHA345', 'n_carriages' => 10, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Attack on Titan', 'agency' => 'Survey Corps Rail', 'departure_station' => 'Wall Maria', 'arrival_station' => 'Shiganshina District', 'departure_time' => '15:00:00', 'arrival_time' => '16:30:00', 'code_train' => 'AOT678', 'n_carriages' => 8, 'is_in_time' => false, 'is_canceled' => false],
            ['manga_anime' => 'Demon Slayer', 'agency' => 'Demon Slayer Corps', 'departure_station' => 'Natagumo Mountain', 'arrival_station' => 'Butterfly Estate', 'departure_time' => '10:00:00', 'arrival_time' => '12:00:00', 'code_train' => 'DS901', 'n_carriages' => 6, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Death Note', 'agency' => 'Kira Express', 'departure_station' => 'Tokyo', 'arrival_station' => 'New York', 'departure_time' => '12:00:00', 'arrival_time' => '18:00:00', 'code_train' => 'DN303', 'n_carriages' => 9, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'One Piece', 'agency' => 'Straw Hat Railways', 'departure_station' => 'New World', 'arrival_station' => 'Raftel', 'departure_time' => '06:00:00', 'arrival_time' => '12:00:00', 'code_train' => 'OP334', 'n_carriages' => 11, 'is_in_time' => true, 'is_canceled' => false],
            ['manga_anime' => 'Hunter x Hunter', 'agency' => 'Hunter Association', 'departure_station' => 'Heaven Arena', 'arrival_station' => 'Greed Island', 'departure_time' => '13:00:00', 'arrival_time' => '19:00:00', 'code_train' => 'HXH343', 'n_carriages' => 7, 'is_in_time' => true, 'is_canceled' => false]
        ];

        foreach($fantasyTrains as $train){
            $newTrain = new FantasyTrain();
            $newTrain->manga_anime = $train['manga_anime'];
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->code_train = $train['code_train'];
            $newTrain->n_carriages = $train['n_carriages'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_canceled = $train['is_canceled'];
            $newTrain->save();
        }
    }
}
