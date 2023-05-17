<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nim'=>$this->Nim,
            'nama'=>$this->Nama,
            'tanggal_lahir'=>$this->Tanggal_Lahir,
            'jurusan'=> strtoupper($this->Jurusan),
            'no_handphone'=>$this->No_Handphone,
            'email'=>$this->Email,
            'kelas_id'=>$this->kelas_id,
        ];
    }
}
