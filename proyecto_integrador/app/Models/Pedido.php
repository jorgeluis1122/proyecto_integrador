<?php
//dsfsfd
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
      'Fecha',
      'Hora'
    ];

    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'idCustomer');
    }
    public function PedidoArticulos()
   {
       return $this->hasMany(PedidoArticulo::class);
   }

}
