<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter;
//use Newsletter;

class NewsLetterController extends Controller
{
	public function index()
	{
		$users_news_letters = NewsLetter::all();
		return view('newsletter', ['users_news_letters' => $users_news_letters]);
	}
    public function create()
	{
		$users_news_letters = NewsLetter::all();
		return view('newsletter.create', compact('users_news_letters'));
	}
	
	
	/*
	* Store MailChimp Sistema de Newsletter que foi abandonado
	*/ 
	/*
	public function store(Request $request)
	{
		if(! Newsletter::isSubscribed($request->em
		ail))
		{
			Newsletter::SubscribePending($request->email);
			
			return redirect('newsletter/create')->with('success', 'Obrigado por se Inscrever, confira seu email e confirme sua inscrição');
		}
		
		return redirect('newsletter/create')->with('failure', 'Desculpe, mas você já é inscrito :D');
	}
	*/
	
	/* Este é o novo storage
	* Ele armazena os usuarios na tabela news_letter
	*/
	public function store(Request $request)
	{
		$input = $request->all();
		
		
		if($request['email_user_newsLetter'] == null || strpos($request['email_user_newsLetter'], '.com.br'))
		{	
			return redirect()
							->back()
							->with('failure', 'Verifique o email informado, não use dominio ".com.br"');
		}
		else if($request['email_user_newsLetter'] != null
							&& $request['email_user_newsLetter'] != strpos($request['email_user_newsLetter'], '.com.br'))
		{
			
			NewsLetter::create([
				'nome_user_newsLetter' => $request['nome_user_newsLetter'],
				'email_user_newsLetter' => strtolower($request['email_user_newsLetter']),
			]);
		
			return redirect()
					->back()
					->with('success', 'Assinatura Realizada com sucesso, Muito Obrigado !');
					
		}
			
	}
	public function edit($id)
	{
		$user_news_letter = NewsLetter::find($id);
		
		return view('newsletter.edit', ['user_news_letter' => $user_news_letter]);
	}
	public function update(Request $request, $id)
	{
		$user_news_letters = NewsLetter::all();
		$user_news_letter = NewsLetter::find($id)
										->update($request->all());
		return view('newsletter.update', compact('user_news_letters'))
						->with('success', 'Assinante atualizado com sucesso');
		
	}
	
	public function remove($id)
	{
		
		$user_news_letter = NewsLetter::find($id);
		
		return view('newsletter.remove', compact('user_news_letter'));
	}
	public function destroy($id)
	{
		$user_news_letters = NewsLetter::all();
		$user_news_letter = NewsLetter::find($id);
		
		$user_news_letter->where('id', '=', $id)->delete();
		
		
		return redirect('/home')
					->with('success', 'Assinante Removido com sucesso');
	}
	
	public function sendmail(Request $request)
	{
		$users = NewsLetter::all();
		$assunto = $_POST['assunto'];
		$conteudo = $_POST['conteudo'];
		
		
			
			$mail = \Mail::send('newsletter.mail', ['users' => $users, 'assunto' => $assunto, 'conteudo' => $conteudo], 
						function($message) use ($users, $assunto){
				
				$message->subject($assunto);
				$message->from('tpadua7@gmail.com', 'NewsLetter');
				//$message->attach(storage_path('/../public/img/icon/thumbnailTpadua.jpg'));
				/*
				foreach($users as $user)
				{
					for($i=0; $i < count($users); $i++)
					{
						$message->to($user->email_user_newsLetter);
						$i = $user->id + $i;
						$i++;
						return redirect()->back()->with('sucess')"<script>alert('Newsletter Enviada ...')</script>";
					}
				}
				*/
				
				foreach($users as $user)
				{
					if($user->email_user_newsLetter == true && $user->id == true)
					{
						$message->to($user->email_user_newsLetter);
						
					}
				}
				
			});
			
		if($mail)
		{
				return redirect()
					->back()
						->with('success', 'Email Enviado com sucesso');
		}
		else
		{
			return redirect()
				->back()
					->with('failure', 'Não foi possivel enviar newsletter verifique os emails cadastrados');
		}
		
						
						
	}
			
	
}
