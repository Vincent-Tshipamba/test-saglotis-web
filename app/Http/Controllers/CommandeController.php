<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommandeController extends Controller
{
    public function index(){
        $orders = Commande::latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'produit' => 'required|string',
        'quantite' => 'required|integer',
        'depot' => 'required|string',
        'date' => 'required|date',
    ]);

    try {
        // Création de la commande dans la base de données
        $commande = Commande::create($validated);

        Log::info('Commande enregistree avec succes !');
        // Retourner la commande créée en format JSON
        return response()->json($commande, 201);
    } catch (Throwable $e) {
        // Si une erreur survient (ex : problème avec la base de données)
        return response()->json([
            'message' => 'Une erreur est survenue lors de l\'enregistrement de la commande.',
            'error' => $e->getMessage(),
        ], 500);
    }
}
}
