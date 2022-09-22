<?php
 
namespace App\View\Composers;
 
use App\Models\Notification;
use Illuminate\View\View;
 
class NotificationsComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {   $notifications = null;
        $user = auth()->user() ?? '';

        if($user){
            $notifications = Notification::where(['user_id' => $user->id,'mark_read' => 0])->get();
        }

        $view->with('notifications',$notifications);
    }
}