<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable , HasApiTokens , SoftDeletes  ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'full_name',
        'email',
        'password',
        'phone' ,
        'country'  ,
        'provider',
        'provider_id',
        'remember_token',
        'fcm_token' ,
        'is_online' ,
        'last_active_at' ,
        'password'

    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            // Soft delete related friend requests
            $user->friendUsers()->each(function ($friendUsers) {
                $friendUsers->delete(); // Soft delete sent requests
            });
            $user->usersFriends()->each(function ($usersFriends) {
                $usersFriends->delete(); // Soft delete sent requests
            });
            $user->sentFriendRequests()->each(function ($request) {
                $request->delete(); // Soft delete sent requests
            });
            $user->EvaluationsUser()->each(function ($request) {
                $request->delete(); // Soft delete sent requests
            });

            $user->receivedFriendRequests()->each(function ($request) {
                $request->delete(); // Soft delete received requests
            });

            // Soft delete related results
            $user->userResultfirstCompetitor()->each(function ($result) {
                $result->delete(); // Soft delete first competitor results
            });

            $user->userResultSecondCompetitor()->each(function ($result) {
                $result->delete(); // Soft delete second competitor results
            });

            $user->userWinner()->each(function ($result) {
                $result->delete(); // Soft delete winner results
            });

            // Soft delete related notifications
            $user->sentNotifications()->each(function ($notification) {
                $notification->delete(); // Soft delete sent notifications
            });

            $user->receivedNotifications()->each(function ($notification) {
                $notification->delete(); // Soft delete received notifications
            });
            $user->challengesAsUser1()->each(function ($challengesAsUser1) {
                $challengesAsUser1->delete(); // Soft delete received notifications
            });
            $user->challengesAsUser2()->each(function ($challengesAsUser2) {
                $challengesAsUser2->delete(); // Soft delete received notifications
            });


            // Soft delete related contact us messages
            $user->senderContactUs()->each(function ($contactUs) {
                $contactUs->delete(); // Soft delete contact us messages
            });

            // Soft delete user tracking records
            $user->userTracking()->each(function ($tracking) {
                $tracking->delete(); // Soft delete user tracking records
            });

            // Soft delete related team members
            $user->teamMembers()->each(function ($teamMember) {
                $teamMember->delete(); // Soft delete team members
            });

            // Soft delete teams
            $user->team()->each(function ($team) {
                $team->delete(); // Soft delete teams
            });
            $user->invitationsAsUserReceiver()->each(function ($invitationsAsUserReceiver) {
                $invitationsAsUserReceiver->delete(); // Soft delete teams
            });
            $user->invitationsAsUserSender()->each(function ($invitationsAsUserSender) {
                $invitationsAsUserSender->delete(); // Soft delete teams
            });

        });
    }



    public function friendUsers()
    {
        return $this->hasMany(Friend::class, 'friend_id');

    }
    public function EvaluationsUser()
    {
        return $this->hasMany(Evaluation::class, 'user_id');
    }

    public function usersFriends()
    {
        return $this->hasMany(Friend::class, 'user_id');

    }
    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
            ->withTimestamps()->whereNull('users.deleted_at');
    }


    public function sentFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'sender_id');
    }
    public function receivedFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'receiver_id');
    }


    public function userResultfirstCompetitor()
    {
        return $this->hasMany(Result::class, 'first_competitor_id');
    }

    public function userResultSecondCompetitor()
    {
        return $this->hasMany(Result::class, 'second_competitor_id');
    }

    public function userWinner()
    {
        return $this->hasMany(Result::class, 'winner_id');
    }



    public function sentNotifications()
    {
        return $this->hasMany(Notification::class, 'sender_id');
    }
    // Challenges where the user is user1
    public function challengesAsUser1()
    {
        return $this->hasMany(Challenge::class, 'user1_id');
    }

// Challenges where the user is user2
    public function challengesAsUser2()
    {
        return $this->hasMany(Challenge::class, 'user2_id');
    }

    public function invitationsAsUserSender()
    {
        return $this->hasMany(Invitation::class, 'sender_id');
    }

    // An invitation belongs to the receiver
    public function invitationsAsUserReceiver()
    {
        return $this->hasMany(Invitation::class, 'receiver_id');
    }

    public function senderContactUs()
    {
        return $this->hasMany(ContactUs::class, 'sender_id');
    }

    // Relationship to notifications received by the user
    public function receivedNotifications()
    {
        return $this->hasMany(Notification::class, 'receiver_id');
    }
    public function userTracking()
    {
        return $this->hasMany(UserTracking::class, 'user_id');
    }
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class, 'user_id');
    }

    public function team()
    {
        return $this->hasMany(Team::class, 'user_id');
    }




}
