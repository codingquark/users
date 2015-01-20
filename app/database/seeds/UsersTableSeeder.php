<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        $users = array(
            array(
                'username'   => 'rushabh',
                'email'      => 'admin@example.org',
                'password'   => Hash::make('rushabh'),
                'confirmed'  => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'jayesh',
                'email'      => 'jayesh@example.org',
                'password'   => Hash::make('jayesh'),
                'confirmed'  => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'rajesh',
                'email'      => 'rajesh@example.org',
                'password'   => Hash::make('rajesh'),
                'confirmed'  => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'hemal',
                'email'      => 'hemal@example.org',
                'password'   => Hash::make('hemal'),
                'confirmed'  => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'komal',
                'email'      => 'komal@example.org',
                'password'   => Hash::make('komal'),
                'confirmed'  => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('users')->insert( $users );
    }

}