<?php

namespace App\Repositories;

use App\Models\Studentinformations;
use App\Repositories\BaseRepository;

/**
 * Class StudentinformationsRepository
 * @package App\Repositories
 * @version November 17, 2021, 2:29 pm UTC
*/

class StudentinformationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Age',
        'ContactNO',
        'Address',
        'Gender',
        'Citizenship'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Studentinformations::class;
    }
}
