<class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'kind',
        'status',
        'language',
        'synopsis',
        'archived_at',
    ];
    protected function casts(): array
    {
        return [
            'kind' => ProjectKind::class,
            'status' => ProjectStatus::class,
            'archived_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Project $project): void {
            if (empty($project->id)) {
                $project->id = (string) Str::uuid7();
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}