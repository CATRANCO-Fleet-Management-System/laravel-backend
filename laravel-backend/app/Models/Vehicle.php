<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = "vehicles";

    protected $primaryKey = "vehicle_id";

    protected $fillable = [
        "vehicle_type",
        "model",
        "purchase_cost",
        "purchase_date",
        "license_plate",
        "capacity",
        "current_mileage",
        "vehicle_status",
    ];

    public function assignments()
    {
        return $this->hasMany(VehicleAssignment::class, 'vehicle_id');
    }

    public function fuelLogs()
    {
        return $this->hasMany(FuelLogs::class, 'vehicle_id');
    }

    public function feedback() {
        return $this->hasMany(FeedbackLogs::class,'vehicle_id');
    }
}
