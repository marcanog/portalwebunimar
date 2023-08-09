<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'subject' => 'Estado de cuenta  x',
            'content' => '<figure class="table"><table><tbody><tr><td><strong>Trabajador(a): V-12345678    USUARIO MASTER</strong></td><td>Ingreso: 01/10/2021</td></tr><tr><td colspan="2">Cargo: PROGRAMADOR</td></tr><tr><td>Departamento: DECANATO DE INGENIERIA Y AFINES</td><td>Sueldo: Bs. 12,50</td></tr></tbody></table></figure><figure class="table"><table><tbody><tr><td>Concepto</td><td>Descripción</td><td>Cantidad</td><td>Asignaciones</td><td>Deducciones</td><td>Saldo</td><td>Vencimiento</td></tr><tr><td>100</td><td>Sueldo</td><td> </td><td>12,50</td><td> </td><td> </td><td> </td></tr><tr><td>101</td><td>Bono por cargo</td><td> </td><td>279,50</td><td> </td><td> </td><td> </td></tr><tr><td>129</td><td>Bono Jerárquico</td><td> </td><td>122,36</td><td> </td><td> </td><td> </td></tr><tr><td>500</td><td>Anticipo Primera quincena</td><td> </td><td> </td><td>207,18</td><td> </td><td>28/02/2022</td></tr><tr><td>501</td><td>Seguro Social</td><td>4</td><td> </td><td>0,48</td><td> </td><td> </td></tr><tr><td>502</td><td>Régimen prestacional de empleo (RPE)</td><td>4</td><td> </td><td>0,04</td><td> </td><td> </td></tr><tr><td>503</td><td>Régimen prestacional de vivienda y hábitat (RPVH)</td><td> </td><td> </td><td>0,12</td><td> </td><td> </td></tr><tr><td> </td><td> </td><td> </td><td>414,36</td><td>207,82</td><td colspan="2">Neto Bs.206,54</td></tr></tbody></table></figure>',
            'users_email' => 'master@email.com',
            'department_id' => '1',
            'status_id' => '1',
        ]);
        DB::table('notifications')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'subject' => 'DÍA DEL MAESTRO',
            'content' => '<p>QUÉ SIGNIFICA SER MAESTRO EN EL SIGLO XXI<br><br>Hemos escuchado con frecuencia el término «educación para el siglo XXI» haciendo referencia solo a lo que es innovador en educación, que implica estar al día con lo último en tecnología en el aula y no es solo la tecnología la que tiene mayor influencia, en el quehacer docente es la velocidad del cambio que se nos impone y exige hacer otras cosas, entonces, ¿Cuáles son las características que debe tener un maestro del siglo XXI?<br><br>El maestro del siglo XXI debe ser modelo de empatía. El poder de entender otras perspectivas además de la nuestra, es una habilidad esencial que todos debemos dominar. La capacidad de entender la diversidad en nuestro mundo nos hace conscientes de que debemos usar nuestro conocimiento y habilidades para ayudar, para contribuir positivamente a nuestras comunidades.<br><br>En un mundo donde la tecnología puede responder a cualquier pregunta, los estudiantes necesitan más oportunidades para aprender cómo pensar creativamente para tener éxito, para algunos, la creatividad puede ser hacer las mismas cosas de una manera diferente, mientras que para otros puede ser descubrir o crear nuevas, no importa cuál sea el concepto, el educador del siglo XXI hace que sea una prioridad motivar a sus alumnos a inventar y a ser ingeniosos y expresivos<br><br>Hoy, 15 de enero, queremos hacer un reconocimiento a todos los maestros que cumplen con dedicación y esmero la misión de transmitir conocimiento. A aquellos que han asumido el reto de formarse día a día ante los nuevos cambios y exigencias. Son ustedes el honorable ejemplo de resiliencia y dedicación por una profesión.<br><br>¡Feliz Día del Maestro!</p><figure class="image"><img src="http://localhost/image/newsimg/files/maestro(2).png"></figure>',
            'users_email' => 'master@email.com, georgelys.marcano@unimar.edu.ve',
            'department_id' => '2',
            'status_id' => '1',
        ]);
        DB::table('notifications')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'subject' => 'Feliz navidad le desea la Universidad de Margarita',
            'content' => '<figure class="image"><img src="http://localhost/image/newsimg/files/navidad.png"></figure>',
            'users_email' => 'master@email.com, georgelys.marcano@unimar.edu.ve, francisco.gomez@unimar.edu.ve, scardenas@unimar.edu.ve',
            'department_id' => '1',
            'status_id' => '1',
        ]);
        DB::table('notifications')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'subject' => 'Invitación a la feria virtual del libro',
            'content' => '<p>La Universidad de Margarita te invita a... La Feria del Libro Virtual! 📖<br><br>Para participar solo debes cumplir con las condiciones señaladas en el post⬆️<br><br>🗓️Tienes oportunidad de inscribirte y enviar tus publicaciones hasta el 15-06-21.<br>Utiliza el siguiente enlace para inscribirte: https://forms.gle/6T6wSPQvAKjShkSu9<br><br>Cronograma:<br>📌 15 de Junio 2021: Plazo máximo para inscripciones.<br>📌 15 de Julio 2021: Listado de publicaciones admitidas.<br>📌 Del 2 al 6 de Agosto: Programación de la Feria Virtual del Libro en el marco de la IV Bienal Latinoamericana y Caribeña de Infancias y Juventudes.<br><br>✨¡No te lo pierdas!✨</p>',
            'users_email' => 'master@email.com, francisco.gomez@unimar.edu.ve, georgelys.marcano@unimar.edu.ve',
            'department_id' => '2',
            'status_id' => '1',
        ]);
    }
}
