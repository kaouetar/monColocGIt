<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{

    public $table = 'publicationlogement';
    public $primaryKey = 'IDPUBLICATION';

    public $timestamps = false;

}
