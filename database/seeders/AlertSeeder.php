<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AlertHistory;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alert = new AlertHistory();

        $alert->user_id = 2;
        $alert->alert_message = 'ALERTA EN LA ZONA H SOBREPASO EL NIVEL 50%';
        
        $alert->save();


        $alert2 = new AlertHistory();

        $alert2->user_id = 4;
        $alert2->alert_message = 'ALERTA EN LA ZONA Q SOBREPASO EL NIVEL 50%';
        
        $alert2->save();


        $alert3 = new AlertHistory();

        $alert3->user_id = 2;
        $alert3->alert_message = 'ALERTA EN LA ZONA H SOBREPASO EL NIVEL 65%';
        
        $alert3->save();

    }
}
