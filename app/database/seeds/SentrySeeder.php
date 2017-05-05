<?php
class SentrySeeder extends Seeder {
	public function run()
	{
		// hapus isi table
		// DB::table('users_groups')->delete();
		// DB::table('groups')->delete();
		// DB::table('users')->delete();
		// DB::table('throttle')->delete();

		try
		{
			//buat grup admin
			$group = Sentry::createGroup(array(
				'name'	=>'admin',
				'permissions'=>array(
					'admin'=>1,),
				));
						//buat grup admin
			$group = Sentry::createGroup(array(
				'name'	=>'regular',
				'permissions'=>array(
					'regular'=>1,),
				));
		}
		catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
		{
			echo "Name field is required";
		}
		
				catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		{
			echo "Group already exists";
		}
		try
		{
			//buat admin baru
			$admin = Sentry::register(array(
				'email'=>'admin2@gmail',
				'password'=>'larapus2014',
				'first_name'=>'Admin',
				'last_name'=>'Larapus'),true);
			//cari group admin
			$adminGroup = Sentry::findGroupByName('admin');
			//masukkan user ke group admin
			$admin->addGroup($adminGroup);
			//buat user  regular
			$user=Sentry::register(array(
				'email'=>'user2@gmail',
				'password'=>'#larapus2014',
				'first_name'=>'User',
				'last_name'=>'Larapus'),true);
			//cari group admin
			$regularGroup = Sentry::findGroupByName('regular');
			//masukkan user ke group admin
			$user->addGroup($regularGroup);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			echo "Login field is required";
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			echo "Password field is required";
		}catch (Cartalyst\Sentry\Users\GroupNotFoundException $e)
		{
			echo "Group was not Found";
		}

		}
}