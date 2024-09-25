<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/users",
     *     summary="Listar todos os usuários",
     *     @OA\Response(
     *         response=200,
     *         description="Lista de usuários",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/User"))
     *     )
     * )
     */
    public function index()
    {
        $users = Users::all();
        //$users = Users::paginate(10); <-- Exibição dos usuarios por paginação
        return response()->json($users);
    }

    /**
     * @OA\Get(
     *     path="/users/{id}",
     *     summary="Obter usuário por ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuário encontrado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuário não encontrado"
     *     )
     * )
     */

     public function store(Request $request)
     {
         // Validação dos dados recebidos
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
             'age' => 'required|integer',
         ]);
     
         // Sanitização do campo 'name' para remover scripts maliciosos
         $validatedData['name'] = strip_tags($validatedData['name']);
         $validatedData['email'] = filter_var($validatedData['email'], FILTER_SANITIZE_EMAIL);
     
         // Criação do usuário no banco de dados
         try {
             $user = Users::create($validatedData);
     
             // Retorna o usuário criado com status 201
             return response()->json($user, 201);
         } catch (\Exception $e) {
             // Caso haja algum problema ao criar o usuário, retornamos um erro
             return response()->json(['error' => 'Erro ao criar o usuário'], 400);
         }
     }
     

    public function update(Request $request, $id)
{
    // Lógica para atualizar o usuário
    $user = Users::findOrFail($id);
    $user->update($request->all());
    return response()->json($user, 200);
}

    
    public function show($id)
    {
        try{
            $user = Users::findOrFail($id);
            return response()->json($user);
        }catch (\Exception $e){
            return response()->json(['message' => 'Erro ao buscar usuário'], 500);
        }

    }

    public function authent(Request $request)
    {
        return response()->json(['message' => 'Protected route accessed'], 200);
    }

    public function getUser(Request $request)
    {
        // Validação do parâmetro 'id'
        $request->validate([
            'id' => 'required|integer', // Valida que 'id' é obrigatório e um inteiro
        ]);

        // Captura o ID da requisição
        $id = $request->input('id');

        // Lógica para buscar o usuário
        $user = Users::find($id);

        if ($user) {
            return response()->json($user, 200);
        }

        return response()->json(['error' => 'User not found'], 404);
    }
}
