<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Resources\Client as ClientResource;
use App\Http\Requests;

class ClientController extends Controller
{
  /*
  |-------------------------------------------------------------------------------
  | Get All Clients
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/clients
  | Method:         GET
  | Description:    Gets all of the clients 
  */
    public function index()
    {
        $clients = Client::paginate(10);
        return ClientResource::collection($clients);
    }

  /*
  |-------------------------------------------------------------------------------
  | Store Client
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/clients
  | Method:         POST
  | Description:    Store a new Client in Database 
  */
    public function store(Request $request)
    {
       $client =  Client::create([
            'name'=>$request->name,
            'avatar'=>$request->avatar,
            'age'=>$request->age,
            'email'=>$request->email,
            'number'=>$request->number,
            'address'=>$request->address,
            'country'=>$request->country,
            'notes'=>$request->notes,
        ]);
        return new ClientResource($client);
    }

  /*
  |-------------------------------------------------------------------------------
  | Get client
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/clients/{id}
  | Method:         GET
  | Description:    Gets one client based on id
  */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return new ClientResource($client);
    }


  /*
  |-------------------------------------------------------------------------------
  | Update Client
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/clients
  | Method:         PUT
  | Description:    Update an existing Client in Database 
  */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->avatar = $request->avatar;
        $client->age = $request->age;
        $client->email = $request->email;    
        $client->number = $request->number;
        $client->address = $request->address;
        $client->country = $request->country;
        $client->notes = $request->notes;
        
        if ($client->save()) {
            return new ClientResource($client);
        }
    }
  /*
  |-------------------------------------------------------------------------------
  | Delete Client
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/clients
  | Method:         DELETE
  | Description:    DELETE existing Client 
  */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        if ($client->delete()) {
            return new ClientResource($client);
        }
    }
}
