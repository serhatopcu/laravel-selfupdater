<?php

declare(strict_types=1);

namespace SerhaTopcu\Updater\Notifications\Notifications;

use SerhaTopcu\Updater\Events\UpdateAvailable as UpdateAvailableEvent;
use SerhaTopcu\Updater\Notifications\BaseNotification;
use Illuminate\Notifications\Messages\MailMessage;

final class UpdateAvailable extends BaseNotification
{
    /**
     * @var UpdateAvailableEvent
     */
    protected $event;

    public function toMail(): MailMessage
    {
        return (new MailMessage())
            ->from(config('self-update.notifications.mail.from.address', config('mail.from.address')), config('self-update.notifications.mail.from.name', config('mail.from.name')))
            ->subject(config('app.name').': Update available');
    }

    public function setEvent(UpdateAvailableEvent $event)
    {
        $this->event = $event;

        return $this;
    }
}
