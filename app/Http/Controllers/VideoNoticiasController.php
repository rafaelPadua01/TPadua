<?php 

namespace App\Http\Controllers;


use App\Video_Noticia;
use App\User;
use App\Noticia; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoNoticiasController extends Controller
{
    protected $user;
    protected $noticia;
    protected $videoNoticia;
    public function __construct(User $user, Noticia $noticia, Video_Noticia $videoNoticia)
    {   
        $this->user = $user;
        $this->noticia = $noticia;
        $this->videoNoticia = $videoNoticia;
    }
    public function index()
    {

    }

    public function create($user, $noticia)
    {
        $user_id = User::findOrFail($user->id);
        $noticia_id = Noticia::findOrFail($noticia->id);
        //Retorna para imagens.create, para utilizar o mesmo form
        //assim dando a opção de carregar só o video,
        //só a imagem ou ambos os dois de uma vez

        return view('imagens.create', compact('user_id', '$noticia_id'));

    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user_id = User::findOrFail($request->id_user);
        $noticia_id = Noticia::findOrFail($request->id_noticia);
        
        //armazena o nome do arquivo em um array
        //para que possa verificar se é um arquivo válido
        $arq['nome_arquivo'] = $request->nome_arquivo;

        //verifica se a reqisição possui um arquivo
        if($request->hasfile('nome_arquivo') && $request->file('nome_arquivo')->isValid());
        {
            
            //armazena a extensão do arquivo em uma vairiavel
            $arq_ext = $request->nome_arquivo->extension();
                  //Verifica se o arquivo possui uma extensão válida
             if($arq_ext  == "mpeg" || $arq_ext == "mp4" || $arq_ext == "avi"|| $arq_ext == "mov" 
                || $arq_ext == "3gp" || $arq_ext == "wmv" || $arq_ext == "flv" || $arq_ext == "mkv" || $arq_ext == "rm")
            {
                //cria um nome aleatorio para o arquivo 
                //baseado no timestamp do servidor
                $arq_name = uniqid(date('HisYmd'));

                //Define o nome final do arquivo
                //com a extensão usada
                $nomeArq = "video.{$arq_name}.{$arq_ext}";

                $arq['nome_arquivo'] = $nomeArq;

                //Move O video para o diretorio video_noticias
                $upload = $request->nome_arquivo->move('storage/videos_noticias', $nomeArq);

                //Verifica se o arquivo fooi enviado
                if($upload)
                {
                    Video_noticia::create([
                        'nome_arquivo' => $nomeArq, 
                        'titulo' => $request->titulo,
                        'descricao' => $request->descricao,
                        'id_user' => $request->id_user,
                        'id_noticia' => $request->id_noticia
                    ]);
                    return redirect()->back()->with('success', 'upload do video completo...');
                }
                else
                {
                    return redirect()->back()->with('error', 'erro ao realizar upload, verifique a extensão do video ou contate o supote para ajuda ');
                }
            
            }
            else 
            {
                return redirect()->back()->with('error', 'Este arquivo não possui uma extensão válida');
            }
        } 
       
        

    }
    public function show()
    {
        $noticias = Noticia::all();
        $video_noticias = Video_noticia::all();
        return view('video_noticias.show', compact('video_noticias', 'noticias'));
    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function remove($id)
    {
        $video_noticias = Video_noticia::findOrFail($id);
        $noticias = Noticia::findOrFail($video_noticias->id_noticia);
        return view('video_noticias.remove', compact('video_noticias', 'noticias'));
    }

    public function destroy($id)
    {
        
        $video_noticias = Video_noticia::findOrFail($id);
        
        if($video_noticias)
        {
            $video_noticias->where('id', '=', $id)->delete();
            return redirect()->back()->with('success', 'arquivo removido com sucesso');
        }
        else{
            echo "<script>window.alert('Não foi possível remover este arquivo, contate o suporte técnico...')</script>";
            return redirect()->back()->with('error', 'Falha ao remover arquivo, entre em contato com supote técnico...');
        }

    }
}