<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class QrCodeController extends Controller
{
    public function showQrCode()
    {
        // Informations du joueur (remplacez ces valeurs par les vôtres)
        $playerInfo = [
            'num-place' => 'A13',
            'type' => 'Violence',
            'num_zone' => 'A',
           
        ];

        // Générer le QR code
        $qrCode = QrCode::size(300)->generate(route('player-data', $playerInfo));

        return view('qr-code', compact('qrCode'));
    }

    public function showPlayerData(Request $request)
    {
        // Récupérer les informations du joueur depuis la requête
        $playerInfo = $request->all();

        // Afficher la vue avec les données du joueur
        return view('player-data', compact('playerInfo'));
    }
    public function toDB(Request $request)
    {
      // Validation des données du formulaire si nécessaire
      $request->validate([
        'num-place' => 'required',
        'num-zone' => 'required',
        'alert_type' => 'required',
    ]);

    // Charger le contenu actuel du fichier JSON
    $data = json_decode(Storage::get('alerts.json'), true);
    $currentDate = date('YmdHis');
    $newId = $currentDate . '_' . str_replace(' ', '_', $request->input('num-place'));
    //dd($newId ,$currentDate);
    $newAlert = [
        'id'=> $newId,
        'num-place' => $request->input('num-place'),
        'num-zone' => $request->input('num-zone'),
        'type' => $request->input('alert_type'),
        'date' =>$currentDate,
    ];

    // Ajouter la nouvelle alerte à la liste des alertes
    $data['alerts'][] = $newAlert;

    // Sauvegarder le fichier JSON mis à jour
    Storage::put('alerts.json', json_encode($data));

    // Rediriger ou retourner une réponse comme vous le souhaitez
    return redirect()->back()->with('success', 'Données enregistrées avec succès dans le fichier JSON');
}
    }
    
