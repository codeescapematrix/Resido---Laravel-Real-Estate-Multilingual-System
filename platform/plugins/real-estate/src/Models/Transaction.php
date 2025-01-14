<?php

namespace Botble\RealEstate\Models;

use Botble\ACL\Models\User;
use Botble\Payment\Models\Payment;
use Eloquent;
use Html;

class Transaction extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 're_transactions';

    /**
     * @var array
     */
    protected $fillable = [
        'credits',
        'description',
        'user_id',
        'account_id',
        'payment_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class)->withDefault();
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        $time = Html::tag('span', $this->created_at->diffForHumans(), ['class' => 'small italic']);

        if ($this->user_id) {
            return __('Added :credits credit(s) by admin ":user"', ['credits' => $this->credits, 'user' => $this->user->name]);
        }

        $description = __('You have purchased :credits credit(s)', ['credits' => $this->credits]);
        if ($this->payment_id) {
            $description .= ' ' . __('via') . ' ' . $this->payment->payment_channel->label() . ' ' . $time .
                ': ' . number_format($this->payment->amount, 2) . $this->payment->currency;
        }

        return $description;
    }
}
