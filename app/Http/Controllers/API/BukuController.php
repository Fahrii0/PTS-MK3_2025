<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/buku",
 *     tags={"buku"},
 *     operationId="listBuku",
 *     summary="Daftar Buku",
 *     description="Mengambil daftar semua buku",
 *     @OA\Response(
 *         response=200,
 *         description="Berhasil mengambil daftar buku",
 *         @OA\JsonContent(
 *             example={
 *                 "success": true,
 *                 "message": "Berhasil mengambil data buku",
 *                 "data": {
 *                     {"id": 1, "judul": "Laskar Pelangi", "penulis": "Andrea Hirata"},
 *                     {"id": 2, "judul": "Bumi", "penulis": "Tere Liye"}
 *                 }
 *             }
 *         )
 *     )
 * )
 */
class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data buku',
            'data' => $data
        ], 200);
    }
}