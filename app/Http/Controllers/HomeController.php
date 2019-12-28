<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Noticia;
use App\Imagem_Profile;
use App\User;
use App\Profile_user;
use App\NewsLetter;
use App\Comentarios;
use App\Contacts_News;
use Illuminate\Notifications\Notifiable;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 use Notifiable;
	 
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$categorias = Categoria::all();
		$noticias = Noticia::all();
		$imagem_profiles = Imagem_Profile::all();
		$profiles = Profile_user::all();
		$comentarios = Comentarios::all();
		$contacts_news = \DB::table('contacts__news')->orderBy('id', 'desc')->get();
		$users = User::all();
		$user_news_letters = \DB::table('news_letters')
									->orderBy('id', 'desc')
									->get(); //ordena usuarios de forma decrescente
			
		$id = \Auth::user()->id;
		$user = User::find(\Auth::user()->id);
		
		
		foreach($user->unreadNotifications as $notification)
		{
			$data = array('data' => json_decode($notification->markAsRead()));
			if($notification->read_at)
		{
			$user->notifications()->delete();
		}
			
			return view('home', compact('data'));
			
		}
		
				
		/* codigo das notificações do toastr, código abandonado*/							
		/*if($comentarios->all() == false)
		{
			toastr()->info('Você não possui comentários ainda');
			
		}
		else if($comentarios->all() >= 1)
		{
			toastr()->success('Você possui Novos Comentários');
		
		}
		*/

        return view('home', ['categorias' => $categorias,'noticias' => $noticias, 'imagem_profiles' => $imagem_profiles,
								'profiles' => $profiles, 'user_news_letters' => $user_news_letters,
								'comentarios' => $comentarios, 'users' => $users, 'contacts_news' => $contacts_news]);
								
    }
	
	
}
