<?php

namespace Gamify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Image uploads
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

// Slugs for Eloquent Models
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

// Record created_by, updated_by
use Gamify\Traits\RecordSignature;


class Question extends Model implements StaplerableInterface, SluggableInterface {

    use SoftDeletes;
    use RecordSignature; // Record Signature
    use EloquentTrait; // Image Uploads
    use SluggableTrait; // Slugs

    /**
     * The database table used by the model.
     */
    protected $table = 'questions';
    protected $fillable = array(
        'name',
        'image',
        'question',
        'solution',
        'type',
        'hidden',
        'status'
    );

    protected $dates = array('deleted_at');

    /**
     * The Question slug in order to implement permanent URL to questions
     */
    protected $sluggable = array(
        'build_from'      => 'name',
        'save_to'         => 'shortname',
        'include_trashed' => true,
    );

    /**
     * A question will have some choices
     */
    public function choices()
    {
        return $this->hasMany('Gamify\QuestionChoice');
    }

    public function __construct(array $attributes = array())
    {
        $this->hasAttachedFile('image', [
            'styles'      => [
                'big'    => '220x220',
                'medium' => '128x128',
                'small'  => '64x64'
            ],
            'url'         => '/uploads/:class/:id_partition/:style/:filename',
            'default_url' => 'images/missing_question.png'
        ]);

        parent::__construct($attributes);
    }

    public function scopePublished($query)
    {
        return $query->where('status', '=', 'publish');
    }
}