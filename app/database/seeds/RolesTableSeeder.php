<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'adminRole';
        $adminRole->save();

        $standRole = new Role;
        $standRole->name = 'userRole';
        $standRole->save();

        $modRole = new Role;
        $modRole->name = 'modRole';
        $modRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $standRole );

        $user = User::where('username','=','moderator')->first();
        $user->attachRole( $modRole );

    }
}