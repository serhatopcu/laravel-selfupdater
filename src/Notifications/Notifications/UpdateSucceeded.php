<?php

declare(strict_types=1);

namespace SerhaTopcu\Updater\Notifications\Notifications;

use SerhaTopcu\Updater\Events\UpdateSucceeded as UpdateSucceededEvent;
use SerhaTopcu\Updater\Notifications\BaseNotification;
use Illuminate\Notifications\Messages\MailMessage;

final class UpdateSucceeded extends BaseNotification
{
    /**
     * @var UpdateSucceededEvent
     */
    protected $event;

    public function toMail(): MailMessage
    {
        return (new MailMessage())
            ->from(config('self-update.notifications.mail.from.address', config('mail.from.address')), config('self-update.notifications.mail.from.name', config('mail.from.name')))
            ->subject(config('app.name').': Update succeeded');
    }

    public function setEvent(UpdateSucceededEvent $event)
    {
        $this->event = $event;

        return $this;
    }
}
