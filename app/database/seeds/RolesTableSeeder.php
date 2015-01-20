<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'Admin';
        $adminRole->save();

        $standRole = new Role;
        $standRole->name = 'user';
        $standRole->save();

        $devRole = new Role;
        $devRole->name = 'developer';
        $devRole->save();

        $designRole = new Role;
        $designRole->name = 'designer';
        $designRole->save();

        $testRole = new Role;
        $testRole->name = 'tester';
        $testRole->save();

        $illRole = new Role;
        $illRole->name = 'illustrator';
        $illRole->save();

        $leadRole = new Role;
        $leadRole->name = 'lead';
        $leadRole->save();

        $managerRole = new Role;
        $managerRole->name = 'manager';
        $managerRole->save();

        $user = User::where('username','=','rushabh')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','jayesh')->first();
        //$user->attachRole( $standRole );
        $user->attachRole( $devRole );
        $user->attachRole( $testRole );

        $user = User::where('username','=','rajesh')->first();
        //$user->attachRole( $standRole );
        $user->attachRole( $designRole );
        $user->attachRole( $illRole );

        $user = User::where('username','=','hemal')->first();
        //$user->attachRole( $standRole );
        $user->attachRole( $managerRole );

        $user = User::where('username','=','komal')->first();
        //$user->attachRole( $standRole );
        $user->attachRole( $leadRole );
        $user->attachRole( $managerRole );

    }
}